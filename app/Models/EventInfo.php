<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventInfo extends Model
{
    use HasFactory;

    public function Eventdatesrates()
    {
        return $this->hasMany(EventDatesRate::class);
    }

    public function Eventcatgeory()
    {
        return $this->hasOne(EventCategory::class);
    }

    public function images()
    {
        return $this->hasMany(Tourimages::class);
    }

    public function bookings(){
        return $this->hasMany(Bookings::class);
    }


}
