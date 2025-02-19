<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    protected $table = 'R_GENDERS';

    protected $fillable = [
        'CD_GENDER',
        'LB_GENDER',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
