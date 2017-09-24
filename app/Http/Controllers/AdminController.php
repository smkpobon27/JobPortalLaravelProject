<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Attachment;
use App\Job;
use App\Link;
use App\Skill;
use App\User;
use App\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	//view all posted jobs 
    public function dashboard(){
    	 $jobs = Job::where('posted', 1)->get();
        return view('admin.admin_dashboard', compact('jobs'));
    }
    //admin Job view page
    public function viewJob($id){
        $jobData = Job::find($id);
        return view('admin.admin_job_view', compact('jobData'));
    }
    //admin delete job
     public function deleteJob($id){
    	$job = Job::where('id', $id)->delete();
    	return view('admin.admin_dashboard');
    }
    //Show Category wise jobs
     public function showCategoryWiseJobs(Request $request){
        $jobs = Job::whereIn('industry', $request->category)->get();
         return view('admin.admin_dashboard', compact('jobs'));
     }
     //show Location wise jobs
     public function showLocationWiseJobs(Request $request){
        $jobs = Job::whereIn('city', $request->location)->get();
         return view('admin.admin_dashboard', compact('jobs'));
     }
     //show jobs by Search Keywords
     public function showJobsBySearchKeywords(Request $request){
        $jobs = Job::where('title', 'like', '%'.$request->searchQuery.'%')->get();
         return view('admin.admin_dashboard', compact('jobs'));
     }
     //show all users
     public function showAllUsers(){
     	$users = User::all();
     	return view('admin.admin_users_list', compact('users'));
     }
     //search user by Keywords
     public function searchByKeywords(Request $request){
     	$users = User::where('name', 'like', '%'.$request->searchQuery.'%')->get();
     	return view('admin.admin_users_list', compact('users'));
     }
     //delete user
     // public function deleteUser($id){
     	
     // 	$activity = Activity::where('user_id', $id)->first()->delete();
     //    $works = Work::where('user_id', $id)->delete();
     //    $skills = Skill::where('user_id', $id)->delete();
     //    $attachments = Attachment::where('user_id', $id)->delete();
     //    $links = Link::where('user_id', $id)->delete();
     //    Company::where('user_id', $id)->delete();
     //    Job::where('user_id', $id)->delete();
     //    User::find($id)->delete();
     // 	return redirect()->route('admin.all_users');
     // }
     public function allCvList(){
     	$users = User:: where('seeker', '1')->get();

     	return view('admin.admin_cv_list', compact('users'));
     }
     //CV view of seeker for Admin
    public function viewCv($id){
        $user = User::find($id);
        $activity = Activity::where('user_id', $id)->first();
        $works = Work::where('user_id', $id)->get();
        $skills = Skill::where('user_id', $id)->get();
        $attachments = Attachment::where('user_id', $id)->get();
        $links = Link::where('user_id', $id)->get();
        return view('admin.admin_cv_view', compact('user','activity','works','skills','attachments','links'));
    } 
       //CV deletion of seeker for Admin
    // public function deleteCv($id){
    //     $user = User::find($id)->delete();
    //     $activity = Activity::where('user_id', $id)->first()->delete();
    //     $works = Work::where('user_id', $id)->delete();
    //     $skills = Skill::where('user_id', $id)->delete();
    //     $attachments = Attachment::where('user_id', $id)->delete();
    //     $links = Link::where('user_id', $id)->delete();
    //     return redirect()->route('all_cv');
    // } 

    //download CV
      public function downloadCV($id){
        $file = Attachment::find($id);
        $pathToFile = 'storage/attachments/'.$file->document;
          return response()->download($pathToFile);
      }

}
