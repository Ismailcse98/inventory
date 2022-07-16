<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModel;

class AttendenceModel extends Model
{
    use HasFactory;
    protected $table ='attendence';
    protected $fillable = ['user_id','att_date','att_year','attendence','edit_date'];

    public function Employee()
    {
        return $this->belongsTo(EmployeeModel::class,'user_id','id');
    }
}
