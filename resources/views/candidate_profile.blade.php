@extends('layouts.header')
@section('content')
    @include('layouts.navbar')

    <section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
        <div class="container">
            <h1>Candidate Profile</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <!-- Candidate Profile Start -->
    <section class="detail-desc advance-detail-pr gray-bg">
        <div class="container white-shadow">

            <div class="row">
                <div class="detail-pic"><img src="{{$applicant->profile_image}}" class="img" alt="" /><a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a></div>
                <div class="detail-status"><span>Active Now</span></div>
            </div>







            <div class="row no-padd">
                <div class="detail pannel-footer">
                    <div class="col-md-5 col-sm-5">
                        <ul class="detail-footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <a class="btn btn-secondary" href="{{$applicant->resume}}">Download Resume</a>
                </div>
            </div>

        </div>
    </section>
    <div class="row">
        <div class="col-xs-12">
            @if(Session::has('update'))
                <p class="alert alert-info">{{ Session::get('update') }}</p>
            @endif
        </div>
    </div>
    <section class="full-detail-description full-detail gray-bg">
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <div class="full-card">
                    <div class="deatil-tab-employ tool-tab">
                        <ul class="nav simple nav-tabs" id="simple-design-tab">

                            <li><a href="#settings">Profile</a></li>
                        </ul>

                        <!-- Start All Sec -->
                        <div class="tab-content">
                            <!-- Start Settings -->
                            <div id="settings" class="tab-pane fade">

                                <div class="row no-mrg">
                                    <h3>Edit Profile</h3>
                                    <div class="edit-pro">
                                        <form action="{{url('/update_applicant')}}" method="post" enctype="multipart/form-data">
                                          {{csrf_field()}}

                                        <div class="col-md-4 col-sm-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{$applicant->first_name}}" >
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{$applicant->last_name}}">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="{{$applicant->email}}">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Skills</label>
                                            <textarea class="form-control" name="skills" value="{{$applicant->skills}}">{{$applicant->skills}}</textarea>
                                        </div>
                                            <div class="col-md-4 col-sm-6">
                                                <label>Upload Profile Pic</label>

                                                    <div class="dz-default dz-message">
                                                        <i class="fa fa-cloud-upload"></i> <input type="file" name="profile_image">

                                                    </div>

                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <label>Upload Resume</label>

                                                    <div class="dz-default dz-message">
                                                        <i class="fa fa-cloud-upload"></i><input type="file" name="resume">

                                                    </div>

                                            </div>

                                        <div class="col-sm-12">
                                            <button type="submit" class="update-btn">Update Now</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Settings -->
                        </div>
                        <!-- Start All Sec -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Candidate Profile End -->

    @include('layouts.footer')
    @include('layouts.modals')
    @include('layouts.scripts')
@endsection
