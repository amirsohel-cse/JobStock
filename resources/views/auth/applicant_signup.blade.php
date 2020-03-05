@extends('layouts.header')
@section('content')
    @include('layouts.navbar')

    <section class="inner-header-title gray-bg">
        <div class="container">
            <h2 class="cl-default">Create An Account</h2>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <!-- Accordion Design Start -->
    <section class="accordion">
        <div class="container">
            <div class="row">

                <!-- Billing Address -->
                <div class="col-md-6 col-sm-6">
                    <div class="sidebar-wrapper">

                        <div class="sidebar-box-header bb-1">
                            <h4>Create An Account</h4>
                        </div>

                        <form class="billing-form">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" />
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" />
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-12">
										<span class="custom-checkbox">
											<input type="checkbox" id="1">
											<label for="1"></label>
										</span> I give my consent to Job Stock to collect my data with GDPR regulation.</a>
                                </div>
                            </div>
                            <div class="row mrg-top-30">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">SignUp</button>
                                    <a href="{{url('/')}}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <!-- Payment Detail -->
                <div class="col-md-6 col-sm-6">
                    <div class="sidebar-wrapper">

                        <div class="sidebar-box-header bb-1">
                            <h4>LogIn Your Account</h4>
                        </div>

                        <form class="billing-form">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Username / Email</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" />
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 text-center mrg-top-25">
                                    <button type="submit" class="btn btn-success">LogIn</button>
                                    <a href="{{url('/')}}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </section>

    @include('layouts.footer')
    @include('layouts.modals')
    @include('layouts.scripts')
    @endsection
