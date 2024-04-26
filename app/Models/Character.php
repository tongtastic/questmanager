<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Item;
use App\Models\Spell;
use App\Models\Skill;

class Character extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): MorphToMany
    {
        return $this->morphToMany(Item::class, 'itemable');
    }

    public function spells(): MorphToMany
    {
        return $this->morphToMany(Spell::class, 'spellable');
    }

    public function skills(): MorphToMany
    {
        return $this->morphToMany(Skill::class, 'skillable');
    }
}
