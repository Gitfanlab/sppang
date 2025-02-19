<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SkillType extends Model
{
    protected $table = 'R_SKILL_TYPES';

    protected $fillable = [
        'LB_SKILL_TYPE',
    ];

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
