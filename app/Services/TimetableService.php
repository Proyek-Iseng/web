<?php

namespace App\Services;

use App\Models\Timetable;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class TimetableService.
 */
class TimetableService
{
    public static function getAll() : Collection {
        $timetables = Timetable::with('doctor')->get();

        return $timetables;
    }
}
