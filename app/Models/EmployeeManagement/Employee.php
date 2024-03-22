<?php

namespace App\Models\EmployeeManagement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'dateOfBirth',
        'email',
        'phone',
        'address',
    ];

    protected $casts = [
        'dateOfBirth' => 'date',
    ];
}
