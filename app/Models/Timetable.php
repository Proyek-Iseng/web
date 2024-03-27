<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Timetable extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'polyclinic',
        'day',
        'start',
        'end',
        'doctor_id',
    ];

    public function Doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function registrations() : HasMany {
        return $this->hasMany(Registration::class);
    }
}
