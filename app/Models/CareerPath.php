<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CareerPath extends Model
{
    protected $table = 'M_CAREER_PATHS';

    protected $fillable = [
        'DT_START',
        'DT_END',
        'LB_COMMENT',
    ];

    public function stages(): HasMany
    {
        return $this->hasMany(Stage::class);
    }

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
