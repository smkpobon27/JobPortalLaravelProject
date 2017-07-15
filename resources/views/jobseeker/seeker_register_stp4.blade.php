@extends('layout.seeker_main')

@section('title', 'Work experience')
{{-- @section('h')
    <meta name="csrf-token" content="{!!csrf_token()!!}">
@endsection --}}

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h4><strong>Your Work Experience</strong></h4>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Company/Position
                        </div>
                        <div class="panel-body" id="works">
                            <ul class="list-group">
                            @foreach($works as $work)
                                <li class="list-group-item"><strong>Title:</strong> {{$work->job_title}}
                                <ul>
                                    <li><strong>Company name:</strong> {{$work->company_name}}</li>
                                    <li><strong>Position:</strong> {{$work->job_role}}</li>
                                    {{-- <li><strong>From:</strong> </li>
                                    <li><strong>To:</strong> </li> --}}
                                    <li><strong>Activities:</strong> {{$work->activity}}</li>
                                </ul>
                                </li>
                            @endforeach
                            </ul>

                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalCompany">+ ADD COMPANY/POSITION</button>

                           {{--  <div class="checkbox">
                                <label style="color: darkblue;">
                                    <input type="checkbox"> No Prior Experience
                                </label>
                            </div> --}}
                        </div>

                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Skills
                        </div>
                        <div class="panel-body" id="skill">
                            <ul class="list-group">
                            @foreach($skills as $skill)
                                <li class="list-group-item">
                                    <strong>Skill: </strong>{{$skill->name}}<br>
                                    <strong>Level: </strong>{{$skill->level}}<br>
                                    <strong>Experience: </strong>{{$skill->experience}}
                                </li>
                            @endforeach
                            </ul>

                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalSkills">+ ADD SKILLS</button>

                        </div>
                    </div>
                    
                    <a href="{{route('seeker.find_jobs')}}" class="btn btn-warning form-control" style="border-radius: 0;">PROCEED AND FIND JOBS</a><br><br><br>

                </div>
            </div>

        </div>

        <!-- Modal for ADD COMPANY/POSITION -->

        <div class="modal fade" id="myModalCompany" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Company/Position</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="job_title" class="col-sm-2 control-label">Job Title:*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Job Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-sm-2 control-label">Company Name: *</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company name">
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Dates:</label>
                                <div class="col-sm-10">
                                   <label id="from">From:</label>
                                    <input type="date" name="from" id="from" placeholder="DD/MM/YYYY"> 
                                    <label id="to">To:</label>
                                    <input type="date" name="to" id="to" placeholder="DD/MM/YYYY">
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="country" class="col-sm-2 control-label">Country:</label>
                                <div class="col-sm-10">
                                    <select name="country" class="form-control" id="country">
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Netherland">Netherland</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="industry" class="col-sm-2 control-label">Industry:</label>
                                <div class="col-sm-10">
                                    <select name="industry" class="form-control" id="industry">
                                        <option value="Accounting">Accounting</option>
                                        <option value="IT/Software">IT/Software</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Garments">Garments</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="job_role" class="col-sm-2 control-label">Job Role:</label>
                                <div class="col-sm-10">
                                    <select name="job_role" class="form-control" id="job_role">
                                        <option value="Accountant">Accountant</option>
                                        <option value="CEO">CEO</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Field worker">Field worker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="activity" class="col-sm-2 control-label">Activities:</label>
                                <div class="col-sm-10">
                                    <textarea name="activity" id="activity" cols="30" rows="4" class="form-control" placeholder="Your Activities"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="save" class="btn btn-primary" data-dismiss="modal">SAVE</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for ADD SKILLS -->

        <div class="modal fade" id="myModalSkills" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Skills</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Skill:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Skill name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="level" class="col-sm-2 control-label">Level:</label>
                                <div class="col-sm-10">
                                    <select name="level" class="form-control" id="level">
                                        <option value="Begineer">Begineer</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Experienced">Experienced</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="experience" class="col-sm-2 control-label">Years of experience:</label>
                                <div class="col-sm-10">
                                    <select name="experience" class="form-control" id="experience">
                                        <option value="0 - 2 years">0 - 2 years</option>
                                        <option value="3 - 5 years">3 - 5 years</option>
                                        <option value="6 - 10 years">6 - 10 years</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="skill-btn" class="btn btn-primary" data-dismiss="modal">Save Skill</button>
                    </div>
                </div>
            </div>
        </div>

       {{csrf_field()}}
    </section>
@endsection

@section('script')
    
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // console.log($('#activity').val());
            //This function is for SAVING work experience data 
            $('#save').click(function(event) {
                var job_title= $('#job_title').val();
                var company_name= $('#company_name').val();
                var country= $('#country').val();
                var industry= $('#industry').val();
                var job_role= $('#job_role').val();
                var activity= $('#activity').val();
                // var vfrom= $('#from').val();
                // var vto= $('#to').val();
                // console.log(vto);
                $.post('{{route('seeker.work')}}', {'_token':$('input[name=_token]').val(), 'job_title':job_title,'company_name':company_name,'country':country,'industry':industry,'job_role':job_role,'activity':activity }, function(data) {
                    $('#works').load(location.href + ' #works');
                    console.log(data);
                });
                //'_token':$('meta[name="csrf-token"]').attr('content'), <-this is for the meta tag csrf_token() which is same as normal csrf_field() useness.
            });

            //This is for SAVING Skills data
            $('#skill-btn').click(function(event) {
                var skillName = $('#name').val();
                var level = $('#level').val();
                var experience = $('#experience').val();
                $.post('{{route('seeker.skill')}}', {'name':skillName,'level':level,'experience':experience,'_token':$('input[name=_token]').val()}, function(data) {
                    $('#skill').load(location.href + ' #skill');
                    console.log(data);
                });
            });
        });
    </script>
@endsection