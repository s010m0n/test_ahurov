<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
       'location_id',
       'temperature',
       'number_of_block',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function location(){
        return $this->belongsTo(Location::class);
    }
}
