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
            @foreach($applicants as $app)
            <div class="col-md-4 col-sm-4">
                <div class="manage-cndt">
                    <div class="cndt-caption">
                        <div class="cndt-pic">
                            <img src="{{$app->profile_image}}" class="img-responsive" alt="" />
                        </div>
                        <h4>{{$app->first_name}}</h4>
                        <span>{{$app->skills}}</span>
                        <p>{{$app->email}}</p>
                    </div>
                    <a class="btn btn-secondary center-block" href="{{$app->resume}}">Download Resume</a>
                </div>
            </div>
          @endforeach


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
