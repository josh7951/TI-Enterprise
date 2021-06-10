<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
    use HasFactory;
    protected $fillable = [
        'series',
        'tournament',
        'location',
        'start_date',
        'end_date',
    ];
}
