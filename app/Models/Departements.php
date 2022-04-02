<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Departements extends Model
{
    use HasFactory;
    protected $fillable=['id', 'nom', 'regions_id'];


    public function regions(): BelongsTo
{
    return $this->belongsTo(Regions::class);
}
}
