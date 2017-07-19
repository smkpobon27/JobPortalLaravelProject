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
Route::get('/', 'SeekerController@index');
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
Route::get('seeker/edit-cv', 'SeekerController@showEditCv')->name('seeker.edit_cv');
Route::post('seeker/edit-cv', 'SeekerController@storeEditCv');
Route::post('seeker/image', 'SeekerController@profileImageUpload')->name('proimage_upload');
Route::post('seeker/about', 'SeekerController@aboutMe')->name('seeker.about');
Route::post('seeker/links', 'SeekerController@links')->name('seeker.link');
Route::post('seeker/attachment', 'SeekerController@attachments')->name('seeker.attachment');
Route::get('seeker/dashboard', 'SeekerController@showSeekerDashboard');
Route::get('seeker/cv-view', 'SeekerController@seekerCvView');
Route::get('seeker/find-jobs', 'SeekerController@showFindJobs')->name('seeker.find_jobs');
Route::get('seeker/job/view/{id}', 'SeekerController@viewJob');
Route::get('seeker/job/apply/{id}', 'SeekerController@showApplyJobForm');
Route::get('seeker/apply/successfull/{id}', 'SeekerController@appliedToJob');
//--------------------------------------------------------------------------------------------
//Employer normal routes
Route::get('/employer', 'EmployerController@index');
Route::get('/employer/company-profile', 'EmployerController@createCompanyProfile')->name('employer.company_profile');
Route::post('/employer/company', 'EmployerController@storeCompanyProfile')->name('employer.company');
Route::post('/employer/image', 'EmployerController@storeCompanyImage')->name('employer.company_image');
Route::get('/employer/post-job', 'EmployerController@showPostJobForm')->name('employer.post_job');
Route::post('/employer/post-job', 'EmployerController@storePostedJob');
Route::get('/employer/dashboard', 'EmployerController@showEmployerDashboard')->name('employer.dashboard');
Route::get('/employer/job/delete/{id}', 'EmployerController@deleteJob');
Route::get('/employer/job/edit/{id}', 'EmployerController@showEditJobForm');
Route::post('/employer/job/store/{id}', 'EmployerController@storeEditedJob');
Route::get('/employer/job/view/{id}', 'EmployerController@viewJob');
//----------------------------------------------------------------------------------------
//Auth routes
//seeker routes
Route::get('seeker-register', 'Auth\RegisterController@showSeekerRegistrationForm')->name('seeker.register');
Route::post('seeker-register', 'Auth\RegisterController@seekerRegister');

//Employer routes
Route::get('employer-register', 'Auth\RegisterController@showEmployerRegistrationForm')->name('employer.register');
Route::post('employer-register', 'Auth\RegisterController@employerRegister');
//-------------------------------------------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index');
