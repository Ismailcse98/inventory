<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $fillable = ['name','email','phone','address','type','photo','shopname','account_number','bankname','branchname','city'];
}
