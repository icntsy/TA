<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familyplanning extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'address',
        'weight',
        'blood_pressure',
        'description',
    ];
}
