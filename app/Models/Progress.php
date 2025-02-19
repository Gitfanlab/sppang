<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Progress extends Model
{
    protected $table = 'M_PROGRESSES';

    protected $fillable = [
        'CD_EMPLOYEE',
        'CD_STAGE',
        'CD_PROGRESS_STATUS',
        'DT_START',
        'DT_COMPLETION',
        'NB_COMPLETION_PERCENTAGE',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function stage(): BelongsTo
    {
        return $this->belongsTo(Stage::class);
    }

    public function progress_status(): BelongsTo
    {
        return $this->belongsTo(ProgressStatus::class);
    }
}
