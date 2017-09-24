@extends('layout.seeker_main')

@section('title', 'User Settings')

@section('content')
<div class="container top" style="margin-top: 100px;">
	<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<h3>User Settings</h3>
		<form action="{{route('seeker.settings')}}" method="post">
		{{csrf_field()}}
		  <div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{$user->email}}" readonly>
		  </div>
		  <div class="form-group">
		    <label for="old-password">Old password</label>
		    <input type="password" name="old_password" class="form-control" id="old-password" placeholder="Enter old password">
		  </div>
		  <div class="form-group">
		    <label for="new-password">New password</label>
		    <input type="password" name="new_password" class="form-control" id="new-password" placeholder="Enter new password">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
	</form><br><br><br><br><br>
	</div>
</div>
</div>

@endsection