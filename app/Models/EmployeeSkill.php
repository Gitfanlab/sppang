<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmployeeSkill extends Model
{
    protected $table = 'M_EMPLOYEE_SKILLS';

    protected $fillable = [
        'CD_EMPLOYEE',
        'CD_SKILL',
        'LB_COMMENT',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
