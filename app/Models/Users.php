<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Users extends Model
{

    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'email',
        'password',
        'datenaiss',
        'adresse',
        'sexe',
        'cni',
        'votes_id',
        'bureaudevotes_id',

    ];

    public function votes(): BelongsTo
    {
        return $this->belongsTo(votes::class);
    }

    public function bureaudevotes(): BelongsTo
    {
        return $this->belongsTo(bureaudevotes::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
