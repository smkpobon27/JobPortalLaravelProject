@extends('layout.seeker_main')

@section('title', 'Edit CV')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <h3><strong>Edit Your CV</strong></h3>
            <div class="row">
            <div class="col-lg-2">
            <img src="{{asset('storage/images/'.$user->image)}}" alt="Profile image" class="img-thumbnail img-responsive" style="height: 180px; width: 500px;">
            <br>
            <form action="{{route('proimage_upload')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                    <input type="file" name="proimage" id="proimage">
                    <br>
                    <input class="btn btn-primary" type="submit" value="UPLOAD" id="upload_image"/>
            </form>
            </div>
                <div class="col-lg-10">
                                <!-- -First section -->
                    <div class="form-horizontal" id="sec_1">
                        
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name: </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" placeholder="Your name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location" class="col-sm-2 control-label">Lives in: </label>
                            <div class="col-sm-10">
                                <select name="location" class="form-control" id="location">
                                @foreach($activities as $activity)
                                    <option value="Dhaka" @if($activity->location == "Dhaka"){{'selected="selected"'}}@endif>Dhaka</option>
                                    <option value="Rajshahi"@if($activity->location == "Rajshahi"){{'selected="selected"'}}@endif>Rajshahi</option>
                                    <option value="Chittagong"@if($activity->location == "Chittagong"){{'selected="selected"'}}@endif>Chittagong</option>
                                    <option value="Sylhet"@if($activity->location == "Sylhet"){{'selected="selected"'}}@endif>Sylhet</option>
                                    <option value="Barisal"@if($activity->location == "Barisal"){{'selected="selected"'}}@endif>Barisal</option>
                                    <option value="Comilla"@if($activity->location == "Comilla"){{'selected="selected"'}}@endif>Comilla</option>
                                    <option value="Dinajpur"@if($activity->location == "Dinajpur"){{'selected="selected"'}}@endif>Dinajpur</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email: </label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Email" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Phone: </label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label">Gender: </label>
                            <div class="col-sm-10">
                                <div class="radio">
                                @foreach($activities as $activity)
                                    <label>
                                        <input type="radio" name="gender" id="male" value="male" @if($activity->gender == "male"){{' checked'}}@endif> Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="female" value="female"@if($activity->gender == "female"){{' checked'}}@endif> Female
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="personal_1" id="personal_1" class="btn btn-warning">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->

            <!-- Second section starts here- -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="about_me" class="col-sm-1 control-label">About Me: </label>
                            <div class="col-sm-11" id="about">
                            @foreach($activities as $activity)
                                <textarea name="about_me" class="form-control" rows="4" cols="20" id="about_me" placeholder="Write something about yourself">{{$activity->about_me}}</textarea>
                                <br>
                            @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-10">
                                <button type="submit" name="personal_2" class="btn btn-warning" id="about_me_btn">Save</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->

            <div class="row">
                <div class="col-lg-12" id="edu">
                    <h4><strong>Your Education</strong></h4>
                    @foreach($activities as $activity)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="college">College/University</label>
                                <input type="text" name="college" class="form-control" id="college" value="{{$activity->college}}" placeholder="Institution name">
                            </div>
                            <div class="form-group">
                                <label for="degree_level">Degree Level</label>
                                <select name="degree" class="form-control" id="degree_level">
                                    @foreach($activities as $activity)
                                    <option value="Bachelor"@if($activity->degree == "Bachelor"){{' selected="selected"'}}@endif>Bachelor</option>
                                    <option value="Master's"@if($activity->degree == "Master's"){{' selected="selected"'}}@endif>Master's</option>
                                    <option value="Diploma"@if($activity->degree == "Diploma"){{' selected="selected"'}}@endif>Diploma</option>
                                    <option value="SSC/HSC"@if($activity->degree == "SSC/HSC"){{' selected="selected"'}}@endif>SSC/HSC</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="field">Field of Study</label>
                                <input type="text" name="field" class="form-control" id="field" value="{{$activity->field}}" placeholder="Field of study">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="grade">Grade</label>
                                <input type="text" name="grade" class="form-control" id="grade" value="{{$activity->grade}}" placeholder="Grade (i.e A, 100%)">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select name="country" class="form-control" id="country">
                                @foreach($activities as $activity)
                                    <option value="Bangladesh"@if($activity->country == "Bangladesh"){{'selected="selected"'}}@endif>Bangladesh</option>
                                    <option value="India"@if($activity->country == "India"){{'selected="selected"'}}@endif>India</option>
                                    <option value="USA"@if($activity->country == "USA"){{'selected="selected"'}}@endif>USA</option>
                                    <option value="Australia"@if($activity->country == "Australia"){{'selected="selected"'}}@endif>Australia</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="language">Languages</label>
                                <input type="text" name="language" class="form-control" id="language" value="{{$activity->language}}" placeholder="Languages">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="interest">Interests and Activities</label>
                                <input type="text" name="interest" class="form-control" id="interest" value="{{$activity->interest}}" placeholder="Interests and activities">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-sm-12">
                                <button type="submit" name="personal_3" class="btn btn-warning" id="edu_save">Save</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>
            </div>
            <!-- row ends here -->

            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Work Experience</strong></h4>
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
                </div>
            </div>
            <!-- row ends here -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Skills
                        </div>
                        <div class="panel-body" id="skill">
                            <ul class="list-group">
                            @foreach($skills as $skill)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <strong>Skill: </strong>{{$skill->name}}<br>
                                    <strong>Level: </strong>{{$skill->level}}<br>
                                    <strong>Experience: </strong>{{$skill->experience}}
                                        </div>
                                        {{-- <div class="col-lg-6 pull-right">
                                            <button type="submit" id="delete_btn" class="btn btn-default" style="color: red;">DELETE</button>
                                        </div> --}}
                                    </div>
                                    {{-- <input type="hidden" id="{{$skill->id}}"> --}}
                                </li>
                            @endforeach
                            </ul>

                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalSkills">+ ADD SKILLS</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here - -->

            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Attachments</strong></h4>
                     @foreach($attachments as $attachment)
                        <a href="/seeker/download-cv/{{$attachment->id}}">{{$attachment->name}}</a> <br>
                     @endforeach
                    <form action="{{route('seeker.attachment')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="doc_name">Name of the document:</label>
                                <input type="text" name="doc_name" class="form-control" id="doc_name" placeholder="Name of the document" required="required">

                            </div>
                            <div class="form-group">
                                <label for="document">Select document:</label>
                                <input type="file" name="document"  id="document">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class=" col-sm-12">
                                <input type="submit" class="btn btn-warning" value="+ UPLOAD" />
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- row ends here -->

            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Links</strong></h4>
                    <div class="row" id="link">
                    @foreach($links as $link)
                        <div class="col-lg-6"><strong style="color: green;">{{$link->name}} :</strong> </div>
                        <div class="col-lg-6"><a href="{{$link->url}}">{{$link->url}}</a>
                        <br></div>
                    @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="link_name">Link Name:</label>
                                <input type="text" name="link_name" class="form-control" id="link_name" placeholder="Name of the link" required="required">
                            </div>
                            <div class="form-group">
                                <label for="url">Url:</label>
                                <input type="text" name="url" class="form-control" id="url" placeholder="eg. www.example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-sm-12">
                                <button type="submit" name="personal_5" class="btn btn-warning" id="link_save">SAVE</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->

        </div>
        <!--First container-fluid ends here -->

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
                                    <input type="text" name="name" class="form-control" id="skill_name" placeholder="Skill name">
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
        {{csrf_field()}}
    </section>
@endsection

@section('script')

<script type="text/javascript">
    // seeker_edit_cv page js
jQuery(document).ready(function($) {
  
        $('#personal_1').click(function(event) {
                var name = $('#name').val();
                var location = $('#location').val();
                var phone = $('#phone').val();
                var gender = $('input[name=gender]:checked').val();
                
                $.post('{{route('seeker.edit_cv')}}', {'_token': $('input[name=_token]').val(), 'name': name,'location':location,'phone':phone,'gender':gender}, function(data) {
                    $('#sec_1').load(location.href + ' #sec_1');
                    console.log(data);
                });
            });

           //This is for SAVING Skills data
            $('#skill-btn').click(function(event) {
                var skillName = $('#skill_name').val();
                var level = $('#level').val();
                var experience = $('#experience').val();
                $.post('{{route('seeker.skill')}}', {'name':skillName,'level':level,'experience':experience,'_token':$('input[name=_token]').val()}, function(data) {
                    $('#skill').load(location.href + ' #skill');
                    console.log(data);
                });
            });
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

            //About me button ajax
            $('#about_me_btn').click(function(event) {
                var about = $('#about_me').val();
                $.post('{{route('seeker.about')}}', {'_token':$('input[name=_token]').val(), 'about_me':about}, function(data) {
                    $('#about').load(location.href + ' #about');
                    console.log(data);
                });
            });
            //Education data ajax
            $('#edu_save').click(function(event) {
                var clg = $('#college').val();
                var degree = $('#degree_level').val();
                var field = $('#field').val();
                var grade = $('#grade').val();
                var country = $('#country').val();
                var language = $('#language').val();
                var interest = $('#interest').val();
                $.post('{{route('seeker.edu')}}',{'_token':$('input[name=_token]').val(), 'college':clg, 'degree':degree, 'field':field, 'grade':grade, 'country':country, 'language':language, 'interest':interest}, function(data) {
                    $('#edu').load(location.href + ' #edu');
                    console.log(data);
                });
            });
            //Links data upload ajax
            $('#link_save').click(function(event) {
                var link_name = $('#link_name').val();
                var link_url = $('#url').val();
                $.post('{{route('seeker.link')}}',{'_token':$('input[name=_token]').val(), 'link_name':link_name, 'url':link_url}, function(data) {
                    $('#link').load(location.href + ' #link');
                    console.log(data);
                });
            });

});
</script>
@endsection