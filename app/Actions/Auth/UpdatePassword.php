<?php

namespace App\Actions\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdatePassword
{
    use AsAction;

    public function handle(Request $request, $validated)
    {
        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);
    }
}
