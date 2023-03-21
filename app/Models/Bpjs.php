<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identity_card',
        'family_card',
        'bpjs_card',
    ];
}
