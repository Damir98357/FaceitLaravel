<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'my_players';

    public function matchmakings()

    {
        return $this->belongsToMany(Matchmaking::class, 'matchmakings_players');
    }
}
