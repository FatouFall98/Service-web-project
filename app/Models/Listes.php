<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listes extends Model
{
    use HasFactory;
    protected $fillable=['id', 'nom', 'bureaudevotes_id'];


    public function bureaudevotes(): BelongsTo
    {
        return $this->belongsTo(Bureaudevotes::class);
    }
}
