<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MGS extends Model
{
    protected $table = 'R_MGS';

    protected $fillable = [
        'CD_MGS',
    ];

    public function rem(): HasMany
    {
        return $this->hasMany(REM::class);
    }
}
