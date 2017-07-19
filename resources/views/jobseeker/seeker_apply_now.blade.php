@extends('layout.seeker_main')
@section('title', 'Apply now')
@section('content')
<section class="top" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="row">
                    <div class="col-lg-3 col-lg-offset-2">
                        <h4>Apply for this Job</h4>
                        <p><strong>Job Title: </strong>{{$job->title}}</p>
                        <p><strong>Company Name: </strong>{{$job->user->company->name}}</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2">
                        <h4>Your contact information</h4>
                        <p><strong>Email: </strong>{{$user->email}}</p>
                        <p><strong>Phone: </strong>{{$user->phone}}</p>
                    </div>
                </div>
                <div class="form-group top">
                    <div class="col-sm-offset-5 col-sm-12">
                        <a href="/seeker/apply/successfull/{{$job->id}}" class="btn btn-lg btn-warning">SEND</a><br><br><br>
                    </div>
                </div>
            </div>
            </div><!-- row ends here -->
            
            </div><!-- First container ends here -->
        </section>
        @endsection