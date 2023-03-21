<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'address',
        'birth_place',
        'birth_date',
        'weight',
        'temperature',
        'description',
    ];
    
}

