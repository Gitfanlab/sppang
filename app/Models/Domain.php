<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Domain extends Model
{
    protected $table = 'R_DOMAINS';

    protected $fillable = [
        'CD_DOMAIN',
        'LB_DOMAIN',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
