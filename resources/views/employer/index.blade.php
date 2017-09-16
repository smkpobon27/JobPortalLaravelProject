@extends('layout.employer_main')

@section('title', 'Home')

@section('content')

    <section id="emp_home_first_section" class="top">
        <div class="container-fluid">
            <h1 class="first_sec_h1">Build the Future of Bangladesh</h1>
            <div class="container home_search">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="row" style="text-align: center;">
                            <div class="col-lg-5 col-lg-offset-1">
                                <div class="form-group">
                                    <a class="btn btn-success form-control" style="border-radius: 0;" href="{{route('employer.post_job')}}">Post a Job Now</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <a class="btn btn-primary form-control" style="border-radius: 0;" href="{{route('employer_cv_view')}}">Search our CV Database</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- row ends here -->
            </div>
        </div>
        <!-- first container-fluid ends here -->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 emp_h1home" style="margin-left: -20px;">
                    <h1>Find</h1>
                    <a href="{{route('employer_cv_view')}}" style="color: white;">Search by Category</a>
                </div>
                <div class="col-lg-3 emp_h1home">
                    <h1>Your</h1>
                    <a href="{{route('employer_cv_view')}}" style="color: white;">Search by Industry</a>
                </div>
                <div class="col-lg-3 emp_h1home">
                    <h1>Best</h1>
                    <a href="{{route('employer_cv_view')}}" style="color: white;">Search by Company</a>
                </div>
                <div class="col-lg-3 emp_h1home">
                    <h1>Employee</h1>
                    <a href="{{route('employer_cv_view')}}" style="color: white;">Search by City</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 more_btn">
                    <h2>Find Exceptional People</h2>
                    <br>
                    <a href="{{route('employer.register')}}" class="btn btn-warning btn-lg">SIGN UP NOW</a>
                </div>
            </div>
        </div>
        <!-- first container ends here -->
    </section>
@endsection
