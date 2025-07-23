<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'trainer_id',
        'booking_date',
        'booking_time',
        'status',
    ];

    public function trainer()
{
    return $this->belongsTo(User::class, 'trainer_id');
}

public function client()
{
    return $this->belongsTo(\App\Models\User::class, 'client_id');
}

}