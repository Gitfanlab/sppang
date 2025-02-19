<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActivityType extends Model
{
    protected $table = 'R_ACTIVITY_TYPES';

    protected $fillable = [
        'CD_ACTIVITY_TYPE',
        'CD_ETR',
    ];

    public function rem(): BelongsTo
    {
        return $this->belongsTo(REM::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
