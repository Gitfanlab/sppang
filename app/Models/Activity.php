<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    protected $table = 'R_ACTIVITIES';

    protected $fillable = [
        'LB_ACTIVITY',
        'CD_ACTIVITY_TYPE',
    ];

    public function activityType(): BelongsTo
    {
        return $this->belongsTo(ActivityType::class);
    }

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
