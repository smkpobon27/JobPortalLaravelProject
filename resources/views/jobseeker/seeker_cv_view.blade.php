@extends('layout.seeker_main')
@section('title', 'Jobseeker CV')
@section('content')
<section class="top" style="margin-top: 100px;">
    <div class="container">
        <h3><strong>Public CV view</strong></h3>
        <div class="row">
            <div class="col-lg-2">
                <img src="{{asset('storage/images/'.$user->image)}}" alt="..." class="img-thumbnail" style="height: 180px; width: 500px;">
            </div>
            <div class="col-lg-10">
                <h3>{{$user->name}}</h3>
                <p><strong>Lives in </strong>{{$activity->location}}</p>
                <p><strong>Email: </strong>{{$user->email}}</p>
                <p><strong>Phone: </strong>{{$user->phone}}</p>
                <div>
                    <a href="{{route('seeker.edit_cv')}}" class="btn btn-warning" style="border-radius: 0;"><i class="fa fa-pencil-square-o"></i> EDIT MY CV</a>
                    {{-- <a href="" class="btn btn-default" style="border-radius: 0;"><i class="fa fa-download"></i> DOWNLOAD AS PDF</a> --}}
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- row ends here -->
        
        <div class="row">
            <div class="col-lg-12">
                <h4><Strong>About me</Strong></h4><hr>
                <p>{{$activity->about_me}}</p>
            </div>
            </div> <!-- row ends here---- -->
            
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Work experience</strong></h4><hr>
                    @foreach($works as $work)
                    <div class="row">
                        <table class="table">
                            <tr>
                                <div class="col-lg-3">
                                    <p><strong>Job title: </strong>{{$work->job_title}}</p>
                                    <p><strong>Company: </strong>{{$work->company_name}}</p>
                                </div>
                                <div class="col-lg-3">
                                    <p><strong>Industry: </strong>{{$work->industry}}</p>
                                    <p><strong>Job role: </strong>{{$work->job_role}}</p>
                                </div>
                                <p><strong>Activities: </strong>{{$work->activity}}</p>
                            </tr>
                        </table>
                    </div>
                    @endforeach
                </div>
                </div><!-- row ends here --- -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <h4><strong>Education</strong></h4><hr>
                        <h5><strong>{{$activity->college}}</strong></h5>
                        <p>{{$activity->degree}}</p>
                        <p>Field of study: <strong>{{$activity->field}}</strong></p>
                        <p>Grade: <strong>{{$activity->grade}}</strong></p>
                    </div>
                    </div> <!-- row ends here ---- -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <h4><strong>Languages</strong></h4><hr>
                            <p>{{$activity->language}}</p>
                        </div>
                        </div><!-- row ends here ---- -->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h4><strong>Top skills</strong></h4><hr>
                                
                                <table class="table">
                                    @foreach($skills as $skill)
                                    <tr><td><li>
                                        <p><strong>{{$skill->name}}</strong></p>
                                        <div class="col-lg-2">
                                            <p><strong>Level: </strong>{{$skill->level}}</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <p><strong>Experience: </strong>{{$skill->experience}}</p>
                                        </div></li>
                                    </td></tr>
                                    @endforeach
                                </table>
                            </div>
                            </div><!-- row ends here -->
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4><strong>Interests &amp; Activities</strong></h4><hr>
                                    <p>{{$activity->interest}}</p>
                                </div>
                                </div> <!-- row ends here -->
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4><strong>Attachments</strong></h4><hr>
                                        @foreach($attachments as $attachment)
                                        <a href="/seeker/download-cv/{{$attachment->id}}">{{$attachment->name}}</a> <br>
                                        @endforeach
                                        <h4><strong>Links</strong></h4><hr>
                                        @foreach($links as $link)
                                        <a href="http://{{$link->url}}" target="_blank">{{$link->name}}</a><br>
                                        @endforeach
                                        <br><br><br>
                                    </div>
                                </div>
                            </div>
                            <!--First container-fluid ends here -->
                        </section>
                        @endsection