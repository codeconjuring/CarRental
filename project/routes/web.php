<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Admin Login Route
Route::get('/admin-login','AdminController@adminloginform');
// admin Login post
Route::post('/admin-login','AdminController@adminloginhome')->name('admin_login');
// show admin Dashbord
Route::get('/admin-dashboard','AdminHomeController@showadminhome');
// admin log out
Route::post('/admin-logout','AdminHomeController@adminlogout')->name('admin_logout');
// Add new car info
Route::post('/save-car-info','AddcarController@savecarinfo');
// show all car list
Route::get('/show-all-car','AddcarController@showallcars');
// Publication status car
Route::get('/car-publication','AddcarController@publicationstatus');
// car info Update
Route::post('/update-car-info','AddcarController@carinfoupdate');
// car delete info
Route::get('/delete-car','AddcarController@deletecarinfo');
// Show all rental shop
Route::get('/show-all-rental-shop','ManagerentalController@showallrantal')->name('show_all_rental_shop');
// Rent car add route
Route::post('/show-all-rental-shop','ManagerentalController@rentlocation')->name('rent-car-add');
// single rent location 
Route::get('/show-single-rent/{location}','ManagerentalController@showsingerent')->name('single-rent-location');
// single rent car edite
Route::get('/show-singel-rent-car','ManagerentalController@singlecarshow');
// Delete rent car 
Route::get('/delete-singel-rent-car','ManagerentalController@deleterentcar');
// Delete Full rent car 
Route::get('/delete-full-rent-car','ManagerentalController@deleterentcarfull');
// Add new Driver Route
Route::get('/add-new-driver','DriverController@showdriverform')->name('add_new_dirver');
