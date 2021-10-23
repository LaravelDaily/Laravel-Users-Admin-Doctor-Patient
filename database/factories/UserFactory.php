<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function doctor()
    {
        return $this->state(function (array $attributes) {
            $workDays = ['I, III, V', 'II, IV'];

            return [
                'role_id' => User::ROLE_DOCTOR,
                'doctor_licence_no' => $this->faker->bothify('???-######'),
                'doctor_licence_start_date' => $this->faker->dateTimeBetween('-15 years', '-3 years'),
                'doctor_licence_end_date' => $this->faker->boolean(35) ? $this->faker->dateTimeBetween('-3 years', '-10 days') : null,
                'doctor_stamp_number' => $this->faker->randomNumber(6),
                'doctor_hospital_name' => $this->faker->company(),
                'doctor_specialty' => $this->faker->jobTitle(),
                'doctor_department' => $this->faker->catchPhrase(),
                'doctor_biography' => $this->faker->text(1000),
                'doctor_work_days' => $workDays[mt_rand(0,count($workDays)-1)],
                'doctor_work_hours' => '9-5',
            ];
        });
    }

    public function patient()
    {
        return $this->state(function (array $attributes) {
            $genres = ['male', 'female'];

            return [
                'role_id' => User::ROLE_PATIENT,
                'patent_birth_date' => $this->faker->date(),
                'patient_declared_address' => $this->faker->address(),
                'patient_home_address' => $this->faker->address(),
                'patient_phone_no' => $this->faker->phoneNumber(),
                'patient_gender' => $genres[mt_rand(0,count($genres)-1)],
                'patient_personal_code' => $this->faker->randomNumber(9),
                'patient_social_number' => $this->faker->randomNumber(6).'-'.$this->faker->randomNumber(6),
                'patient_last_visit_time' => $this->faker->dateTime(),
                'patient_last_visit_reason' => $this->faker->words(rand(2,3), true),
                'patient_description' => $this->faker->text(1000),
            ];
        });
    }
}
