<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            'dr_1' => Doctor::where('name', 'Dr. Presetiyawan, Sp.KJ(K)')->get(),
            'dr_2' => Doctor::where('name', 'Dr. Yuniar Pukuk Kesuma, Sp.KJ(K)')->get(),
            'dr_3' => Doctor::where('name', 'Dr. Rahmatsjah Said, Sp.KJ. MARS')->get(),
            'dr_4' => Doctor::where('name', 'Dr. Natalingrum Sukmarini, Sp.KJ(K). MKes')->get(),
            'dr_5' => Doctor::where('name', 'Dr. Putu Lohita Rahmawati, Sp.N')->get(),
            'dr_6' => Doctor::where('name', 'Dr. Anatasia Novitasari, Sp.S, M. Biomed')->get(),
            'dr_7' => Doctor::where('name', 'Dr. dr Fidiansjah, Sp.KJ, MPH')->get(),
            'dr_8' => Doctor::where('name', 'Dr. Lahargo K, Sp.KJ')->get(),
            'dr_9' => Doctor::where('name', 'Dr. Immanuel Santoso M, Sp.OG')->get(),
            'dr_10' => Doctor::where('name', 'Dr. Deny Handayanto, Sp.B, FINACS')->get(),
            'dr_11' => Doctor::where('name', 'Dr. Rinita Mardiani, Sp.KJ')->get(),
            'dr_12' => Doctor::where('name', 'Dr. Widi Primaciptadi, Sp.KJ')->get(),
            'dr_13' => Doctor::where('name', 'Dr. Hans C. D, Sp.KJ')->get(),
        ];

        $schedules = [
            [
                'polyclinic' => '1',
                'day' => 'Senin',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Selasa',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Rabu',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Kamis',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Jumat',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Sabtu',
                'start' => '08:00',
                'end' => '12:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Senin',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_2'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Selasa',
                'start' => '14:00',
                'end' => '17:00',
                'doctor_id' => $doctors['dr_2'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Kamis',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_2'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Sabtu',
                'start' => '08:00',
                'end' => '11:00',
                'doctor_id' => $doctors['dr_2'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Sabtu',
                'start' => '08:00',
                'end' => '11:00',
                'doctor_id' => $doctors['dr_3'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Senin',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Selasa',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Rabu',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Kamis',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Jumat',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Sabtu',
                'start' => '10:00',
                'end' => '12:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Senin',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_5'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Selasa',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_5'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Rabu',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_5'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Kamis',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_5'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Senin',
                'start' => '07:30',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_6'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Rabu',
                'start' => '07:30',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_6'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Jumat',
                'start' => '07:30',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_6'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Selasa',
                'start' => '16:00',
                'end' => '19:00',
                'doctor_id' => $doctors['dr_7'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Kamis',
                'start' => '16:00',
                'end' => '19:00',
                'doctor_id' => $doctors['dr_7'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Sabtu',
                'start' => '16:00',
                'end' => '19:00',
                'doctor_id' => $doctors['dr_7'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Senin',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Senin',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Selasa',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Rabu',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Rabu',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Jumat',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Senin',
                'start' => '13:00',
                'end' => '15:00',
                'doctor_id' => $doctors['dr_9'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Jumat',
                'start' => '13:00',
                'end' => '15:00',
                'doctor_id' => $doctors['dr_9'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Kamis',
                'start' => '14:00',
                'end' => '19:00',
                'doctor_id' => $doctors['dr_10'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Kamis',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_11'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Sabtu',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_12'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Jumat',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_13'][0]->id,
            ],
        ];

        foreach ($schedules as $schedule) {
            Schedule::factory()->create($schedule);
        }
    }
}
