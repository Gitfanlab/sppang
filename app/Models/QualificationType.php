<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QualificationType extends Model
{
    protected $table = 'R_QUALIF_TYPES';

    protected $fillable = [
        'CD_QUALIF_TYPE',
        'LB_QUALIF_TYPE',
    ];

    public function qualifications(): HasMany
    {
        return $this->hasMany(Qualification::class);
    }
}
