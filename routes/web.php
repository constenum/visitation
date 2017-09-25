<?php

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
    return view('welcome');
});

/**
 * Authentication routes
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
* Student resource
*/
# Index page to show all student
Route::name('student.index')->get('/student', 'StudentController@index');

# Show form to create a new Student
Route::name('student.create')->get('/student/create', 'StudentController@create');

# Process the form to create a new Student
Route::name('student.store')->post('/student', 'StudentController@store');

# Show an individual Student
Route::name('student.show')->get('/student/{title}', 'StudentController@show');

# Show form to edit a Student
Route::name('student.edit')->get('/student/{id}/edit', 'StudentController@edit');

# Process form to edit a Student
Route::name('student.update')->put('/student/{id}', 'StudentController@update');

# Get route to confirm deletion of Student
Route::name('student.destroy')->get('/student/{id}/delete', 'StudentController@delete');

# Delete route to actually destroy the Student
Route::name('student.destroy')->delete('/student/{id}', 'StudentController@destroy');

/**
* School resource
*/
# Index page to show all school
Route::name('school.index')->get('/school', 'SchoolController@index');

# Show form to create a new School
Route::name('school.create')->get('/school/create', 'SchoolController@create');

# Process the form to create a new School
Route::name('school.store')->post('/school', 'SchoolController@store');

# Show an individual School
Route::name('school.show')->get('/school/{title}', 'SchoolController@show');

# Show form to edit a School
Route::name('school.edit')->get('/school/{id}/edit', 'SchoolController@edit');

# Process form to edit a School
Route::name('school.update')->put('/school/{id}', 'SchoolController@update');

# Get route to confirm deletion of School
Route::name('school.destroy')->get('/school/{id}/delete', 'SchoolController@delete');

# Delete route to actually destroy the School
Route::name('school.destroy')->delete('/school/{id}', 'SchoolController@destroy');

/**
 * Visitation resource
 */
# Index page to show all visitation
Route::name('visitation.index')->get('/visitation', 'VisitationController@index');

# Show form to create a new Visitation
Route::name('visitation.create')->get('/visitation/create', 'VisitationController@create');

# Process the form to create a new Visitation
Route::name('visitation.store')->post('/visitation', 'VisitationController@store');

# Show an individual Visitation
Route::name('visitation.show')->get('/visitation/{title}', 'VisitationController@show');

# Show form to edit a Visitation
Route::name('visitation.edit')->get('/visitation/{id}/edit', 'VisitationController@edit');

# Process form to edit a Visitation
Route::name('visitation.update')->put('/visitation/{id}', 'VisitationController@update');

# Get route to confirm deletion of Visitation
Route::name('visitation.destroy')->get('/visitation/{id}/delete', 'VisitationController@delete');

# Delete route to actually destroy the Visitation
Route::name('visitation.destroy')->delete('/visitation/{id}', 'VisitationController@destroy');
