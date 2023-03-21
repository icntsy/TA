<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'url',
        'method'
    ];

    public function parameters()
    {
        return $this->hasMany(Parameter::class);
    }

    public function response()
    {
        return $this->belongsTo(Response::class, 'id', 'documentation_id');
    }

}
