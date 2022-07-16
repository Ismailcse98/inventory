<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Add_category()
    {
        return view('add_category');
    }
    public function Store_category(Request $r)
    {
        $result = Category::create($r->all());
        if ($result) {
            return redirect('all_category');
        }
    }
    public function All_category()
    {
        $category = Category::get();
        return view('all_category',compact('category'));
    }
}
