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
                <div class="detail-pic js">
                    <div class="box">
                        <input type="file" name="upload-pic[]" id="upload-pic" class="inputfile" />
                        <label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
                    </div>
                </div>
            </div>

            <div class="row bottom-mrg">
                <form class="add-feild">
                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Job Title">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Salary">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                            <select class="form-control input-lg">
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
                            <input type="text" class="form-control" placeholder="Location,e.g. London Quel Mark">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" placeholder="Job Description"></textarea>
                    </div>

                </form>
            </div>

            <div class="row no-padd">
                <div class="detail pannel-footer">
                    <div class="col-md-12 col-sm-12">
                        <div class="detail-pannel-footer-btn pull-right">
                            <a href="#" class="footer-btn choose-cover">Submit</a>
                        </div>
                    </div>
                </div>
            </div>

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
