<?php

namespace App\Http\Controllers;

use App\Models\User;

class DoctorsController extends Controller
{
    public function __invoke()
    {
        $doctors = User::where('role_id', User::ROLE_DOCTOR)->paginate();

        return view('doctors.index', compact('doctors'));
    }
}