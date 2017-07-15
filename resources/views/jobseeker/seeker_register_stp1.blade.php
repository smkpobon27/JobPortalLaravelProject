@extends('layout.seeker_main')

@section('title', 'Register')

@section('content')

    <section class="top" style="margin-top: 100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <h4><strong>Sign up today and find the best jobs online!</strong></h4>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('seeker.register') }}">
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name"  required autofocus>
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('email') ? ' has-error': ''}}">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="Enter email" required>
                            @if($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{$errors->has('password') ? ' has-error': ''}}">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            @if($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{$errors->first('password')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Confirm password">
                        </div>
                        <input type="hidden" name="seeker" value="1">
                        
                        <button type="submit" class="btn btn-warning form-control" style="text-transform: uppercase;border-radius:0;">Sign up as job seeker</button>
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