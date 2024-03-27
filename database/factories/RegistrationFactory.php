<?php

namespace Database\Factories;

use App\Models\Registration;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $i = 1;

        return [
            'registration_number' => fake()->numberBetween(1, 200),
            'registration_date' => fake()->date(),
            'status' => fake()->boolean(),
            'responsible_name' => fake()->name(),
            'responsible_phone' => fake()->phoneNumber(),
            'user_id' => User::all('id')->random(),
            'timetable_id' => Timetable::all('id')->random(),
            'confirmed_at' => fake()->dateTime()
        ];
    }
}
