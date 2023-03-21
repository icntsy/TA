<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregnantmom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'address',
        'anak_ke',
        'hpht',
        'hpl',
        'pregnant_age',
        'lila',
        'weight',
        'blood_pressure',
        'tfu',
        'djj',
        'immunization_tt',
        'description',
        'complaint',
    ];
}
