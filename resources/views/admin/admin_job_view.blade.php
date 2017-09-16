@extends('layout.admin_main')

@section('title', 'Job view')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <h3>{{$jobData->title}}</h3>
                <p><i class="fa fa-eye-slash"></i> {{$jobData->user->company->name}}</p>
                <p><strong>Application Deadline: </strong>{{$jobData->deadline}}</p>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <h4><strong>Job Details</strong></h4><hr>
                            <p><strong>Job Location: </strong> {{$jobData->city}}</p>
                            <p><strong>Country: </strong>{{$jobData->country}}</p>
                            <p><strong>Job Category: </strong>{{$jobData->industry}}</p>
                        </div><br>
                        <div>
                            <h4><strong>Preferred Candidates</strong></h4><hr>
                            <p><strong>Career Level: </strong>{{$jobData->career_level}}</p>
                            <p><strong>Degree: </strong>{{$jobData->degree}}</p>
                            <p><strong>Minimum years of experience: </strong>{{$jobData->experience}}</p>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h4><strong>Company Details</strong></h4><hr>
                            <p><strong>Company Industry: </strong>{{$jobData->industry}}</p>
                            <p><strong>Company website: </strong><a href="http://{{$jobData->user->company->website}}" target="_blank">{{$jobData->user->company->website}}</a></p>
                        </div><br><br>
                        <div>
                            <h4><strong>Professional Skills</strong></h4><hr>
                            <p>{{$jobData->skill}}</p>
                        </div><br>
                        <div>
                            <h4><strong>Languages</strong></h4><hr>
                            <p>{{$jobData->language}}</p>
                        </div><br>
                    </div>
                    </div><!-- inside row ends here -->
                    
                    <div>
                        <h4><strong>Job Description</strong></h4><hr>
                        <p>{{$jobData->description}}</p>
                    </div><br>
                    
                    <div>
                        <h4><strong>Position Requirements</strong></h4><hr>
                        <p>{{$jobData->requirement}}</p>
                    </div><br>
                    
                    <div>
                        <h4><strong>About Company</strong></h4><hr>
                        <p>{{$jobData->user->company->about}}</p>
                    </div><br>
                    
                    <div class="row">
                        
                        <div class="col-lg-10">
                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-10">
                                            <a href="/admin/dashboard" class="btn btn-primary">SEE MORE JOBS</a><br><br>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div><!-- row ends here -->
            
        </div><!-- First container ends here-->
    </section>
@endsection