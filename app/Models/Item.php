<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character;

class Item extends Model
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

    /**
     * The items that belong to the character.
     */
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }

}
