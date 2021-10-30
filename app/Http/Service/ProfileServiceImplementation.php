<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\Hash;

class ProfileServiceImplementation implements ProfileService
{

    public function updateProfile(array $data)
    {
        if (!empty($data['password'])) {
            //this should place in repository
            auth()->user()->update(['password' => Hash::make($data['password'])]);
        }

        auth()->user()->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

    }
}