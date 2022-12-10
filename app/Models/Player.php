<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* -- friendly urls -- */
    public function getRouteKeyName()
    {
        return 'slug';
    }
 
    /* -- 1 player belongs to 1 club -- */
    public function club()
    {
        return $this->belongsTo(Club::class, 'id_club');
    }
}
