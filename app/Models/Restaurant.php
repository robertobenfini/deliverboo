<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsToMany(Typologie::class);
    }
}
