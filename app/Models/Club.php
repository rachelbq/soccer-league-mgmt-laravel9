<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* -- 1 club has many players -- */
    public function players()
    {
        return $this->hasMany(Player::class, 'id');
    }

    /* -- 1 club has many competitions (as local & as visitor) -- */
    public function localCompetitions()
    {
        return $this->hasMany(Competition::class, 'id_local_club');
    }

    public function visitorCompetitions()
    {
        return $this->hasMany(Competition::class, 'id_visitor_club');
    }
}

