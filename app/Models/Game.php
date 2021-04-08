<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'team_1',
        'result_1',
        'team_2',
        'result_2',
        'stadium',
    ];

    public function teams(){
        return $this->belongsToMany(Team::class);
    }
}
