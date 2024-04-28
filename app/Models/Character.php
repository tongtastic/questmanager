<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Item;
use App\Models\Spell;
use App\Models\Skill;
use App\Models\Quest;

class Character extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'user_id',
        'body',
        'mind',
        'experience',
        'defense',
        'attack',
        'gold',
        'type',
        'image'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class);
    }

    public function spells(): BelongsToMany
    {
        return $this->belongsToMany(Spell::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }

    public function quests(): BelongsToMany
    {
        return $this->belongsToMany(Quest::class);
    }
}
