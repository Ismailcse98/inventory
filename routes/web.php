<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdvancedSalaryController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EmployeeController::class,'index'])->name('index');
Route::get('/login', [EmployeeController::class,'Login'])->name('login');
Route::get('/register', [EmployeeController::class,'Register'])->name('register');

//Employee information Start
Route::get('/add_employee', [EmployeeController::class,'Add_employee'])->name('add_employee');
Route::post('/store_employee', [EmployeeController::class,'Store_employee'])->name('store_employee');
Route::get('/all_employee', [EmployeeController::class,'All_employee'])->name('all_employee');
//Employee information End

//Customer information Start
Route::get('/add_customer', [CustomerController::class,'Add_customer'])->name('add_customer');
Route::post('/store_customer', [CustomerController::class,'Store_customer'])->name('store_customer');
Route::get('/all_customer', [CustomerController::class,'All_customer'])->name('all_customer');
//Customer information End

//Supplier information Start
Route::get('/add_supplier', [SupplierController::class,'Add_supplier'])->name('add_supplier');
Route::post('/storesupplierr', [SupplierController::class,'Store_supplier'])->name('store_supplier');
Route::get('/all_supplier', [SupplierController::class,'All_supplier'])->name('all_supplier');
//Supplier information End
//Advance Salary information Start
Route::get('/add_advanced_salary', [AdvancedSalaryController::class,'Add_advanced_salary'])->name('add_advanced_salary');
Route::post('/store_advanced_salary', [AdvancedSalaryController::class,'Store_advanced_salary'])->name('store_advanced_salary');
Route::get('/all_advanced_salary', [AdvancedSalaryController::class,'All_advanced_salary'])->name('all_advanced_salary');
//Advance Salary information End
//Pay Salary information Start
Route::get('/pay_salary', [SalaryController::class,'Pay_salary'])->name('pay_salary');
//Pay Salary information End

//Product information Start

Route::get('/add_category', [CategoryController::class,'Add_category'])->name('add_category');
Route::post('/store_category', [CategoryController::class,'Store_category'])->name('store_category');
Route::get('/all_category', [CategoryController::class,'All_category'])->name('all_category');
Route::get('/add_product', [ProductController::class,'Add_product'])->name('add_product');
Route::post('/store_product', [ProductController::class,'Store_product'])->name('store_product');
Route::get('/import_product', [ProductController::class,'Import_product'])->name('import_product');
Route::get('/all_product', [ProductController::class,'All_product'])->name('all_product');

//Product information End

//Expense information Start
Route::get('/add_expense', [ExpenseController::class,'Add_expense'])->name('add_expense');
Route::post('/store_expense', [ExpenseController::class,'Store_expense'])->name('store_expense');
Route::get('/yearly_expense', [ExpenseController::class,'Yearly_expense'])->name('yearly_expense');
Route::get('/month_expense', [ExpenseController::class,'Month_expense'])->name('month_expense');
Route::get('/todays_expense', [ExpenseController::class,'Todays_expense'])->name('todays_expense');
//Month expense
Route::get('/january_expnese', [ExpenseController::class,'January_Expnese'])->name('january_expnese');
Route::get('/february_expnese', [ExpenseController::class,'February_Expnese'])->name('february_expnese');
Route::get('/march_expnese', [ExpenseController::class,'March_Expnese'])->name('march_expnese');
Route::get('/april_expnese', [ExpenseController::class,'April_Expnese'])->name('april_expnese');
Route::get('/may_expnese', [ExpenseController::class,'May_Expnese'])->name('may_expnese');
Route::get('/june_expnese', [ExpenseController::class,'June_Expnese'])->name('june_expnese');
Route::get('/july_expnese', [ExpenseController::class,'July_Expnese'])->name('july_expnese');
Route::get('/august_expnese', [ExpenseController::class,'August_Expnese'])->name('august_expnese');
Route::get('/september_expnese', [ExpenseController::class,'September_Expnese'])->name('september_expnese');
Route::get('/october_expnese', [ExpenseController::class,'October_Expnese'])->name('october_expnese');
Route::get('/november_expnee', [ExpenseController::class,'November_Expnese'])->name('november_expnese');
Route::get('/december_expnese', [ExpenseController::class,'December_Expnese'])->name('december_expnese');
//Expenseinformation End

//Take Attendence
Route::get('/take_attendence', [AttendenceController::class,'Take_attendence'])->name('take_attendence');
Route::post('/store_attendence', [AttendenceController::class,'Store_attendence'])->name('store_attendence');
Route::get('/all_attendence', [AttendenceController::class,'All_attendence'])->name('all_attendence');
Route::get('/show_attendence/{date}', [AttendenceController::class,'Show_attendence'])->name('show_attendence');
Route::put('/update_attendence', [AttendenceController::class,'Update_attendence'])->name('update_attendence');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
