<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory, HasUuids, Sluggable;

    protected $fillable = [
        'name',
        'gender',
        'nik',
        'birth_place',
        'birth_date',
        'religion',
        'address',
        'phone',
        'marital_status',
        'education',
        'job',
        'citizen',
        'madical_record',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
}
