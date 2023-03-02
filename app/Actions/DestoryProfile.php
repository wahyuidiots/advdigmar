<?php

namespace App\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class DestoryProfile
{
    use AsAction;

    public function handle(Request $request)
    {
        $user = $request->user();
        Auth::logout();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
