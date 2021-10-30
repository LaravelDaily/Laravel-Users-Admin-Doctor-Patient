<?php

namespace App\Http\Controllers;

use App\Http\Service\ProfileService;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    protected  $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;

    }

    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        // i think controller should not have any business logic. i try to
        //make a service class and do the business logic there

        $this->profileService->updateProfile($request->all());
        return redirect()->back()->with('success', 'Profile updated.');
    }
}
