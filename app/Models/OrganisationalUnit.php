<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrganisationalUnit extends Model
{
    protected $table = 'R_ORGANISATIONAL_UNITS';

    protected $fillable = [
        'CD_OU',
        'LB_OU',
        'CD_NEXT_OU',
        'CD_OU_TYPE',
        'CD_OU_ENV',
    ];

    public function previous_ou(): BelongsTo
    {
        return $this->belongsTo(OrganisationalUnit::class);
    }

    public function next_ou(): HasOne
    {
        return $this->hasOne(OrganisationalUnit::class);
    }

    public function ou_type(): BelongsTo
    {
        return $this->belongsTo(OUType::class);
    }

    public function ou_env(): BelongsTo
    {
        return $this->belongsTo(OUEnvironment::class);
    }
}
