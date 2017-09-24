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

Route::group(['middleware'=>['auth','seeker']], function(){
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
	Route::get('seeker/dashboard', 'SeekerController@showSeekerDashboard')->name('seeker.dashboard');
	Route::get('seeker/cv-view', 'SeekerController@seekerCvView');
	Route::get('seeker/job/apply/{id}', 'SeekerController@showApplyJobForm');
	Route::get('seeker/apply/successfull/{id}', 'SeekerController@appliedToJob');
	Route::get('seeker/job/delete/{id}', 'SeekerController@deleteJob');
	Route::get('seeker/settings', 'SeekerController@showUserSettings')->name('seeker.settings');
	Route::post('seeker/settings', 'SeekerController@storeUserSettings');
	Route::get('seeker/download-cv/{id}', 'SeekerController@downloadCV');
	
});

Route::get('seeker/find-jobs', 'SeekerController@showFindJobs')->name('seeker.find_jobs');
Route::get('seeker/job/view/{id}', 'SeekerController@viewJob');
Route::get('seeker/category-wise-jobs', 'SeekerController@showCategoryWiseJobs');
Route::get('seeker/location-wise-jobs', 'SeekerController@showLocationWiseJobs');
Route::get('seeker/keyword-wise-jobs', 'SeekerController@showJobsBySearchKeywords');

Route::get('/contact', 'SeekerController@contact');
//--------------------------------------------------------------------------------------------
//Employer normal routes
Route::get('/employer', 'EmployerController@index');

Route::group(['middleware'=>['auth', 'employer']], function(){
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
	Route::get('employer/application/{job_id}/delete/{id}', 'EmployerController@deleteApplication');
	Route::get('/employer/view/seeker-cv/{id}', 'EmployerController@employerCvView');
	Route::get('/employer/email/{id}', 'EmployerController@showEmailToSeekerForm');
	Route::post('/employer/email/send', 'EmployerController@sendEmail');
	Route::get('/employer/cv-list', 'EmployerController@allCvList')->name('employer_cv_view');
	Route::get('employer/download-cv/{id}', 'EmployerController@downloadCV');
	// Route::get('/htmltopview/{id}',array('as'=>'htmltopdfview','uses'=>'EmployerController@htmltopdfview'));

});
//========================================================================================
//Admin normal routes
Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']], function(){
	Route::get('/', 'AdminController@dashboard');
	Route::get('/dashboard', 'AdminController@dashboard');
	Route::get('/job/view/{id}', 'AdminController@viewJob');
	Route::get('/job/delete/{id}', 'AdminController@deleteJob');
	Route::get('/category-wise-jobs', 'AdminController@showCategoryWiseJobs');
	Route::get('/location-wise-jobs', 'AdminController@showLocationWiseJobs');
	Route::get('/keyword-wise-jobs', 'AdminController@showJobsBySearchKeywords');
	Route::get('/users', 'AdminController@showAllUsers')->name('admin.all_users');
	Route::get('/user-search', 'AdminController@searchByKeywords');
	// Route::get('/user/delete/{id}', 'AdminController@deleteUser');
	// Route::get('/admin/user/role/{id}', 'AdminController@changeRole');
	Route::get('/cv-list', 'AdminController@allCvList')->name('all_cv');
	Route::get('/user/view-cv/{id}', 'AdminController@viewCv');
	// Route::get('/user/delete-cv/{id}', 'AdminController@deleteCv');
	Route::get('/download-cv/{id}', 'AdminController@downloadCV');
});

//----------------------------------------------------------------------------------------
//Auth routes
//seeker routes
Route::get('seeker-register', 'Auth\RegisterController@showSeekerRegistrationForm')->name('seeker.register');
Route::post('seeker-register', 'Auth\RegisterController@seekerRegister');
Route::get('seeker-login', 'Auth\LoginController@showSeekerLoginForm')->name('seeker.login');
Route::post('seeker-login', 'Auth\LoginController@seekerLogin');

//Employer routes
Route::get('employer-register', 'Auth\RegisterController@showEmployerRegistrationForm')->name('employer.register');
Route::post('employer-register', 'Auth\RegisterController@employerRegister');
Route::get('employer-login', 'Auth\LoginController@showEmployerLoginForm')->name('employer.login');
Route::post('employer-login', 'Auth\LoginController@employerLogin');
//-------------------------------------------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index');
