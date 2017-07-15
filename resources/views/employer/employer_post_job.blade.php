@extends('layout.employer_main')

@section('title', 'Post a job')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><strong>Post a Job</strong></h3>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Job Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter job title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Job Description</label>
                            <textarea rows="4" cols="30" class="form-control" id="exampleInputPassword1" placeholder="Job Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Position Requirements</label>
                            <textarea rows="4" cols="30" class="form-control" id="exampleInputPassword1" placeholder="Position requirements"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Job Category</label>
                            <select name="cars" class="form-control">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salary</label>
                            <select name="cars" class="form-control">
                                <option value="volvo">Negotiable</option>
                                <option value="saab">0 - 25000 BDT</option>
                                <option value="fiat">25001 - 50000 BDT</option>
                                <option value="audi">50001 - 75000 BDT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                            <select name="cars" class="form-control">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Country</label>
                            <select name="cars" class="form-control">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Application Deadline</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="DD/MM/YYYY">
                        </div>
                        <h4>Candidate Requirements</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Career Level</label>
                            <select name="cars" class="form-control">
                                <option value="volvo">Begineer</option>
                                <option value="saab">Intermediate</option>
                                <option value="fiat">Experienced</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Degree</label>
                            <select name="cars" class="form-control">
                                <option value="volvo">Bachelor</option>
                                <option value="saab">Master's</option>
                                <option value="fiat">Diploma</option>
                                <option value="audi">SSC/HSC</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Minimum years of Experience</label>
                            <select name="cars" class="form-control">
                                <option value="volvo">0 - 5 years</option>
                                <option value="saab">5 - 10 years</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Language Skills</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Language skills">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Professional Skills</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Professional Skills">
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-lg-offset-4">
                                <input type="submit" class="btn btn-warning" style="border-radius: 0;" value="POST JOB NOW">
                            </div>
                            <div class="col-lg-6">
                                <input type="submit" class="btn btn-default" style="border-radius: 0;" value="SAVE AS DRAFT">
                                <br>
                                <br>
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