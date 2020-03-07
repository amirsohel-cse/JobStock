<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\AppliedJob;
use App\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CompanyProfileController extends Controller
{

    public function index()
    {
        return view('auth.company_signup');
    }

    public function register(Request $request)
    {
        $exist = CompanyProfile::where('email', $request->email)->first();
        if($exist){
            Session::flash('fail',"Sorry Mail already Exist");
            return redirect()->back();
        }
        $company = new CompanyProfile();
        $company->first_name = $request->first_name;
        $company->last_name = $request->last_name;
        $company->email = $request->email;
        $company->password = $request->password;
        $company->save();

        Session::flash('success',"Registration Successfull");
        return redirect()->back();
    }
    public function login(Request $request)
    {
        $company = CompanyProfile::where('email',$request->email)
            ->where('password',$request->password)->first();

        if ($company) {
            Auth::login($company, true);
            Session::put('company_id',$company->id);
            return redirect('/');
        }
        else
        {
            Session::flash('login_fail',"Sorry ! email and password is not matching");
            return redirect()->back();
        }

    }

    public function manage_candidate(){
       // $applicant = Applicant::findOrFail()
        $applicants = AppliedJob::where('company_id',Session::get('company_id'))
            ->join('applicants','applicants.id','=','applied_jobs.applicant_id')->get();

        return view('manage_candidate')->with('applicants',$applicants);
    }

}
