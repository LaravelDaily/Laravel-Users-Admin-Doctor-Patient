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
            return [
                'role_id' => User::ROLE_DOCTOR,
                'doctor_licence_no' => $this->faker->bothify('???-######'),
                'doctor_licence_start_date' => $this->faker->dateTimeBetween('-15 years', '-3 years'),
                'doctor_licence_end_date' => null,
                'doctor_specialty' => '',
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
                'patient_address' => $this->faker->address(),
                'patient_phone_no' => $this->faker->phoneNumber(),
                'patient_gender' => $genres[mt_rand(0,count($genres)-1)],
                'patient_personal_code' => $this->faker->randomNumber(9),
                'patient_social_number' => $this->faker->randomNumber(6).'-'.$this->faker->randomNumber(6),
            ];
        });
    }
}
