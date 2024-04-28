<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\models\Quest;

class Monster extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'type',
        'description',
        'image',
        'attributes',
        'attack',
        'defense',
        'body',
        'mind'
    ];

    /**
     * The questss that belong to the monster.
     */
    public function quests(): BelongsToMany
    {
        return $this->belongsToMany(Quest::class);
    }
    
}
