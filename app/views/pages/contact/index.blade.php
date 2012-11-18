@layout('template')

@section('styles')
	{{ HTML::style('css/datepicker.css') }}
@endsection

@section('scripts')
	{{ HTML::script('js/bootstrap-datepicker.js') }}
	<script type="text/javascript">
		$(document).ready(function(){

			$('.datepicker').datepicker().on('changeDate', function(e){
				$(this).datepicker('hide');
			});
		});
	</script>
@endsection

@section('content')
	<h1>Contact</h1>

	<p>Thank you for your interest in Brian Jacobs Golf! Please feel free to contact us and one of our representatives will get back to you as soon as possible. You can use the buttons below to toggle between different contact options.</p>

	<p>We look forward to serving you in meeting your golf goals in the very near future.</p>

	<div class="visible-phone">
		<a href="{{ URL::to_route('contact') }}" class="btn btn-primary btn-block btn-large">General Questions</a>
		<a href="{{ URL::to_route('contact', array('schools')) }}" class="btn btn-primary btn-block btn-large">Golf Schools</a>
		<a href="{{ URL::to_route('contact', array('clinics')) }}" class="btn btn-primary btn-block btn-large">Golf Clinics</a>
	</div>

	@if (isset($flash))
		<p class="alert alert-{{ $flash->status }}">{{ $flash->message }}</p>
	@else
		<p>&nbsp;</p>
	@endif

	{{ Form::open() }}
		<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
			<label class="control-label">Name</label>
			<div class="control">
				<input type="text" name="name" class="span4">
				<span class="help-inline">{{ $errors->has('name') ? 'Please enter your name' : '' }}</span>
			</div>
		</div>

		<div class="control-group {{ $errors->has('emailAddress') ? 'error' : '' }}">
			<label class="control-label">Email Address</label>
			<div class="control">
				<input type="email" name="emailAddress" class="span4">
				<span class="help-inline">{{ $errors->has('emailAddress') ? 'Please enter your email address' : '' }}</span>
			</div>
		</div>

		@if ($topic == 'schools')
			<div class="control-group {{ $errors->has('schoolAttend') ? 'error' : '' }}">
				<label class="control-label">Golf School to Attend</label>
				<div class="control">
					<select name="schoolAttend" class="span4">
						<option value=""></option>
						<option value="Putting School"{{ ($sub == 'putting') ? 'selected' : '' }}>Putting School Powered by Eyeline Golf</option>
						<option value="Short Game School"{{ ($sub == 'shortgame') ? 'selected' : '' }}>Short Game School</option>
						<option value="New Golfer School"{{ ($sub == 'newgolfer') ? 'selected' : '' }}>New Golfer School</option>
						<option value="Ladies-only School"{{ ($sub == 'ladies') ? 'selected' : '' }}>Ladies-only School</option>
						<option value="Elite Junior School"{{ ($sub == 'elitejunior') ? 'selected' : '' }}>Elite Junior School</option>
						<option value="Course Management School"{{ ($sub == 'course') ? 'selected' : '' }}>Course Management School</option>
					</select>
					<span class="help-inline">{{ $errors->has('schoolAttend') ? "Please select the school you'd like to attend" : "" }}</span>
				</div>
			</div>

			<div class="control-group {{ $errors->has('schoolDate') ? 'error' : '' }}">
				<label class="control-label">Preferred Date</label>
				<div class="control">
					<input type="text" name="schoolDate" class="span2 datepicker" data-date-format="mm/dd/yyyy">
					<span class="help-inline">{{ $errors->has('schoolDate') ? "Please select the date for your school" : "" }}</span>
				</div>
			</div>

			<div class="control-group {{ $errors->has('schoolDay') ? 'error' : '' }}">
				<label class="control-label">Preferred Day of the Week (if we cannot accommodate your date)</label>
				<div class="control">
					<select name="schoolDay" class="span2">
						<option value=""></option>
						<option value="Sunday">Sunday</option>
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
					</select>
					<span class="help-inline">{{ $errors->has('schoolDay') ? "Please select the day of the week for your school in the event we don't have availability on your date" : "" }}</span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">How did you hear about Brian Jacobs Golf?</label>
				<div class="control">
					<textarea name="schoolHearAbout" class="span8" rows="3"></textarea>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Additional Comments</label>
				<div class="control">
					<textarea name="schoolComments" class="span8" rows="3"></textarea>
				</div>
			</div>
		@elseif ($topic == 'clinics')
			<div class="control-group {{ $errors->has('clinicProgram') ? 'error' : '' }}">
				<label class="control-label">Please explain what kind of things you would like covered in your clinic program</label>
				<div class="control">
					<textarea name="clinicProgram" class="span8" rows="3"></textarea>
					<span class="help-inline">{{ $errors->has('clinicProgram') ? "Please explain the material you'd like covered in your clinic program" : "" }}</span>
				</div>
			</div>

			<div class="control-group {{ $errors->has('clinicDate') ? 'error' : '' }}">
				<label class="control-label">Preferred Date</label>
				<div class="control">
					<input type="text" name="clinicDate" class="span2 datepicker" data-date-format="mm/dd/yyyy">
					<span class="help-inline">{{ $errors->has('clinicDate') ? "Please select the date for your clinic" : "" }}</span>
				</div>
			</div>

			<div class="control-group {{ $errors->has('clinicDay') ? 'error' : '' }}">
				<label class="control-label">Preferred Day of the Week (if we cannot accommodate your date)</label>
				<div class="control">
					<select name="clinicDay" class="span2">
						<option value=""></option>
						<option value="Sunday">Sunday</option>
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
					</select>
					<span class="help-inline">{{ $errors->has('clinicDay') ? "Please select the day of the week for your clinic in the event we don't have availability on your date" : "" }}</span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">How did you hear about Brian Jacobs Golf?</label>
				<div class="control">
					<textarea name="clinicHearAbout" class="span8" rows="3"></textarea>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Additional Comments</label>
				<div class="control">
					<textarea name="clinicComments" class="span8" rows="3"></textarea>
				</div>
			</div>
		@else
			<div class="control-group">
				<label class="control-label">Subject</label>
				<div class="control">
					<select name="subject" class="span4">
						<option value="General Question"{{ ($topic == 'general') ? 'selected' : '' }}>General Question</option>
						<option value="Private Instruction"{{ ($topic == 'instruction') ? 'selected' : '' }}>Private Instruction Information/Question</option>
						<option value="AdvoCare"{{ ($topic == 'advocare') ? 'selected' : '' }}>AdvoCare Information/Ordering</option>
						<option value="Eyeline"{{ ($topic == 'eyeline') ? 'selected' : '' }}>Eyeline Products</option>
					</select>
				</div>
			</div>

			<div class="control-group {{ $errors->has('message') ? 'error' : '' }}">
				<label class="control-label">Message</label>
				<div class="control">
					<textarea name="message" rows="10" class="span8"></textarea>
					<span class="help-inline">{{ $errors->has('message') ? 'Please enter your message' : '' }}</span>
				</div>
			</div>
		@endif

		<div class="control-group">
			<div class="control visible-desktop">
				<button class="btn btn-primary" type="submit">Send</button>
			</div>
			<div class="control visible-phone">
				<button class="btn btn-primary btn-block btn-large" type="submit">Send</button>
			</div>
		</div>
	</form>
@endsection