<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function __invoke()
    {
        $appointments = Appointment::with('doctor', 'patient')->paginate();

        return view('appointments.index', compact('appointments'));
    }
}