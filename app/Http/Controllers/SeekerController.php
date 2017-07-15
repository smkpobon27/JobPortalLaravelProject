<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Skill;
use App\User;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeekerController extends Controller
{
    public function personalInfo(Request $request){
    	$this->validate($request, [
    		'phone' => 'required|max:14',
    		]);
    	User::where('id', Auth::id())->update(['phone'=>$request->phone]);

    	$personalInfo = new Activity;
    	//If this user id doesn't exist then create one row with this 'user_id' in Activity table
    	if(Activity::where('user_id', Auth::id())->get()->isEmpty()){
	    	$personalInfo->location = $request->location;
	    	$personalInfo->user_id = Auth::id();
	    	$personalInfo->save();
    	}else{
    		//else if this 'user_id' exist already in this table then just update it.
    	 Activity::where('user_id', Auth::id())->update(['location'=>$request->location]);
    	}

    	return redirect()->route('seeker.edu');
    }

    public function education(Request $request){
    	Activity::where('user_id', Auth::id())->update(['college'=>$request->college, 'degree'=>$request->degree_level, 'field'=>$request->field, 'grade'=>$request->grade, 'country'=>$request->country, 'language'=>$request->language, 'interest'=>$request->interest]);

    	return redirect()->route('seeker.work');
    }
    //Shows Work and skill form 
    public function showWorkAndSkillForm(){
    	$works = Work::where('user_id', Auth::id())->get();
    	$skills = Skill::where('user_id', Auth::id())->get();

    	return view('jobseeker.seeker_register_stp4', compact('works','skills'));
    }
    //Posted Works data are stored here
    public function work(Request $request){
    	
    	$this->validate($request, [
    		'job_title'=>'required',
    		'company_name'=>'required'
    		]);
    	$newWork = new Work;
    	$newWork->job_title = $request->job_title;
    	$newWork->company_name = $request->company_name;
    	$newWork->country = $request->country;
    	$newWork->industry = $request->industry;
    	$newWork->job_role = $request->job_role;
    	$newWork->activity = $request->activity;
    	// $newWork->from = $request->from;
    	// $newWork->to = $request->to;
    	$newWork->user_id = Auth::id();
    	$newWork->save();

    	return $request->all();
    	
    }
    //Store Skills data
    public function skill(Request $request){
    	$newSkill = new Skill;
    	$newSkill->name = $request->name;
    	$newSkill->level = $request->level;
    	$newSkill->experience = $request->experience;
    	$newSkill->user_id = Auth::id();
    	$newSkill->save();

    	return $request->all();
    }
    //Shows the Find jobs page with available jobs
    public function showFindJobs(){
    	return view('jobseeker.seeker_find_jobs');
    }
    //show edit cv form
    public function showEditCv(){
    	$works = Work::where('user_id', Auth::id())->get();
    	$skills = Skill::where('user_id', Auth::id())->get();
    	$user = User::find(Auth::id());
    	return view('jobseeker.seeker_edit_cv', compact('works','skills','user'));
    }
    //store Edit_CV personal data
    public function storeEditCv(Request $request){
    	$user = User::where('id', Auth::id())->update(['name'=>$request->name,'phone'=>$request->phone]);
    	$activities = Activity::where('user_id', Auth::id())->update(['location'=>$request->location,'gender'=>$request->gender]);
    	
    	return $request->all();
    }

}//controller ends here
