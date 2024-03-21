<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Timetable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timetable>
 */
class TimetableFactory extends Factory
{
    protected $model = Timetable::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'polyclinic' => fake()->numberBetween(1, 4),
            'day' => fake()->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']),
            'start' => '14:00',
            'end' => '16:00',
            'doctor_id' => Doctor::all('id')->random(),
        ];
    }
}
