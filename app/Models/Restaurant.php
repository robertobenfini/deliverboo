<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Restaurant extends Model
{
    use HasFactory;

    /* relazione one to one con la tabella user */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /* relazione many to many alla tabella tipologie */
    public function typologies(): BelongsToMany
    {
        return $this->belongsToMany(Typology::class);
    }

    /* Relazione one-to-many con la tabella piatti*/
    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class);
    }
}   

