<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'nik' => fake()->nik(),
            'birth_place' => fake()->city(),
            'birth_date' => fake()->date(),
            'religion' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'marital_status' => fake()->randomElement(['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']),
            'education' => fake()->randomElement(['Tidak Sekolah', 'SD', 'SLTP Sederajat', 'SLTA Sedajarat', 'D1-D3 Sederajat', 'D4', 'S1', 'S2', 'S3']),
            'job' => fake()->randomElement(['Tidak Bekerja', 'PNS', 'TNI/POLRI', 'BUMN', 'Pegawai Swasta/Wirausaha', 'Lain-lain']),
            'citizen' => fake()->randomElement(['WNI', 'WNA']),
            'medical_record' => fake()->randomElement([fake()->randomNumber(6, true), null]),
        ];
    }
}
