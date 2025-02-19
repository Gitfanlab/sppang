<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OUEnvironment extends Model
{
    protected $table = 'R_OU_ENVIRONMENTS';

    protected $fillable = [
        'CD_OU_ENV',
        'LB_OU_ENV',
        'LB_COLOR',
    ];

    public function ous(): HasMany
    {
        return $this->hasMany(OrganisationalUnit::class);
    }
}
