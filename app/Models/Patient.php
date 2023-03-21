<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'nik',
        'birth_date',
        'gender',
        'address',
        'phone_number',
        'study',
        'bpjs_number',
        'profession',
        'allergy',
    ];
}
