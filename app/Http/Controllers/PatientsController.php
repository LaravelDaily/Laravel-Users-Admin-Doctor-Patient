<?php

namespace App\Http\Controllers;

use App\Models\User;

class PatientsController extends Controller
{
    public function __invoke()
    {
        $patients = User::where('role_id', User::ROLE_PATIENT)->paginate();

        return view('patients.index', compact('patients'));
    }
}