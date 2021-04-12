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

    public function visitante(){
        return $this->belongsTo(Team::class,'games', 'team_1', 'id');
    }

    public function local(){
        return $this->belongsTo(Team::class,'games', 'team_2', 'id');
    }
}
