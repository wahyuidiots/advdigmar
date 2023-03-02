<?php

namespace App\Actions;

use App\Http\Requests\ProfileUpdateRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateProfile
{
    use AsAction;

    public function handle(ProfileUpdateRequest $request)
    {
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->save();
    }
}
