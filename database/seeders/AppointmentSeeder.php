<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        $doctors = collect(User::where('role_id', User::ROLE_DOCTOR)->get()->modelKeys());
        $patients = collect(User::where('role_id', User::ROLE_PATIENT)->get()->modelKeys());

        $faker = \Faker\Factory::create();

        $data = [];

        for ($i = 0; $i < 1000; $i++) {
            $data[] = [
                'doctor_id' => $doctors->random(),
                'patient_id' => $patients->random(),
                'start_time' => $faker->dateTimeInInterval(now(), '+30 days'),
            ];
        }

        foreach ($data as $d) {
            Appointment::create($d);
        }

    }
}
