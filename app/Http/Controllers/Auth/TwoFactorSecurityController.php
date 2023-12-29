<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\TwoFactorSecurity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Google2FAQRCode\Google2FA;

class TwoFactorSecurityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show 2FA Setting form
     */
    public function show2faForm(Request $request){
        $user = Auth::user();
        $google2fa_url = "";
        $secret_key = "";

        if($user->twoFactorSecurity()->exists()){
            $google2fa = (new Google2FA());
            $google2fa_url = $google2fa->getQRCodeInline(
                'Edgeville',
                $user->email,
                $user->twoFactorSecurity->google2fa_secret
            );
            $secret_key = $user->twoFactorSecurity->google2fa_secret;
        }

        $data = array(
            'user' => $user,
            'secret' => $secret_key,
            'google2fa_url' => $google2fa_url
        );

        return view('auth.2fa_settings')->with('data', $data);
    }

    /**
     * Generate 2FA secret key
     */
    public function generate2faSecret(Request $request){
        $user = Auth::user();
        // Initialise the 2FA class
        $google2fa = (new Google2FA());

        // Add the secret key to the registration data
        $two_factor_security = TwoFactorSecurity::firstOrNew(array('user_id' => $user->id));
        $two_factor_security->user_id = $user->id;
        $two_factor_security->google2fa_enable = 0;
        $two_factor_security->google2fa_secret = $google2fa->generateSecretKey();
        $two_factor_security->save();

        return redirect('/2fa')->with('success',"Secret key is generated.");
    }

    /**
     * Enable 2FA
     */
    public function enable2fa(Request $request){
        $user = Auth::user();
        $google2fa = (new Google2FA());

        $secret = $request->input('secret');
        $valid = $google2fa->verifyKey($user->twoFactorSecurity->google2fa_secret, $secret);

        if($valid){
            $user->twoFactorSecurity->google2fa_enable = 1;
            $user->twoFactorSecurity->save();
            return redirect('2fa')->with('success',"2FA is enabled successfully.");
        }else{
            return redirect('2fa')->with('error',"Invalid verification Code, Please try again.");
        }
    }

    /**
     * Disable 2FA
     */
    public function disable2fa(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error","Your password does not matches with your account password. Please try again.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
        ]);
        $user = Auth::user();
        $user->twoFactorSecurity->google2fa_enable = 0;
        $user->twoFactorSecurity->save();
        return redirect('/2fa')->with('success',"2FA is now disabled.");
    }
}
