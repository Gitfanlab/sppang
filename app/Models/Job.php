<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    protected $table = 'R_JOBS';

    protected $fillable = [
        'CD_JOB',
        'LB_ROLE',
        'CD_DOMAIN',
        'CD_RANK',
        'CD_CAREER_PATH',
        'CD_ETR',
        'CD_OU',
        'DT_YEAR_NEED',
        'LB_COMMENT',
    ];

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }

    public function rank(): BelongsTo
    {
        return $this->belongsTo(Rank::class);
    }

    public function career_path(): BelongsTo
    {
        return $this->belongsTo(CareerPath::class);
    }

    public function rem(): BelongsTo
    {
        return $this->belongsTo(REM::class);
    }

    public function ou(): BelongsTo
    {
        return $this->belongsTo(OrganisationalUnit::class);
    }

    public function affectations(): HasMany
    {
        return $this->hasMany(Affectation::class);
    }

    public function job_qualifications(): HasMany
    {
        return $this->hasMany(JobQualification::class);
    }
}
