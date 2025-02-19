<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StageType extends Model
{
    protected $table = 'R_STAGE_TYPES';

    protected $fillable = [
        'LB_STAGE_TYPE',
    ];

    public function stages(): HasMany
    {
        return $this->hasMany(Stage::class);
    }
}
