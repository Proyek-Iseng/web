<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::factory(13)
            ->sequence(
                ['name' => 'Dr. Presetiyawan, Sp.KJ(K)'],
                ['name' => 'Dr. Yuniar Pukuk Kesuma, Sp.KJ(K)'],
                ['name' => 'Dr. Rahmatsjah Said, Sp.KJ. MARS'],
                ['name' => 'Dr. Natalingrum Sukmarini, Sp.KJ(K). MKes'],
                ['name' => 'Dr. Putu Lohita Rahmawati, Sp.N'],
                ['name' => 'Dr. Anatasia Novitasari, Sp.S, M. Biomed'],
                ['name' => 'Dr. dr Fidiansjah, Sp.KJ, MPH'],
                ['name' => 'Dr. Lahargo K, Sp.KJ'],
                ['name' => 'Dr. Immanuel Santoso M, Sp.OG'],
                ['name' => 'Dr. Deny Handayanto, Sp.B, FINACS'],
                ['name' => 'Dr. Rinita Mardiani, Sp.KJ'],
                ['name' => 'Dr. Widi Primaciptadi, Sp.KJ'],
                ['name' => 'Dr. Hans C. D, Sp.KJ'],
            )
            ->create();
    }
}
