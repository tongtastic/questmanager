<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Monster;
use App\Models\Character;

class Quest extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'image',
        'attributes',
        'value'
    ];

    /**
     * The monsters that belong to the quest.
     */
    public function monsters(): BelongsToMany
    {
        return $this->belongsToMany(Monster::class);
    }

    /**
     * The characters that belong to the quest.
     */
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
