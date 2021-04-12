<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'city',
        'stadium',
    ];

    public function visitor_games(){
        return $this->hasMany(Game::class, 'team_1', 'id');
    }
    public function local_games(){
        return $this->hasMany(Game::class, 'team_2', 'id');
    }
    public function games(){
        return $this->hasMany(Game::class, 'team_1', 'id')->orWhere('team_2', $this->id);
    }
}
