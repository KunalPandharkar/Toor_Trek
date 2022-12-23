<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDatesRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'duration',
        'variant',
        'price',
        'date'
    ];
}
