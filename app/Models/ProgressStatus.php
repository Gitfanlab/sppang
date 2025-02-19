<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgressStatus extends Model
{
    protected $table = 'R_PROGRESS_STATUSES';

    protected $fillable = [
        'LB_PROGRESS_STATUS',
    ];

    public function progresses(): HasMany
    {
        return $this->hasMany(Progress::class);
    }
}
