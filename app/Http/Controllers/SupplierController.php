<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierModel;

class SupplierController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Add_supplier()
    {
        return view('add_supplier');
    }
    public function Store_supplier(Request $r)
    {
      $data = $r->all();
      $file = $r->file('photo');
      if ($file) {
         $filename = date('Ymdhis').'.'.$file->getClientOriginalExtension();
         $data['photo'] = $filename;
         $file->move('uploads',$filename);
      }
      $result = SupplierModel::create($data);
      if ($result) {
         return redirect(route('all_supplier'));
      }
    }
    public function All_supplier()
    {
        $supplier = SupplierModel::get();
        return view('all_supplier',compact('supplier'));
    }
}
