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
                ['name' => 'dr. Presetiyawan, Sp.KJ(K)'],
                ['name' => 'dr. Yuniar Pukuk Kesuma, Sp.KJ(K)'],
                ['name' => 'dr. Rahmatsjah Said, Sp.KJ. MARS'],
                ['name' => 'dr. Natalingrum Sukmarini, Sp.KJ(K). MKes'],
                ['name' => 'dr. Putu Lohita Rahmawati, Sp.N'],
                ['name' => 'dr. Anatasia Novitasari, Sp.S, M. Biomed'],
                ['name' => 'Dr. dr Fidiansjah, Sp.KJ, MPH'],
                ['name' => 'Dr. Lahargo K, Sp.KJ'],
                ['name' => 'dr. Immanuel Santoso M, Sp.OG'],
                ['name' => 'dr. Deny Handayanto, Sp.B, FINACS'],
                ['name' => 'Dr. Rinita Mardiani, Sp.KJ'],
                ['name' => 'dr. Widi Primaciptadi, Sp.KJ'],
                ['name' => 'Dr. Hans C. D, Sp.KJ'],
            )
            ->create();
    }
}
