<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Doctor extends Model
{
    use HasFactory, HasUuids, Sluggable;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'avaible',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function timetables(): HasMany
    {
        return $this->hasMany(Timetable::class);
    }

    // public function registrations() : HasManyThrough {
    //     return $this->hasManyThrough(Registration::class, Timetable::class);
    // }
}
