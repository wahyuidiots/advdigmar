<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\DestroyAuthenticationSession;
use App\Actions\Auth\StoreAuthenticationSession;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request, StoreAuthenticationSession $action): RedirectResponse
    {
        $action->handle($request);
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request, DestroyAuthenticationSession $action): RedirectResponse
    {
        $action->handle($request);
        return redirect('/');
    }
}
