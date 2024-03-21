<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Timetable;
use Illuminate\Database\Seeder;

class TimetableSeeder extends Seeder
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
                'day' => 'Monday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Tuesday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Wednesday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Thursday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Friday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Saturday',
                'start' => '08:00',
                'end' => '12:00',
                'doctor_id' => $doctors['dr_1'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Monday',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_2'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Tuesday',
                'start' => '14:00',
                'end' => '17:00',
                'doctor_id' => $doctors['dr_2'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Thursday',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_2'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Saturday',
                'start' => '08:00',
                'end' => '11:00',
                'doctor_id' => $doctors['dr_2'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Saturday',
                'start' => '08:00',
                'end' => '11:00',
                'doctor_id' => $doctors['dr_3'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Monday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Tuesday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Wednesday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Thursday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Friday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Saturday',
                'start' => '10:00',
                'end' => '12:00',
                'doctor_id' => $doctors['dr_4'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Monday',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_5'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Tuesday',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_5'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Wednesday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_5'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Thursday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_5'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Monday',
                'start' => '07:30',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_6'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Wednesday',
                'start' => '07:30',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_6'][0]->id,
            ],
            [
                'polyclinic' => '2',
                'day' => 'Friday',
                'start' => '07:30',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_6'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Tuesday',
                'start' => '16:00',
                'end' => '19:00',
                'doctor_id' => $doctors['dr_7'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Thursday',
                'start' => '16:00',
                'end' => '19:00',
                'doctor_id' => $doctors['dr_7'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Saturday',
                'start' => '16:00',
                'end' => '19:00',
                'doctor_id' => $doctors['dr_7'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Monday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Monday',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Tuesday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Wednesday',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Wednesday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Friday',
                'start' => '07:00',
                'end' => '09:00',
                'doctor_id' => $doctors['dr_8'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Monday',
                'start' => '13:00',
                'end' => '15:00',
                'doctor_id' => $doctors['dr_9'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Friday',
                'start' => '13:00',
                'end' => '15:00',
                'doctor_id' => $doctors['dr_9'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Thursday',
                'start' => '14:00',
                'end' => '19:00',
                'doctor_id' => $doctors['dr_10'][0]->id,
            ],
            [
                'polyclinic' => '4',
                'day' => 'Thursday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_11'][0]->id,
            ],
            [
                'polyclinic' => '1',
                'day' => 'Saturday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_12'][0]->id,
            ],
            [
                'polyclinic' => '3',
                'day' => 'Friday',
                'start' => '14:00',
                'end' => '16:00',
                'doctor_id' => $doctors['dr_13'][0]->id,
            ],
        ];

        foreach ($schedules as $schedule) {
            Timetable::factory()->create($schedule);
        }
    }
}
