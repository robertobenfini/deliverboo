<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dish extends Model
{
    use HasFactory;

    
    /* Relazione many-to-one con la tabella 'restaurants'*/
  
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }
    
    /* relazione many to many alla tabella ordini */
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
