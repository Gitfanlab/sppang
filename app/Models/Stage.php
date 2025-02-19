<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stage extends Model
{
    protected $table = 'M_STAGES';

    protected $fillable = [
        'NB_INDEX',
        'LB_STAGE',
        'CD_STAGE_TYPE',
        'CD_CAREER_PATH',
        'CD_OU',
        'NB_DURATION',
    ];

    public function stage_type(): BelongsTo
    {
        return $this->belongsTo(StageType::class);
    }

    public function career_path(): BelongsTo
    {
        return $this->belongsTo(CareerPath::class);
    }

    public function ou(): BelongsTo
    {
        return $this->belongsTo(OrganisationalUnit::class);
    }

    public function progresses(): HasMany
    {
        return $this->hasMany(Progress::class);
    }
}
