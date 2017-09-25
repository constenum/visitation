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

/*
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
Route::name('update')->put('/student/{id}', 'StudentController@update');

# Get route to confirm deletion of Student
Route::name('student.destroy')->get('/student/{id}/delete', 'StudentController@delete');

# Delete route to actually destroy the Student
Route::name('student.destroy')->delete('/student/{id}', 'StudentController@destroy');