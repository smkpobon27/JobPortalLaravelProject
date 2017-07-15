@extends('layout.seeker_main')

@section('title', 'Apply now')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
               <div class="col-lg-12">
                
                <div class="row">
                    <div class="col-lg-6">
                       <h4>Apply for this Job</h4>
                        <p><strong>Job Title: </strong></p>
                        <p><strong>Company Name: </strong></p>
                    </div>
                    <div class="col-lg-6">
                       <h4>Your contact information</h4>
                        <p><strong>Email: </strong></p>
                        <p><strong>Phone: </strong></p>
                    </div>
                </div>
                <div class="form-group top">
                                        <div class="col-sm-offset-5 col-sm-12">
                                            <button type="submit" class="btn btn-lg btn-warning">SEND</button><br><br><br>
                                        </div>
                                    </div>
                </div>
            </div><!-- row ends here -->
            
        </div><!-- First container ends here -->
    </section>

  @endsection