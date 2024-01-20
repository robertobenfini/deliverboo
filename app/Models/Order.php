<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    /* relazione many to many alla tabella tipologie */
    public function dishes(): BelongsToMany
    {
        return $this->belongsToMany(Typology::class);
    }
}
