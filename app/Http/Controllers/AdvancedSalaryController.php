<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\AdvancedSalaryModel;
use DB;

class AdvancedSalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Add_advanced_salary()
    {
        $employee_list = EmployeeModel::get();
        return view('add_advanced_salary',compact('employee_list'));
    }
    public function Store_advanced_salary(Request $r)
    {
        $month = $r->month;
        $emp_id = $r->emp_id;
        $checkData = AdvancedSalaryModel::where('emp_id', '=', $emp_id)
                                ->where('month', '=', $month)
                                ->first();
        if ($checkData) {
            return redirect()->back()->with('message', 'Advanced salary has been paid in this month.');
        }else{
            $result = AdvancedSalaryModel::create($r->all());
            if ($result) {
                return redirect(route('all_advanced_salary'));
            }
        }
    }
    public function All_advanced_salary()
    {
        $advancedSalary = DB::table('advanced_salaries')
            ->join('employees', 'advanced_salaries.emp_id', '=', 'employees.id')
            ->select('advanced_salaries.*', 'employees.*')
            ->orderBy('advanced_salaries.id','DESC')
            ->get();
        // $advancedSalary = SalaryModel::get();
        return view('all_advanced_salary',compact('advancedSalary'));
    }
}
