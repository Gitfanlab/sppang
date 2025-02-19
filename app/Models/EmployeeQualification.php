<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeQualification extends Model
{
    protected $table = 'M_EMPLOYEE_QUALIFICATIONS';

    protected $fillable = [
        'CD_EMPLOYEE',
        'CD_QUALIFICATION',
        'DT_OBTAINED',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function qualification(): BelongsTo
    {
        return $this->belongsTo(Qualification::class);
    }
}
