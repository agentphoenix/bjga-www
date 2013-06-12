@layout('template')

@section('title')
	Contact
@endsection

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
	<h1>Contact{{ $contactTitle }}</h1>

	<p>{{ $introMessage }}</p>

	@if (isset($flash))
		<p class="alert alert-{{ $flash->status }}">{{ $flash->message }}</p>
	@endif

	<hr>

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
		@elseif ($topic == 'winter-lessons')
			<div class="control-group {{ $errors->has('winterInstructionProgram') ? 'error' : '' }}">
				<label class="control-label">Package to Book</label>
				<div class="control">
					<select name="winterInstructionProgram" class="span4">
						<option value="Private Session">60 Minute Private Instruction Session</option>
						<option value="5 Session Bundle">5 60 Minute Private Instruction Sessions</option>
						<option value="7 Session Bundle">7 60 Minute Private Instruction Sessions</option>
						<option value="12 Session Bundle">12 60 Minute Private Instruction Sessions</option>
					</select>
					<span class="help-inline">{{ $errors->has('winterInstructionProgram') ? "Please select the instruction package you want to book" : "" }}</span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Additional Comments</label>
				<div class="control">
					<textarea name="winterInstructionComments" class="span8" rows="3"></textarea>
				</div>
			</div>
		@elseif ($topic == 'regripping')
			<div class="control-group {{ $errors->has('phone') ? 'error' : '' }}">
				<label class="control-label">Phone Number</label>
				<div class="control">
					<input type="text" name="phone" class="span2">
					<span class="help-inline">{{ $errors->has('phone') ? "Please enter a phone number" : "" }}</span>
				</div>
			</div>

			<div class="control-group {{ $errors->has('numberOfClubs') ? 'error' : '' }}">
				<label class="control-label">Number of clubs to re-grip</label>
				<div class="control">
					<input type="text" name="numberOfClubs" class="span1">
					<span class="help-inline">{{ $errors->has('numberOfClubs') ? "Please enter the number of clubs to be re-gripped" : "" }}</span>
				</div>
			</div>

			<div class="control-group {{ $errors->has('typeOfGrip') ? 'error' : '' }}">
				<label class="control-label">Type of Grip</label>
				<div class="control">
					<select name="typeOfGrip" class="span4">
						<option value="PURE Pro">PURE Pro</option>
						<option value="PURE Midsize Pro">PURE Midsize Pro</option>
						<option value="PURE Undersize Pro">PURE Undersize Pro</option>
						<option value="P2 Wrap">P2 Wrap</option>
						<option value="PURE Midsize Wrap">PURE Midsize Wrap</option>
						<option value="Old School Wrap">Old School Wrap</option>
					</select>
					<span class="help-inline">{{ $errors->has('typeOfGrip') ? "Please select the types of grips you want" : "" }}</span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label checkbox">Re-grip Putter? <input type="checkbox" name="includePutter" value="Yes"></label>
			</div>

			<div class="control-group">
				<label class="control-label">Special Instructions</label>
				<div class="control">
					<textarea name="specialInstructions" class="span8" rows="3"></textarea>
					<p class="help-block">If you're ordering different types of grips for different clubs or want extra tape wraps, please describe that here. Additional charges may be incurred for different grip types, tape wraps and putter re-gripping.</p>
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
						<option value="Club Fitting"{{ ($topic == 'fitting') ? 'selected' : '' }}>Club Fitting Services</option>
					</select>
				</div>
			</div>

			@if ($topic == 'eyeline')
				<div class="control-group {{ $errors->has('product') ? 'error' : '' }}">
					<label class="control-label">Eyeline Golf Product</label>
					<div class="control">
						<select name="product" class="span4">
							<option value="Ball of Steel - 3 Pack">Ball of Steel - 3 Pack</option>
							<option value="Eyeline Edge Mirror">Eyeline Edge Mirror</option>
							<option value="Eyeline Edge Rail">Eyeline Edge Rail</option>
							<option value="Sweet Spot 360">Sweet Spot 360&deg;</option>
							<option value="Impact Ball Liner">Impact Ball Liner</option>
							<option value="Golf Metronome Tour Edition">Golf Metronome Tour Edition</option>
							<option value="LifeLine Training Grip">LifeLine Training Grip</option>
							<option value="Short Game Target">Short Game Target</option>
						</select>
						<span class="help-inline">{{ $errors->has('product') ? 'Please select an Eyeline Golf product to get more information about' : '' }}</span>
					</div>
				</div>
			@endif

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
			<div class="control hidden-desktop">
				<button class="btn btn-primary btn-block btn-large" type="submit">Send</button>
			</div>
		</div>
	</form>
@endsection