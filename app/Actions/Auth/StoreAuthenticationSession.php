<?php

namespace App\Actions\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreAuthenticationSession
{
    use AsAction;

    public function handle(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
    }
}
