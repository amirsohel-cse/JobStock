<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
    <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i
                class="fa fa-bars"></i></button>
        <div class="navbar-header"><a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/logo-white.png')}}"
                                                                                    class="logo logo-display"
                                                                                    alt=""><img
                    src="{{asset('assets/img/logo-white.png')}}" class="logo logo-scrolled" alt=""></a></div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                @if(Session::has('applicant_id') or Session::has('company_id'))
                <li class="left-br"><a href="{{url('/logout')}}"
                                       class="signin">Sign out</a></li>
                @else
                    <li class="left-br"><a href="{{url('/applicant_login')}}"
                                           class="signin">Applicant Sign In</a></li>

                <li class="left-br"><a href="{{url('/company_login')}}"
                                       class="signin">Company Sign In</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
               @if(Session::has('applicant_id'))
                <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Applicant Dashboard</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Main Pages</h6>

                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="{{url('/candidate_profile')}}">Applicant Profile</a></li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </li>
                @endif
                   @if(Session::has('company_id'))
                <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company Dashboard</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Main Pages</h6>

                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="{{url('/create_job')}}">Create Job</a></li>
                                            <li><a href="{{url('/manage_candidate')}}">Manage Candidate</a></li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>

        </div>
    </div>
</nav>
