
<section class="brows-job-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>All Jobs</h2>
            </div>
        </div>
        <div class="row">
            @foreach($jobs as $job)
            <div class="col-md-12">
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><a href="job-detail.html"><img
                                            src="{{asset('assets/img/step-3.png')}}" class="img-responsive" alt=""/></a></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <p href="job-detail.html">
                                        <h3>{{$job->job_title}}</h3>
                                    </p>

                                    <p><span>{{$job->first_name}}</span><span class="brows-job-sallery"><i
                                                class="fa fa-money"></i>{{$job->salary}}</span><span
                                            class="job-type cl-success bg-trans-success">Full Time</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>{{$job->location}}</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link"><a href="{{url('/apply/'.$job->)}}" class="btn btn-default">Apply
                                        Job</a></div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
                @endforeach
        </div>
        <div class="row">
            <ul class="pagination">

                <li>{{$jobs->links()}}</li>

            </ul>
        </div>
    </div>
</section>

<section class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="main-heading">
                    <p>Expert Candidate</p>

                    <h2>Hire Premium <span>Employee</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($applicants as $app)
            <div class="col-md-4 col-sm-6">
                <div class="paid-candidate-container">
                    <div class="paid-candidate-box">
                        <div class="dropdown">
                            <div class="btn-group fl-right">
                                <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <div class="dropdown-menu pull-right animated flipInX"><a href="#">Shortlist</a><a
                                        href="#">Send Message</a><a href="#">Dislike</a></div>
                            </div>
                        </div>
                        <div class="paid-candidate-inner--box">
                            <div class="paid-candidate-box-thumb"><img src="{{$app->profile_image}}"
                                                                       class="img-responsive img-circle" alt=""/>
                            </div>
                            <div class="paid-candidate-box-detail">
                                <h4>{{$app->first_name}}</h4>
                                <span class="desination">{{$app->skills}}r</span>
                            </div>
                        </div>

                    </div>
                    <a class="btn btn-secondary" href="{{$app->resume}}">Download Resume</a>
                </div>
            </div>
            @endforeach



        </div>
        <div class="row">
            <ul class="pagination">

                <li>{{$applicants->links()}}</li>

            </ul>
        </div>
    </div>
</section>

<div class="clearfix"></div>


