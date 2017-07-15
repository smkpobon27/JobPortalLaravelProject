@extends('layout.seeker_main')

@section('title', 'Edit CV')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <h3><strong>Edit Your CV</strong></h3>
            <div class="row">
                <div class="col-lg-2">
                    <img src="../images/header_image.png" alt="Profile image" class="img-thumbnail img-responsive" style="height: 180px; width: 500px;">
                    <br>
                    <input type="file" name="image">
                    <br>
                    <button class="btn btn-primary" id="upload">UPLOAD</button>
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
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Dinajpur">Dinajpur</option>
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
                                    <label>
                                        <input type="radio" name="gender" id="male" value="male" checked> Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="female" value="female"> Female
                                    </label>
                                </div>
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
                            <div class="col-sm-11">
                                <textarea name="about_me" class="form-control" rows="4" cols="20" id="about_me" placeholder="Write something about yourself"></textarea>
                                <br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-10">
                                <button type="submit" name="personal_2" class="btn btn-warning">Save</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->

            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Your Education</strong></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="college">College/University</label>
                                <input type="text" name="college" class="form-control" id="college" placeholder="Institution name">
                            </div>
                            <div class="form-group">
                                <label for="degree">Degree Level</label>
                                <select name="degree" class="form-control" id="degree">
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Master's">Master's</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="SSC/HSC">SSC/HSC</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="field">Field of Study</label>
                                <input type="text" name="field" class="form-control" id="field" placeholder="Field of study">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="grade">Grade</label>
                                <input type="text" name="grade" class="form-control" id="grade" placeholder="Grade (i.e A, 100%)">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select name="country" class="form-control" id="country">
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="language">Languages</label>
                                <input type="text" name="language" class="form-control" id="language" placeholder="Languages">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="interest">Interests and Activities</label>
                                <input type="text" name="interest" class="form-control" id="interest" placeholder="Interests and activities">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-sm-12">
                                <button type="submit" name="personal_3" class="btn btn-warning">Save</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- row ends here -->

            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Attachments</strong></h4>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="doc_name">Name of the document:</label>
                                <input type="text" name="doc_name" class="form-control" id="doc_name" placeholder="Name of the document">

                            </div>
                            <div class="form-group">
                                <label for="document">Select document:</label>
                                <input type="file" name="document"  id="document" placeholder="Name of the document">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class=" col-sm-12">
                                <button type="submit" name="personal_4" class="btn btn-warning">+ UPLOAD</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row ends here -->

            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Links</strong></h4>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="link_name">Link Name:</label>
                                <input type="text" name="link_name" class="form-control" id="link_name" placeholder="Name of the link">
                            </div>
                            <div class="form-group">
                                <label for="url">Url:</label>
                                <input type="text" name="url" class="form-control" id="url" placeholder="Url">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-sm-12">
                                <button type="submit" name="personal_5" class="btn btn-warning">SAVE</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
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
            
});
</script>
@endsection