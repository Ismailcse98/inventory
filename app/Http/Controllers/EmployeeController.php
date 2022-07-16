<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;

class EmployeeController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }
   public function index() {
        return view('index');
   }
   public function Add_employee()
   {
      return view('add_employee');
   }
   public function Store_employee(Request $r)
   {
      $data = $r->all();
      $file = $r->file('photo');
      if ($file) {
         $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
         $data['photo'] = $filename;
         $file->move('uploads',$filename);
      }
      $result = EmployeeModel::create($data);
      if ($result) {
         return redirect(route('all_employee'));
      }
   }
   public function All_employee()
   {
      $employee = EmployeeModel::get();
      return view('all_employee',compact('employee'));
   }
   public function Register()
   {
      return view('register');
   }
   public function Login()
   {
       return view('login');
   }
}
