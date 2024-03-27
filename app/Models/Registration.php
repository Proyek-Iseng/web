<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'registration_number',
        'registration_date',
        'status',
        'responsible_name',
        'responsible_phone',
        'user_id',
        'timetable_id',
        'confirmed_at'
    ];

    public function patient() : BelongsTo {
        return $this->belongsTo(Patient::class);
    }

    public function timetable() : BelongsTo {
        return $this->belongsTo(Timetable::class);
    }
}
