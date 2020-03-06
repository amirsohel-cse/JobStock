<?php

namespace App\Http\Controllers;
use App\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Session;
class ApplicantController extends Controller
{

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
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $this->AuthCheck();
        $id = Session::get('applicant_id');
        $applicant = Applicant::findOrFail($id);
        return view('candidate_profile')->with('applicant',$applicant);
    }


    public function edit(Applicant $applicant)
    {
        //
    }


    public function update(Request $request)
    {
        $this->AuthCheck();
        $id = Session::get('applicant_id');
        $applicant = Applicant::findOrFail($id);

        $applicant->first_name = $request->first_name;
        $applicant->last_name = $request->last_name;
        $applicant->email = $request->email;
        $applicant->skills = $request->skills;


            $image = $request->file('profile_image');
            if($image){
                $image_name= Str::random(40);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'profile_image/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path,$image_full_name);
                if($success){
                    $applicant->profile_image= $image_url;
                }


        }


            $resume = $request->file('resume');
            if($resume){
                $image_name= Str::random(40);
                $ext = strtolower($resume->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'resume/';
                $image_url = $upload_path.$image_full_name;
                $success = $resume->move($upload_path,$image_full_name);
                if($success){
                    $applicant->resume = $image_url;




            }
        }
        $applicant->save();
        Session::flash('update','Profile Updated successfully !!' );
        return redirect('/candidate_profile');
    }

    public function destroy(Applicant $applicant)
    {
        //
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
