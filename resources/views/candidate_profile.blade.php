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
                <div class="detail-pic"><img src="assets/img/can-1.png" class="img" alt="" /><a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a></div>
                <div class="detail-status"><span>Active Now</span></div>
            </div>

            <div class="row bottom-mrg">
                <div class="col-md-12 col-sm-12">
                    <div class="advance-detail detail-desc-caption">
                        <h4>Daniel Declizer</h4><span class="designation">Web Designer</span>
                        <ul>
                            <li><strong class="j-view">85</strong>New Post</li>
                            <li><strong class="j-applied">110</strong>Job Applied</li>
                            <li><strong class="j-shared">120</strong>Invitation</li>
                        </ul>
                    </div>
                </div>
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
                    <div class="col-md-7 col-sm-7">
                        <div class="detail-pannel-footer-btn pull-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="footer-btn grn-btn" title="">Edit Now</a><a href="#" class="footer-btn blu-btn" title="">Save Draft</a></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

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
                                        <div class="col-md-4 col-sm-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="Matthew">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" placeholder="Else">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Dana">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="dana.mathew@gmail.com">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" placeholder="+91 258 475 6859">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Zip / Postal</label>
                                            <input type="text" class="form-control" placeholder="258 457 528">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="204 Lowes Alley">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Address 2</label>
                                            <input type="text" class="form-control" placeholder="Software Developer">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Organization</label>
                                            <input type="text" class="form-control" placeholder="Software Developer">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="Chandigarh">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>State</label>
                                            <input type="text" class="form-control" placeholder="Punjab">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Country</label>
                                            <input type="text" class="form-control" placeholder="India">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control" placeholder="*********">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>New Password</label>
                                            <input type="password" class="form-control" placeholder="*********">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control" placeholder="*********">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>About you</label>
                                            <textarea class="form-control" placeholder="Write Something"></textarea>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Upload Profile Pic</label>
                                            <form action="http://codeminifier.com/upload-target" class="dropzone dz-clickable profile-pic">
                                                <div class="dz-default dz-message">
                                                    <i class="fa fa-cloud-upload"></i>
                                                    <span>Drop files here to upload</span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Upload Profile Cover</label>
                                            <form action="http://codeminifier.com/upload-target" class="dropzone dz-clickable profile-cover">
                                                <div class="dz-default dz-message">
                                                    <i class="fa fa-cloud-upload"></i>
                                                    <span>Drop files here to upload</span>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="button" class="update-btn">Update Now</button>
                                        </div>
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
