<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RankCategory extends Model
{
    protected $table = 'R_RANK_CAT';

    protected $fillable = [
        'CD_RANK_CAT',
        'LB_RANK_CAT',
    ];

    public function ranks(): HasMany
    {
        return $this->hasMany(Rank::class);
    }
}
