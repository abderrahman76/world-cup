<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class squadlist extends Model
{
    use HasFactory;
    protected $fillable = [

        'formation',
       	'match_id',
        'team_id',	
    ];

    
    public function match()
    {
        return $this->belongsTo(matchs::class);
    }
    

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }

    public function team()
    {
        return $this->belongsTo(team::class);
    }
}
