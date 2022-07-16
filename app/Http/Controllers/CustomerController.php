<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Add_customer()
    {
        return view('add_customer');
    }
    public function Store_customer(Request $r)
    {
        $data = $r->all();
      $file = $r->file('photo');
      if ($file) {
         $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
         $data['photo'] = $filename;
         $file->move('uploads',$filename);
      }
      $result = CustomerModel::create($data);
      if ($result) {
         return redirect(route('all_customer'));
      }
    }
    public function All_customer()
    {
        $customer = CustomerModel::get();
        return view('all_customer',compact('customer'));
    }
}
