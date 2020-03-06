<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\JobDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        $applicants = Applicant::paginate(6);
        $jobs =DB::table('job_details')
            ->join('company_profiles', 'company_profiles.id', '=', 'job_details.company_id')
            ->paginate(2);
        return view('layouts.master')
            ->with('applicants',$applicants)
            ->with('jobs',$jobs);
    }
}
