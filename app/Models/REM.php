<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class REM extends Model
{
    protected $table = 'R_REM';

    protected $fillable = [
        'CD_ETR',
        'LB_ETR',
        'CD_MGS',
    ];

    public function mgs(): BelongsTo
    {
        return $this->belongsTo(MGS::class);
    }
}
