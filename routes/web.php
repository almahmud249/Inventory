<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// Route::get('/inbox', function(){

// echo 'inbox';

// })->name('inbox');



// Route::get('profile', function () {
//     // Only verified users may enter...
// })->middleware('verified');
Auth::routes();



//employee route is here
Route::get('/add-employee', 'EmployeeController@employee')->name('add.employee');
Route::post('/insert_employee', 'EmployeeController@store');

Route::get('/all-employee', 'EmployeeController@allEmployees')->name('all.employee');


//operation route
Route::get('/delete-employee/{id}', 'EmployeeController@DeleteEmployees');
Route::get('/edit-employee/{id}', 'EmployeeController@EditEmployees');
Route::get('/edit_employee', 'EmployeeController@view')->name('edit.employee');
Route::post('/update-employee/{id}', 'EmployeeController@UpdateEmployees');

//customers route
route::get('/view-customer','CustomersController@viewcustomer')->name('view.customer');
route::post('/insert-customer','CustomersController@InsertCustomers');
route::get('/single-customer ','CustomersController@singlecustomer')->name('single.customer');
route::get('/all-customer ','CustomersController@fetchcustomers')->name('all.customer');

//suppliers route

route::get('/view-suppliers','SuppliersController@suppliers')->name('view.suppliers');
route::post('/insert-suppliers','SuppliersController@InsertSuppliers');
route::get('/all-suppliers ','SuppliersController@allSuppliers')->name('all.suppliers');
route::get('/single-supplier/{id} ','SuppliersController@viewsuplier')->name('single.suplier');


//Salary 
route::get('/view-salary','SalaryController@viewsalary')->name('view.salary');
route::post('/insert-salaries','SalaryController@InsertSalaries');
route::get('/all-salary','SalaryController@allsalary')->name('all.salary');
route::get('/fetch-salary','SalaryController@fetchsalary')->name('fetch.salary');


//product route


route::get('/view-product','ProductController@viewproduct')->name('view.product');
route::post('/insert-product','ProductController@InsertProduct');
route::get('/all-product','ProductController@allProduct')->name('all.product');
route::get('/fetch-product','ProductController@fetchproduct')->name('fetch.product');

route::get('/each-product/{id}','ProductController@eachproduct')->name('each.product');
Route::get('/delete-product/{id}', 'ProductController@DeleteProduct');
Route::get('/edit-product/{id}', 'ProductController@editproduct')->name('edit.product');
Route::post('/update-product/{id}', 'ProductController@Updateproduct');


//expense route
route::get('/add-expense','ExpenseController@viewexpense')->name('all.expense');
route::post('/insert-expense','ExpenseController@Insertexpense');
route::get('/today-expense','ExpenseController@todayexpense')->name('today.expense');
route::get('/monthly-expense','ExpenseController@monthlyexpense')->name('monthly.expense');

route::get('/january-expense','ExpenseController@januaryexpense')->name('january.expense');
route::get('/february-expense','ExpenseController@februaryexpense')->name('february.expense');

