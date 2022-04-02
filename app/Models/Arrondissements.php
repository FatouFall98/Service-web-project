<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arrondissements extends Model
{
    use HasFactory;
    protected $fillable=['id', 'nom', 'departements_id'];


    public function departements(): BelongsTo
    {
        return $this->belongsTo(Departements::class);
    }
}
