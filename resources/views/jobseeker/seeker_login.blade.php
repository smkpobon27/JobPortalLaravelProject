@extends('layout.seeker_main')

@section('title', 'Log in')

@section('content')

    <section class="top" style="margin-top: 100px;">
       <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
               <h4><strong>Log in and Explore yourself !</strong></h4>
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">Log in as job seeker</button>
                </form>
                <br>
                <p><strong>Not a member?</strong></p>
                <button type="submit" class="btn btn-primary form-control" style="text-transform: uppercase;border-radius:0;">Sign up</button> <br><br><br>
            </div>
        </div>
        </div>
    </section>
@endsection 