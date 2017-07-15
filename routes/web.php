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

//Job seeker normal routes
Route::get('/', function () {
    return view('jobseeker.index');
});
Route::get('personal-info', function(){
	return view('jobseeker.seeker_register_stp2');
})->name('reg_stp_2');
Route::post('personal-info', 'SeekerController@personalInfo');
Route::get('seeker/edu', function(){
	return view('jobseeker.seeker_register_stp3');
})->name('seeker.edu');
Route::post('seeker/edu', 'SeekerController@education');
Route::get('seeker/work', 'SeekerController@showWorkAndSkillForm')->name('seeker.work');
Route::post('seeker/work', 'SeekerController@work');
Route::post('seeker/skill', 'SeekerController@skill')->name('seeker.skill');
Route::get('seeker/find-jobs', 'SeekerController@showFindJobs')->name('seeker.find_jobs');
Route::get('seeker/edit-cv', 'SeekerController@showEditCv')->name('seeker.edit_cv');
Route::post('seeker/edit-cv', 'SeekerController@storeEditCv');
//----------------------------------

//Auth routes
//seeker routes
Route::get('seeker-register', 'Auth\RegisterController@showSeekerRegistrationForm')->name('seeker.register');
Route::post('seeker-register', 'Auth\RegisterController@seekerRegister');
//------------
Auth::routes();

Route::get('/home', 'HomeController@index');
