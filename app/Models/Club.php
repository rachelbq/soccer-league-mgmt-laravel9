<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $guarded = [];

    // /* -- friendly urls -- */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    /* -- 1 club has many players -- */
    public function players()
    {
        return $this->hasMany(Player::class, 'id');
    }

    /* -- 1 club has many competitions -- */
    public function competitions()
    {
        return $this->hasMany(Competition::class, 'id_local_club');
        return $this->hasMany(Competition::class, 'id_visitor_club');
    }
}

