<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Bureaudevotes extends Model
{
    use HasFactory;
    protected $fillable=['id', 'nom', 'arrondissements_id'];


    public function arrondissements(): BelongsTo
    {
        return $this->belongsTo(Arrondissements::class);
    }
}
