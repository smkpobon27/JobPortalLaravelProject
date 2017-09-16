@extends('layout.employer_main')
@section('title', 'Job view')
@section('content')
<section class="top" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>{{$jobData->title}}</h3>
                <p><i class="fa fa-eye-slash"></i> {{$company->name}}</p>
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
                            <p><strong>Company website: </strong><a href="http://{{$company->website}}" target="_blank">{{$company->website}}</a></p>
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
                        <p>{{$company->about}}</p>
                    </div><br>
            </div>
        </div><!-- row ends here -->
        <div class="row">
            <div class="col-lg-12">
                <div id="job_applications">
                        <br>
                        <h2 style="color: blue;">Applications for this Job:</h2>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Applicant Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Location</th>
                                    <th>Applied Date</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($jobData->many_user as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->activity->location}}</td>
                                    <td>{{$user->pivot->created_at->format('d-M-Y')}}</td>
                                    <td><a href="/employer/application/{{$jobData->id}}/delete/{{$user->id}}" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-trash"></i> DELETE</a></td>
                                    <td><a href="/employer/view/seeker-cv/{{$user->id}}" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-eye"></i> VIEW CV</a></td>
                                     <td><a href="/employer/email/{{$user->id}}" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-envelope"></i> EMAIL</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div><!-- row ends here -->

    </div><!-- First container ends here-->
</section>
@endsection