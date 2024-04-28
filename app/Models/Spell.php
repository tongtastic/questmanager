<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Character;

class Spell extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'type',
        'description',
        'image',
        'attributes',
        'value'
    ];

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
