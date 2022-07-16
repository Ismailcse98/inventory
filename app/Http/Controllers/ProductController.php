<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Add_product()
    {
        return view('add_product');
    }
    public function Store_product(Request $r)
    {
        $data = $r->all();
        $file = $r->file('image');
        if ($file) {
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $filePath = 'uploads/'.$fileName;
            $data['image']=$filePath;
            $file->move('uploads/',$fileName);
        }
        $result = Product::create($data);
        if ($result) {
            return redirect(route('all_product'));
        }
    }
    public function Import_product()
    {
        echo "Import";
    }
    public function All_product()
    {
        $productList = DB::table('products')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->join('suppliers', 'products.supplier_id', '=', 'suppliers.id')
            ->select('products.*', 'categories.cat_name','suppliers.name as supplier_name')
            ->get();
        return view('all_product',compact('productList'));
    }
}
