@extends('layout.employer_main')

@section('title', 'Post a job')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><strong>Post a Job</strong></h3>
                    <form action="{{route('employer.post_job')}}" method="post">
                    {{csrf_field()}}
                        <div class="form-group{{$errors->has('title')?' has-error':''}}">
                            <label for="title">Job Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter job title" value="{{old('title')}}">
                            @if($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{$errors->first('title')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('description')?' has-error':''}}">
                            <label for="description">Job Description</label>
                            <textarea rows="4" cols="30" name="description" class="form-control" id="description" placeholder="Job Description">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{$errors->first('description')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('requirement')?' has-error':''}}">
                            <label for="requirement">Position Requirements</label>
                            <textarea rows="4" cols="30" name="requirement" class="form-control" id="requirement" placeholder="Position requirements">{{old('requirement')}}</textarea>
                            @if($errors->has('requirement'))
                                <span class="help-block">
                                    <strong>{{$errors->first('requirement')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="industry">Job industry</label>
                            <select name="industry" class="form-control" id="industry">
                                <option value="Bank">Bank</option>
                                <option value="IT/Software">IT/Software</option>
                                <option value="Multinational">Multinational</option>
                                <option value="Bank">Bank</option>
                                <option value="Data Entry/Operator">Data Entry/Operator</option>
                                <option value="Agricultural">Agricultural</option>
                                <option value="Accounting/Finance">Accounting/Finance</option>
                                <option value="Design/Creative">Design/Creative</option>
                                <option value="Driving">Driving</option>
                                <option value="Education/Training">Education/Training</option>
                                <option value="Engineer/Architect">Engineer/Architect</option>
                                <option value="Garments/Textile">Garments/Textile</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <select name="salary" class="form-control" id="salary">
                                <option value="Negotiable">Negotiable</option>
                                <option value="0 - 25000 BDT">0 - 25000 BDT</option>
                                <option value="25001 - 50000 BDT">25001 - 50000 BDT</option>
                                <option value="50001 - 75000 BDT">50001 - 75000 BDT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <select name="city" class="form-control" id="city">
                                <option value="Dhaka">Dhaka</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Bogra">Bogra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select name="country" class="form-control" id="country">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>
                        <div class="form-group{{$errors->has('deadline')?' has-error':''}}">
                            <label for="deadline">Application Deadline</label>
                            <input type="date" name="deadline" class="form-control" id="deadline" placeholder="YYYY-MM-DD" value="{{old('deadline')}}">
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
                                <option value="Begineer">Begineer</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Experienced">Experienced</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="degree">Degree</label>
                            <select name="degree" class="form-control" id="degree">
                                <option value="Bachelor">Bachelor</option>
                                <option value="Master's">Master's</option>
                                <option value="Diploma">Diploma</option>
                                <option value="SSC/HSC">SSC/HSC</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="experience">Minimum years of Experience</label>
                            <select name="experience" class="form-control" id="experience">
                                <option value="0 - 2 years">0 - 2 years</option>
                                <option value="2 - 5 years">2 - 5 years</option>
                                <option value="5 - 10 years">5 - 10 years</option>
                                <option value="10 - 15 years">10 - 15 years</option>
                            </select>
                        </div>
                        <div class="form-group{{$errors->has('language')?' has-error':''}}">
                            <label for="language">Language Skills</label>
                            <input type="text" name="language" class="form-control" id="language" placeholder="Language skills" value="{{old('language')}}">
                            @if($errors->has('language'))
                                <span class="help-block">
                                    <strong>{{$errors->first('language')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('skill')?' has-error':''}}">
                            <label for="skill">Professional Skills</label>
                            <input type="text" name="skill" class="form-control" id="skill" placeholder="Professional Skills" value="{{old('skill')}}"> 
                            @if($errors->has('skill'))
                                <span class="help-block">
                                    <strong>{{$errors->first('skill')}}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-lg-offset-4">
                                <input type="submit" class="btn btn-warning" style="border-radius: 0;" value="POST JOB NOW">
                                <br><br>
                            </div>
                            {{-- <div class="col-lg-6">
                                <input type="submit" class="btn btn-default" style="border-radius: 0;" value="SAVE AS DRAFT">
                                <br>
                                <br>
                            </div> --}}
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