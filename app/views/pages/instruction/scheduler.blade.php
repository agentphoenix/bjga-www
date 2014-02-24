@layout('template')

@section('title')
	Book Now
@endsection

@section('content')
	<h1>Book Now</h1>

	<p>We're excited to offer our students a brand-new experience for booking lessons and enrolling in our programs.</p>

	<h3>Getting Started</h3>

	<p>In order to get started with booking your lessons and programs, you'll first need to register for the system. Registering is quick and easy and involves only your name, email address, and phone number. Once you've created your account, you'll automatically be logged in and shown your full upcoming schedule. If you have any lessons booked or are enrolled in any programs, they'll show up here.</p>

	<h3>Booking</h3>

	<p>You will always have quick access to book a lesson or enroll in a program from the side navigation on every page. Each page offers different options for that type of service. For lessons, you'll be able to select what type of lesson you want, for programs, you'll be given a list of programs that you can enroll in. Additionally, the Upcoming Programs page will give you one-click access to enrolling in a program or withdrawing from programs you're enrolled in.</p>

	<p class="alert">Note: when booking a lesson, you will have 2 minutes to select a time once you've checked the availability of a date before the selections are reset. Once you've selected a time, you'll have an additional 2 minutes to book the appointment before your selections will be reset.</p>

	<h3>For Phone and Tablet Users</h3>

	<p>We've optimized the scheduler to look and work seamlessly on your phone or tablet. Like many apps on your devices, you'll see a series of 3 lines in the upper left corner. Tapping that icon will reveal the navigation for the scheduler. From there, you'll be able to navigate through the site the same as you would with a laptop or desktop.</p>

	<div class="btn-group hidden-phone">
		<a href="http://scheduling.brianjacobsgolf.com" target="_blank" class="btn btn-primary">Enter the Scheduler Now</a>
	</div>
	<div class="visible-phone">
		<a href="http://scheduling.brianjacobsgolf.com" target="_blank" class="btn btn-primary btn-block btn-large">Enter the Scheduler Now</a>
	</div>
@endsection