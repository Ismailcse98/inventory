<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalaryModel;
use DB;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Pay_salary()
    {
         $month = date("F",strtotime('-1 month'));
         $paySalary = DB::table('advanced_salaries')
            ->join('employees', 'advanced_salaries.emp_id', '=', 'employees.id')
            ->select('advanced_salaries.*', 'employees.*')
            ->orderBy('advanced_salaries.id','DESC')
            ->where('month', '=', $month)
            ->get();
        return view('pay_salary',compact('paySalary'));
    }
}
