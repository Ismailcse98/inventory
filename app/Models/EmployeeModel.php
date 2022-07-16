<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AttendenceModel;

class EmployeeModel extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = ['name','email','phone','address','experience','photo','nid_no','salary','vacation','city'];

    public function Attendence()
    {
        return $this->hasMany(AttendenceModel::class,'user_id','id');
    }
}
