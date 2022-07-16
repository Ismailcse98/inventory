<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseModel;
use DB;

class ExpenseController extends Controller
{
    public function __construct()
   {
      $this->middleware('auth');
   }
   public function Add_expense()
   {
       return view('add_expense');
   }
   public function Store_expense(Request $r)
   {
       $result = ExpenseModel::create($r->all());
       if ($result){
           return redirect('todays_expense');
       }
   }
   public function Yearly_expense()
   {
       $year = date('Y');
       $sum =ExpenseModel::where('year',$year)->sum('amount');
       $yearexpense = ExpenseModel::where('year',$year)->get();
       return view('yearly_expense',compact('yearexpense','sum'));
   }
   public function Month_expense()
   {
       $month = date('F');
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function Todays_expense()
   {
       $date = date('d/m/y');
       
       // $data = DB::table("expenses")
       //  ->select(DB::raw("SUM(amount) as count"))
       //  ->get();
       //  echo $data;
       $sum =ExpenseModel::where('date',$date)->sum('amount');
       $daysexpense = ExpenseModel::where('date',$date)->get();
       return view('todays_expense',compact('daysexpense','sum'));
   }
   //Month expense
   public function January_Expnese()
   {
       $month = 'January';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
    public function February_Expnese()
   {
       $month = 'February';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function March_Expnese()
   {
       $month = 'March';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function April_Expnese()
   {
       $month = 'April';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function May_Expnese()
   {
       $month = 'May';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function June_Expnese()
   {
       $month = 'June';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function July_Expnese()
   {
       $month = 'July';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function August_Expnese()
   {
       $month = 'August';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function September_Expnese()
   {
       $month = 'September';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function October_Expnese()
   {
       $month = 'October';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
    public function November_Expnese()
   {
       $month = 'November';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
   public function December_Expnese()
   {
       $month = 'December';
       $sum =ExpenseModel::where('month',$month)->sum('amount');
       $monthexpense = ExpenseModel::where('month',$month)->get();
       return view('monthly_expense',compact('monthexpense','sum'));
   }
}
