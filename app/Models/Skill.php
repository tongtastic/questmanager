<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\models\Character;

class Skill extends Model
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


    public function characters(): MorphToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
