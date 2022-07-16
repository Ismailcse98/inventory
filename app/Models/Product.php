<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name','cat_id','supplier_id','product_code','storehouse','route','image','buy_date','expire_date','buying_price','selling_price'];

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }
}
