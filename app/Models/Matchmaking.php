<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchmaking extends Model
{
    protected $fillable = ['start_time' , 'end_time'];

    public function map()
    {
        return $this->belongsTo(Map::class);
    }
    use HasFactory;
}
