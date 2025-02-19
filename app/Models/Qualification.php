<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Qualification extends Model
{
    protected $table = 'R_QUALIFICATIONS';

    protected $fillable = [
        'CD_QUALIFICATION',
        'LB_QUALIFICATION',
        'CD_QUALIF_TYPE',
    ];

    public function qualifType(): BelongsTo
    {
        return $this->belongsTo(QualificationType::class);
    }

    public function employeeQualif(): HasMany
    {
        return $this->hasMany(EmployeeQualification::class);
    }

    public function jobQualif(): HasMany
    {
        return $this->hasMany(JobQualification::class);
    }
}
