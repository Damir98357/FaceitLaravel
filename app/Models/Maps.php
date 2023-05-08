<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    protected $fillable = ['name' , 'image_url'];
    use HasFactory;

    public function matchmakings()
    {
        return $this->hasMany(Matchmaking::class);
    }
}
