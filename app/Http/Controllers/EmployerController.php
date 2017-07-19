<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EmployerController extends Controller
{
	//Show the employer Home page
    public function index(){
    	return view('employer.index');
    }
    //show Company profile creation page
    public function createCompanyProfile(){
    	$company = Company::where('user_id', Auth::id())->first();
    	return view('employer.employer_register_stp_2', compact('company'));
    }
    //store Company profile data
    public function storeCompanyProfile(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		]);
    	$newCompany = new Company;
    	if(Company::where('user_id', Auth::id())->get()->isEmpty()){
    		$newCompany->name = $request->name;
    		$newCompany->country = $request->country;
    		$newCompany->city = $request->city;
    		$newCompany->industry = $request->industry;
    		$newCompany->website = $request->website;
    		$newCompany->about = $request->about;
    		$newCompany->user_id = Auth::id();
    		$newCompany->save();
    	}else{
    		Company::where('user_id', Auth::id())->update(['name'=>$request->name,'country'=>$request->country,'city'=>$request->city,'industry'=>$request->industry,'website'=>$request->website,'about'=>$request->about]);
    	}
    	
    	return $request->all();
    }
    //store employer company image
    public function storeCompanyImage(Request $request){
    	$company_image = $request->file('image');
    	if($request->hasFile('image')){
    		$image_original_name = $company_image->getClientOriginalName();
    		Storage::putFileAs('public/company_images/', $company_image, $image_original_name);
    	}
    	Company::where('user_id', Auth::id())->update(['image'=>$image_original_name]);

    	return redirect()->route('employer.company_profile');
    }
    //show Post Job Form
    public function showPostJobForm(){
    	return view('employer.employer_post_job');
    }
    //store Posted Job
    public function storePostedJob(Request $request){
    	$this->validate($request, [
    		'title'=>'required',
    		'description'=>'required',
    		'requirement'=>'required',
    		'deadline'=>'required',
    		'language'=>'required',
    		'skill'=>'required',
    		]);
    	$newJob = new Job;

    	$newJob->title = $request->title;
    	$newJob->description = $request->description;
    	$newJob->requirement = $request->requirement;
    	$newJob->industry = $request->industry;
    	$newJob->salary = $request->salary;
    	$newJob->city = $request->city;
    	$newJob->country = $request->country;
    	$newJob->deadline = $request->deadline;
    	$newJob->career_level = $request->career_level;
    	$newJob->degree = $request->degree;
    	$newJob->experience = $request->experience;
    	$newJob->language = $request->language;
    	$newJob->skill = $request->skill;
    	$newJob->posted = 1;
    	$newJob->user_id = Auth::id();
    	$newJob->save();

    	return redirect()->route('employer.dashboard');
    }
    //show the Employer Dashboard 
    public function showEmployerDashboard(){
    	$activeJobs = Job::where('user_id', Auth::id())->get();
    	$user = User::where('id', Auth::id())->where('employer','1')->first();
    	$company = Company::where('user_id', Auth::id())->first();
    	return view('employer.employer_dashboard', compact('activeJobs','user','company'));
    }
    //Delete a Job from dashboard
    public function deleteJob($id){
    	$job = Job::where('id', $id)->delete();
    	return redirect()->route('employer.dashboard');
    }
    //show Edit job form 
    public function showEditJobForm($id){
    	$jobData = Job::find($id);
    	return view('employer.employer_edit_job', compact('jobData'));
    }
    //store Edited job data
    public function storeEditedJob(Request $request, $id){
    	$this->validate($request, [
    		'title'=>'required',
    		'description'=>'required',
    		'requirement'=>'required',
    		'deadline'=>'required',
    		'language'=>'required',
    		'skill'=>'required',
    		]);

    	Job::where('id',$id)->update(['title'=>$request->title,'description'=>$request->description,'requirement'=>$request->requirement,'industry'=>$request->industry,'salary'=>$request->salary,'city'=>$request->city,'country'=>$request->country,'deadline'=>$request->deadline,'career_level'=>$request->career_level,'degree'=>$request->degree,'experience'=>$request->experience,'language'=>$request->language,'skill'=>$request->skill]);

    	return redirect()->route('employer.dashboard');
    }
    //View Job page for employer
    public function viewJob($id){
        $jobData = Job::find($id);
        $company = Company::where('user_id', Auth::id())->first();
        return view('employer.employer_job_view', compact('jobData','company'));
    }
}
