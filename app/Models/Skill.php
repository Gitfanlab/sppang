<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    protected $table = 'R_SKILLS';

    protected $fillable = [
        'LB_SKILL',
        'CD_SKILL_TYPE',
        'CD_ACTIVITY',
    ];

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

    public function skill_type(): BelongsTo
    {
        return $this->belongsTo(SkillType::class);
    }
}
