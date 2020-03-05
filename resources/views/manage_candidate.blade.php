@extends('layouts.header')
@section('content')
    @include('layouts.navbar')

<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
    <div class="container">
        <h1>Manage Candidate</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Member list start -->
<section class="member-card gray">
    <div class="container">

        <!-- search filter -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="search-filter">

                    <div class="col-md-4 col-sm-5">
                        <div class="filter-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search…">
                                <span class="input-group-btn">
												<button type="button" class="btn btn-default">Go</button>
											</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-7">
                        <div class="short-by pull-right">
                            Short By
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Short By Date</a></li>
                                    <li><a href="#">Short By Views</a></li>
                                    <li><a href="#">Short By Popular</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- search filter End -->

        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status pending">Pending</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-1.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Charles Hopman</h4>
                        <span>Web designer</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status available">Available</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-2.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Ethan Marion</h4>
                        <span>IOS designer</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status pending">Pending</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-3.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Zara Clow</h4>
                        <span>UI/UX designer</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status pending">Pending</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-4.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Henry Crooks</h4>
                        <span>PHP Developer</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status available">Available</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-5.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Joseph Macfarlan</h4>
                        <span>App Developer</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status pending">Pending</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-1.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Zane Joyner</h4>
                        <span>Html Expert</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status pending">Pending</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-2.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Anna Hoysted</h4>
                        <span>UI/UX Designer</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status available">Available</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-3.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Spencer Birdseye</h4>
                        <span>SEO Expert</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-status pending">Pending</div>
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="assets/img/client-1.jpg" class="img-responsive" alt="" />
                        </div>
                        <h4>Eden Macaulay</h4>
                        <span>Web designer</span>
                        <p>Our analysis team at Megriosft use end to end innovation proces</p>
                    </div>
                    <a href="#" title="" class="cndt-profile-btn">View Profile</a>
                </div>
            </div>
        </div>

        <div class="row">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>

    </div>
</section>
<!-- Member List End -->
@include('layouts.footer')
@include('layouts.modals')
@include('layouts.scripts')
@endsection
