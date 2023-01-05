<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $guarded = ['score'];

    /* -- 1 competition/match belongs to 1 club -- */
    public function localClub()
    {
        return $this->belongsTo(Club::class, 'id_local_club');
    }

    public function visitorClub()
    {
        return $this->belongsTo(Club::class, 'id_visitor_club');
    }
}
