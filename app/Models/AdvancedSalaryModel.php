<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvancedSalaryModel extends Model
{
    use HasFactory;
    protected $table = 'advanced_salaries';
    protected $fillable = ['emp_id','month','advanced_salary','year'];
}
