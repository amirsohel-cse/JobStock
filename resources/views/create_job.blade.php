@extends('layouts.header')
@section('content')
    @include('layouts.navbar')

    <div class="clearfix"></div>

    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Create Job</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Header Title End -->

    <!-- General Detail Start -->
    <div class="detail-desc section">

        <div class="container white-shadow">
            <div class="row">
                <div class="col-xs-12">
                    @if(Session::has('job'))
                        <p class="alert alert-info">{{ Session::get('job') }}</p>
                    @endif
                </div>
            </div>

            <form class="add-feild" action="{{url('/create')}}" method="post">
                {{csrf_field()}}
            <div class="row bottom-mrg">

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <input type="text" name="title" class="form-control" placeholder="Job Title">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" name="salary" placeholder="Salary">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <select class="form-control input-lg" name="country">
                                <option>Choose Country</option>
                                <option>Banagladesh</option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Canada</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <input type="text" name="location" class="form-control" placeholder="Location,e.g. Dhaka , Mirpur">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" name="description" placeholder="Job Description"></textarea>
                    </div>
                <button type="submit"  class="btn btn-primary center-block">Submit</button>


            </div>
            </form>


        </div>

    </div>
    <!-- General Detail End -->

    <!-- Basic Full Detail Form Start -->
    <
    <!-- Basic Full Detail Form End -->

    @include('layouts.footer')
    @include('layouts.modals')
    @include('layouts.scripts')
@endsection
