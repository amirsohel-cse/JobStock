<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\AppliedJob;
use App\JobDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use Session;
class HomeController extends Controller
{
    public function index(){
        $applicants = Applicant::paginate(6);
        $jobs =DB::table('job_details')
            ->Join('company_profiles', 'job_details.company_id', '=', 'company_profiles.id')
            ->select('job_details.*','company_profiles.first_name')
            ->paginate(2);

        return view('layouts.master')
            ->with('applicants',$applicants)
            ->with('jobs',$jobs);
    }

    public function apply($app){
        $this->AuthCheck();

        $exist = JobDetail::findOrFail($app);
$applied = AppliedJob::where('job_id',$app)->where('applicant_id',Session::get('applicant_id'))->first();
      if($applied)
      {
          Session::flash('apply',"Allready Applied to this post");
          return redirect()->back();
      }

        $job = new AppliedJob();

        $job->company_id= $exist->company_id;
        $job->applicant_id = Session::get('applicant_id');
        $job->job_id =$app;

        $job->save();
        Session::flash('apply',"Applied successfully");
        return redirect()->back();

    }
    public function AuthCheck()
    {
        if(Session::has('applicant_id')){
            return;
        }
        else{
            return Redirect::to('/applicant_login')->send();
        }

    }
}
