@extends('layout.employer_main')

@section('title', 'Employer register')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <h4><strong>Sign up for Job Board</strong></h4>
                    <p><strong>Join today and find top talent for your company</strong></p>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your phone no.">
                        </div>

                        <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">Sign up as employer</button>
                    </form>
                    <br>
                    <p><strong>Already a member?</strong></p>
                    <button type="submit" class="btn btn-primary form-control" style="text-transform: uppercase;border-radius:0;">Log In</button>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
@endsection