@layout('template')

@section('title')
	Book Now
@endsection

@section('content')
	<h1>Book Now</h1>

	<p>We're excited to offer our students an all-new experience for booking lessons and enrolling in our programs. We wanted to create something that was simple, straightforward, and easy-to-use and our new scheduling system does just that!</p>

	<h3>Getting Started</h3>

	<p>In order to get started with booking lessons and enrolling in programs, you'll first need to register. Registering is quick and easy and involves only your name, email address, a password, and your phone number. Once you've created your account, you'll automatically be logged in.</p>

	<h3>My Schedule</h3>

	<p>When you book a lesson or enroll in a program, your schedule will be displayed in its entirety on the My Schedule page. After logging in, you'll be presented with your schedule. From here, you'll be able to email the instructor of a lesson, cancel an appointment, or view more information about a program you're attending.</p>

	<h3>Booking</h3>

	<p>You'll always have quick access to book a lesson or enroll in a program from the side navigation on every page. Each page offers different options for that type of service. For lessons, you'll be able to select what type of lesson you want, for programs, you'll be given a list of programs you can enroll in. Additionally, the Upcoming Programs page will give you one-click access to enrolling in a program or withdrawing from programs you're enrolled in.</p>

	<p class="alert">Note: when booking a lesson, you will have 3 minutes to select a time once you've checked the availability of a date before the selections are reset. Once you've selected a time, you'll have an additional 3 minutes to book the appointment before your selections will be reset.</p>

	<h3>For Phone and Tablet Users</h3>

	<p>We've optimized the scheduler to look and work seamlessly on your phone or tablet. Like many apps on your devices, you'll see a series of 3 lines in the upper left corner. Tapping that icon will reveal the navigation for the scheduler. From there, you'll be able to navigate through the site the same as you would with a laptop or desktop.</p>

	<div class="btn-group hidden-phone">
		<a href="http://booknow.brianjacobsgolf.com" class="btn btn-primary">Book Now</a>
	</div>
	<div class="visible-phone">
		<a href="http://booknow.brianjacobsgolf.com" class="btn btn-primary btn-block btn-large">Book Now</a>
	</div>
@endsection