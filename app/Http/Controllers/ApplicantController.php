<?php

namespace App\Http\Controllers;

use App\Applicant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('auth.applicant_signup');
    }


    public function register(Request $request)
    {
        $exist = Applicant::where('email', $request->email)->first();
        if($exist){
            Session::flash('fail',"Sorry Mail already Exist");
            return redirect()->back();
        }
        $applicant = new Applicant();
        $applicant->first_name = $request->first_name;
        $applicant->last_name = $request->last_name;
        $applicant->email = $request->email;
        $applicant->password = $request->password;
        $applicant->save();

        Session::flash('success',"Registration Successfull");
        return redirect()->back();
    }
    public function login(Request $request)
    {
        $applicant = Applicant::where('email',$request->email)
            ->where('password',$request->password)->first();

        if ($applicant) {
            Auth::login($applicant, true);
            Session::put('applicant_id',$applicant->id);
            return redirect('/');
        }
        else
        {
            Session::flash('login_fail',"Sorry ! email and password is not matching");
           return redirect()->back();
        }

    }

    public function store(Request $request)
    {
        //
    }


    public function show(Applicant $applicant)
    {
        return view('candidate_profile');
    }


    public function edit(Applicant $applicant)
    {
        //
    }


    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    public function destroy(Applicant $applicant)
    {
        //
    }
}
