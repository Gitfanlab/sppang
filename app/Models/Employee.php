<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $table = 'R_EMPLOYEES';

    protected $fillable = [
        'CD_EMPLOYEE',
        'LB_FIRSTNAME',
        'LB_LASTNAME',
        'LN_EMAIL',
        'CD_GENDER',
        'CD_RANK',
        'CD_DOMAIN',
        'DT_JOIN',
        'DT_QUIT',
        'LB_ACTUAL_UNIT',
        'DT_START',
        'DT_END',
        'LB_FUTURE_UNIT',
        'LB_COMMENT',
    ];

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function rank(): BelongsTo
    {
        return $this->belongsTo(Rank::class);
    }

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }

    public function progresses(): HasMany
    {
        return $this->hasMany(Progress::class);
    }

    public function employee_qualif(): HasMany
    {
        return $this->hasMany(EmployeeQualification::class);
    }

    public function affectations(): HasMany
    {
        return $this->hasMany(Affectation::class);
    }

    public function employee_skills(): HasMany
    {
        return $this->hasMany(EmployeeSkill::class);
    }
}
