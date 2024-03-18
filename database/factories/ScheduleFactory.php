<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'polyclinic' => fake()->numberBetween(1,4),
            'day' => fake()->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']),
            'start' => fake()->time('H:i'),
            'end' => fake()->time('H:i'),
            'doctor_id' => Doctor::all('id')->random()
        ];
    }
}
