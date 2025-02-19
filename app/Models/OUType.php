<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OUType extends Model
{
    protected $table = 'R_OU_TYPES';

    protected $fillable = [
        'CD_OU_TYPE',
        'LB_OU_TYPE',
    ];

    public function ous(): HasMany
    {
        return $this->hasMany(OrganisationalUnit::class);
    }
}
