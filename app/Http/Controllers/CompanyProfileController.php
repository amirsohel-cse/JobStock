<?php

namespace App\Http\Controllers;

use App\Applicant;
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
        return view('manage_candidate');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyProfile  $companyProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyProfile $companyProfile)
    {
        //
    }
}
