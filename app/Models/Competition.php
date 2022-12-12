<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $guarded = ['score'];

    /* -- friendly urls -- */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /* -- 1 competition belongs to many clubs -- */
    public function club()
    {
        return $this->belongsTo(Club::class, 'id_club');
    }
}
