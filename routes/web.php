<?php

use App\Http\Controllers\Auth\TwoFactorSecurityController;
use App\Http\Controllers\HighscoreController;
use App\Http\Controllers\NewsPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\VoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/play', function () {
    return view('play.index');
})->name('play.index');


Route::controller(HighscoreController::class)->group(function(){
    Route::get('/highscores', 'index')->name('highscores.index');
    Route::get('/highscores/player/{username}', 'showPlayer')->name('highscores.player');
    Route::get('/autocomplete-search', 'autocompleteSearch')->name('autocomplete.search');
});


Route::get('/checkout', function (Request $request) {
    $stripePriceId = 'price_deluxe_album';

    $quantity = 1;

    return $request->user()->checkout([$stripePriceId => $quantity], [
        'success_url' => route('checkout-success'),
        'cancel_url' => route('checkout-cancel'),
    ]);
})->name('checkout');

Route::get('/news/{newsPost}', [NewsPostController::class, 'show'])->name('news.show');



Route::middleware(['auth', '2fa'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/store', [StoreController::class, 'index'])->name('store.index');
    Route::get('/callbacks/{vote_site_id}/{username?}', [VoteController::class, 'handleVote'])->name('process.vote');
    Route::get('/vote', [VoteController::class, 'index'])->name('vote.index');
});

Route::group(['prefix'=>'2fa'], function(){
    Route::get('/',[TwoFactorSecurityController::class, 'show2faForm'])->name('2faSettings');
    Route::post('/generateSecret',[TwoFactorSecurityController::class, 'generate2faSecret'])->name('generate2faSecret');
    Route::post('/enable2fa',[TwoFactorSecurityController::class, 'enable2fa'])->name('enable2fa');
    Route::post('/disable2fa',[TwoFactorSecurityController::class, 'disable2fa'])->name('disable2fa');

    // 2fa middleware
    Route::post('/2faVerify', function () {
        return redirect(URL()->previous());
    })->name('2faVerify')->middleware('2fa');
});

require __DIR__.'/auth.php';
