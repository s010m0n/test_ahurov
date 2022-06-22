<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    const MIN_TEMPERATURE = 0;
    const MIN_PERIOD = 1;
    const MAX_PERIOD = 24;
    const BLOCK_PRICE = 2;
    const IN_PROGRESS = 'in_progress';
    const SUCCESSFUL = 'successful';

    protected $fillable = [
        'device_token',
        'room_id',
        'number_of_blocks',
        'volume',
        'temperature',
        'days',
        'price',
        'secret_code',
        'status',
    ];

    public function room(){
        return $this->belongsTo(Room::class,'room_id','id');
    }
}
