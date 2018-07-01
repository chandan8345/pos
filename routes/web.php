<?php
//Login and Register
//Login
Route::get('/login','loginController@index');
Route::post('/Varified','loginController@login');
Route::get('/Logout','loginController@logout');

//DashBord
Route::get('/','companyController@getCompany');

//Product
Route::get('/Product','productController@index');
Route::post('/addProduct','productController@create');

//stock
Route::get('/Stock','stockController@index');
Route::post('/StockSearch','stockController@search');
Route::post('/ProductUpdate/{id}','stockController@update');
Route::get('/ProductDelete/{id}','stockController@delete');

//Category
Route::get('/Category','categoryController@index');
Route::post('/CreateCategory','categoryController@createCategory');
Route::post('/CreateBrand','categoryController@createBrand');
Route::get('/CategoryDelete/{id}','categoryController@Delete');
Route::get('/BrandDelete/{id}','categoryController@brandDelete');
Route::post('/CategoryUpdate/{id}','categoryController@categoryUpdate');
Route::post('/BrandUpdate/{id}','categoryController@brandUpdate');

//purchase
Route::get('/Purchase','purchaseController@index');
Route::get('/managePurchase','managePurchaseController@index');
Route::get('/search','purchaseController@search');
Route::post('/Memo','purchaseController@memo');
Route::post('/Invoice','purchaseController@invoice');
//sales
Route::get('/Sales','salesController@index');
Route::get('/manageSales','manageSalesController@index');

//Supplier
Route::get('/Supplier','supplierController@index');

//Customer
Route::get('/Customer','customerController@index'); 

//Transaction
Route::get('/manageTransaction','manageTransactionController@index');

//Users
Route::get('/Users','usersController@index');

//Profile
Route::get('/Profile','profileController@index');

//Expense
Route::get('/Expense','expenseController@index');
Route::get('/ExpenseHead','expenseHeadController@index');
Route::get('/ManageExpense','manageExpenseController@index');