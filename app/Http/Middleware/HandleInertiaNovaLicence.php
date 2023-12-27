<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Laravel\Nova\Http\Middleware\HandleInertiaRequests;

class HandleInertiaNovaLicence extends HandleInertiaRequests
{
    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            'validLicense' => function () {
                return true;// just return true l000l
            },
        ]);
    }
}
