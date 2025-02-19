<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobQualification extends Model
{
    protected $table = 'M_JOB_QUALIFICATIONS';

    protected $fillable = [
        'CD_JOB',
        'CD_QUALIFICATION',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function qualification(): BelongsTo
    {
        return $this->belongsTo(Qualification::class);
    }
}
