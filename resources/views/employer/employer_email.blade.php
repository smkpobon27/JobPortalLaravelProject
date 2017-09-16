@extends('layout.employer_main')
@section('title', 'Email')
@section('content')
<section class="top" style="margin-top: 100px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<h3>Send email to this job seeker</h3><br>
				<form method="post" action="/employer/email/send" class="form-horizontal">
				{{csrf_field()}}
					<div class="form-group">
						<label for="from" class="col-sm-2 control-label">From</label>
						<div class="col-sm-10">
							<input type="email" name="from" value="{{$user->email}}" class="form-control" id="from" placeholder="From" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
						<label for="to" class="col-sm-2 control-label">To</label>
						<div class="col-sm-10">
							<input type="email" name="to" value="{{$seeker->email}}" class="form-control" id="to" placeholder="To">
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="col-sm-2 control-label">Subject</label>
						<div class="col-sm-10">
							<input type="text" name="subject"  class="form-control" id="subject" placeholder="Subject">
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea name="message" rows="4" cols="30" class="form-control" id="message" placeholder="Write your message"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-warning">SEND MAIL</button><br><br>
						</div>
					</div>
				</form>
			</div>
			</div><!-- first row ends here -->
			</div> <!-- first container ends here -->
		</section>
		@endsection