@extends('layout.employer_main')

@section('title', 'Log in')

@section('content')

    <section class="top" style="margin-top: 100px;">
       <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
               <h4><strong>Log in and Explore yourself !</strong></h4>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('employer.login') }}">
                {{csrf_field()}}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                            <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                            </span>
                      @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="required">
                      @if ($errors->has('password'))
                            <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                            </span>
                      @endif
                  </div>
                  <input type="hidden" name="employer" value="1">
        
                  <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">Log in as Employer</button>
                </form>
                <br>
                <p><strong>Not a member?</strong></p>
                <button type="submit" class="btn btn-primary form-control" style="text-transform: uppercase;border-radius:0;">Sign up</button> <br><br><br>
            </div>
        </div>
        </div>
    </section>
@endsection 