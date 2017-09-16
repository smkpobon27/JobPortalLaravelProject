@extends('layout.employer_main')

@section('title', 'Edit job')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><strong>Edit this Job</strong></h3>
                    <form action="/employer/job/store/{{$jobData->id}}" method="post">
                    {{csrf_field()}}
                        <div class="form-group{{$errors->has('title')?' has-error':''}}">
                            <label for="title">Job Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter job title" value="{{$jobData->title}}">
                            @if($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{$errors->first('title')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('description')?' has-error':''}}">
                            <label for="description">Job Description</label>
                            <textarea rows="4" cols="30" name="description" class="form-control" id="description" placeholder="Job Description">{{$jobData->description}}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{$errors->first('description')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('requirement')?' has-error':''}}">
                            <label for="requirement">Position Requirements</label>
                            <textarea rows="4" cols="30" name="requirement" class="form-control" id="requirement" placeholder="Position requirements">{{$jobData->requirement}}</textarea>
                            @if($errors->has('requirement'))
                                <span class="help-block">
                                    <strong>{{$errors->first('requirement')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="industry">Job industry</label>
                            <select name="industry" class="form-control" id="industry">
                                <option value="Bank"@if($jobData->industry == "Bank"){{' selected="selected"'}}@endif>Bank</option>
                                <option value="IT/Software"@if($jobData->industry == "IT/Software"){{' selected="selected"'}}@endif>IT/Software</option>
                                <option value="Multinational"@if($jobData->industry == "Multinational"){{' selected="selected"'}}@endif>Multinational</option>
                                <option value="Insurance"@if($jobData->industry == "Insurance"){{' selected="selected"'}}@endif>Insurance</option>
                                <option value="Teaching"@if($jobData->industry == "Teaching"){{' selected="selected"'}}@endif>Teaching</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <select name="salary" class="form-control" id="salary">
                                <option value="Negotiable"@if($jobData->salary == "Negotiable"){{' selected="selected"'}}@endif>Negotiable</option>
                                <option value="0 - 25000 BDT"@if($jobData->salary == "0 - 25000 BDT"){{' selected="selected"'}}@endif>0 - 25000 BDT</option>
                                <option value="25001 - 50000 BDT"@if($jobData->salary == "25001 - 50000 BDT"){{' selected="selected"'}}@endif>25001 - 50000 BDT</option>
                                <option value="50001 - 75000 BDT"@if($jobData->salary == "50001 - 75000 BDT"){{' selected="selected"'}}@endif>50001 - 75000 BDT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <select name="city" class="form-control" id="city">
                                <option value="Dhaka"@if($jobData->city == "Dhaka"){{' selected="selected"'}}@endif>Dhaka</option>
                                <option value="Rajshahi"@if($jobData->city == "Rajshahi"){{' selected="selected"'}}@endif>Rajshahi</option>
                                <option value="Chittagong"@if($jobData->city == "Chittagong"){{' selected="selected"'}}@endif>Chittagong</option>
                                <option value="Khulna"@if($jobData->city == "Khulna"){{' selected="selected"'}}@endif>Khulna</option>
                                <option value="Barisal"@if($jobData->city == "Barisal"){{' selected="selected"'}}@endif>Barisal</option>
                                <option value="Sylhet"@if($jobData->city == "Sylhet"){{' selected="selected"'}}@endif>Sylhet</option>
                                <option value="Dinajpur"@if($jobData->city == "Dinajpur"){{' selected="selected"'}}@endif>Dinajpur</option>
                                <option value="Bogra"@if($jobData->city == "Bogra"){{' selected="selected"'}}@endif>Bogra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select name="country" class="form-control" id="country">
                                <option value="Bangladesh"@if($jobData->country == "Bangladesh"){{' selected="selected"'}}@endif>Bangladesh</option>
                                <option value="India"@if($jobData->country == "India"){{' selected="selected"'}}@endif>India</option>
                                <option value="USA"@if($jobData->country == "USA"){{' selected="selected"'}}@endif>USA</option>
                                <option value="Canada"@if($jobData->country == "Canada"){{' selected="selected"'}}@endif>Canada</option>
                            </select>
                        </div>
                        <div class="form-group{{$errors->has('deadline')?' has-error':''}}">
                            <label for="deadline">Application Deadline</label>
                            <input type="date" name="deadline" class="form-control" id="deadline" placeholder="YYYY-MM-DD" value="{{$jobData->deadline}}">
                            @if($errors->has('deadline'))
                                <span class="help-block">
                                    <strong>{{$errors->first('deadline')}}</strong>
                                </span>
                            @endif
                        </div>
                        <h4>Candidate Requirements</h4>
                        <div class="form-group">
                            <label for="career_level">Career Level</label>
                            <select name="career_level" class="form-control" id="career_level">
                                <option value="Begineer"@if($jobData->career_level == "Begineer"){{' selected="selected"'}}@endif>Begineer</option>
                                <option value="Intermediate"@if($jobData->career_level == "Intermediate"){{' selected="selected"'}}@endif>Intermediate</option>
                                <option value="Experienced"@if($jobData->career_level == "Experienced"){{' selected="selected"'}}@endif>Experienced</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="degree">Degree</label>
                            <select name="degree" class="form-control" id="degree">
                                <option value="Bachelor"@if($jobData->degree == "Bachelor"){{' selected="selected"'}}@endif>Bachelor</option>
                                <option value="Master's"@if($jobData->degree == "Master's"){{' selected="selected"'}}@endif>Master's</option>
                                <option value="Diploma"@if($jobData->degree == "Diploma"){{' selected="selected"'}}@endif>Diploma</option>
                                <option value="SSC/HSC"@if($jobData->degree == "SSC/HSC"){{' selected="selected"'}}@endif>SSC/HSC</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="experience">Minimum years of Experience</label>
                            <select name="experience" class="form-control" id="experience">
                                <option value="0 - 2 years"@if($jobData->experience == "0 - 2 years"){{' selected="selected"'}}@endif>0 - 2 years</option>
                                <option value="2 - 5 years"@if($jobData->experience == "2 - 5 years"){{' selected="selected"'}}@endif>2 - 5 years</option>
                                <option value="5 - 10 years"@if($jobData->experience == "5 - 10 years"){{' selected="selected"'}}@endif>5 - 10 years</option>
                                <option value="10 - 15 years"@if($jobData->experience == "10 - 15 years"){{' selected="selected"'}}@endif>10 - 15 years</option>
                            </select>
                        </div>
                        <div class="form-group{{$errors->has('language')?' has-error':''}}">
                            <label for="language">Language Skills</label>
                            <input type="text" name="language" class="form-control" id="language" placeholder="Language skills" value="{{$jobData->language}}">
                            @if($errors->has('language'))
                                <span class="help-block">
                                    <strong>{{$errors->first('language')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('skill')?' has-error':''}}">
                            <label for="skill">Professional Skills</label>
                            <input type="text" name="skill" class="form-control" id="skill" placeholder="Professional Skills" value="{{$jobData->skill}}"> 
                            @if($errors->has('skill'))
                                <span class="help-block">
                                    <strong>{{$errors->first('skill')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-lg-offset-5">
                                <input type="submit" class="btn btn-warning" style="border-radius: 0;" value="SAVE JOB">
                                <br><br>
                            </div>
                        </div>
                    </form>
                    <!-- form ends here -->
                </div>
            </div>
            <!-- row ends here -->
        </div>
        <!-- first container ends here -->
    </section>
@endsection