<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    /* relazione many to many alla tabella orders */
    public function dishes(): BelongsToMany
    {
        return $this->belongsToMany(Dish::class);
    }
}
