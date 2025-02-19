<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rank extends Model
{
    protected $table = 'R_RANKS';

    protected $fillable = [
        'CD_RANK',
        'LB_RANK',
        'CD_RANK_CAT',
    ];

    public function rank_category(): BelongsTo
    {
        return $this->belongsTo(RankCategory::class);
    }
}
