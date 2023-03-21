<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable=[
        'success',
        'failed',
        'description',
        'documentation_id'
    ];

    public function documentation()
    {
       return $this->belongsTo(Documentation::class);
    }
}
