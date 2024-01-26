<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Typology extends Model
{
    use HasFactory;

    /* relazione many to many con tabella restaurant */
    public function restaurant()
    {
        return $this->belongsToMany(Restaurant::class);
    }
}
