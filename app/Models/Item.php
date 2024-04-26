<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character;

class Item extends Model
{
    use HasFactory;

    public function characters(): MorphToMany
    {
        return $this->morphedByMany(Character::class, 'itemable');
    }

}
