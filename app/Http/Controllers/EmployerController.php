<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Attachment;
use App\Company;
use App\Job;
use App\Link;
use App\Mail\MailToSeeker;
use App\Skill;
use App\User;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PDF;

class EmployerController extends Controller
{
	//Show the employer Home page
    public function index(){
    	return view('employer.index');
    }
    //show Company profile creation page
    public function createCompanyProfile(){
        if(!Company::where('user_id', Auth::id())->get()->isEmpty()){
        	$company = Company::where('user_id', Auth::id())->first();
        	return view('employer.employer_company_profile', compact('company'));
        }
        return view('employer.employer_register_stp_2');
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
    //Delete a seeker's job Application from employer job view page
    public function deleteApplication($job_id, $id){
        $job = Job::find($job_id);
        $job->many_user()->detach($id);
         return redirect()->route('employer.dashboard');
     }
     //CV view of seeker for Employer
    public function employerCvView($id){
        $user = User::find($id);
        $activity = Activity::where('user_id', $id)->first();
        $works = Work::where('user_id', $id)->get();
        $skills = Skill::where('user_id', $id)->get();
        $attachments = Attachment::where('user_id', $id)->get();
        $links = Link::where('user_id', $id)->get();
        return view('employer.employer_cv_view', compact('user','activity','works','skills','attachments','links'));
    } 
    //show the Email to seeker form 
    public function showEmailToSeekerForm($id){
        $seeker = User::find($id);
        $user = User::find(Auth::id());
        return view('employer.employer_email', compact('seeker', 'user'));
    }
    //Send the email
    public function sendEmail(){
        Mail::send(new MailToSeeker());

        return redirect()->route('employer.dashboard')->with('msg',"Email Sent Successfully");
    }
    //show all cv
    public function allCvList(){
        $users = User:: where('seeker', '1')->get();

        return view('employer.employer_cv_search', compact('users'));
     }
     //download CV
      public function downloadCV($id){
        $file = Attachment::find($id);
        $pathToFile = 'storage/attachments/'.$file->document;
          return response()->download($pathToFile);
      }
      
      //Html to PDF file download

      //[[ http://www.expertphp.in/article/generate-pdf-from-html-in-php-laravel-using-dompdf-library ]]

      // public function htmltopdfview(Request $request){
      //   $user = User::find($request->id);
      //   $activity = Activity::where('user_id', $request->id)->first();
      //   $works = Work::where('user_id', $request->id)->get();
      //   $skills = Skill::where('user_id', $request->id)->get();
      //   $attachments = Attachment::where('user_id', $request->id)->get();
      //   $links = Link::where('user_id', $request->id)->get();

      //   // view()->share('user',$user,'activity',$activity,'works',$works,'skills',$skills,'attachments',$attachments,'links',$links);


        
      //   $pdf = PDF::loadView('employer.employer_cv_view',compact('user','activity','works','skills','attachments','links'));
      //   return $pdf->download('employer_cv_view');
        
      //   // return view('employer.employer_cv_view',compact('user','activity','works','skills','attachments','links'));
      // }
       //contact me page
     public function contact(){
         return view('contact');
     }
}
