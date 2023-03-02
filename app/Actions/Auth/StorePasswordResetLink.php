<?php

namespace App\Actions\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Lorisleiva\Actions\Concerns\AsAction;

class StorePasswordResetLink
{
    use AsAction;

    public function handle(Request $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status ;
    }
}
