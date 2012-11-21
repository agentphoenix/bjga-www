@layout ('template')

@section('content')
	<h1>Clinics</h1>

	<p>While our private instruction is usually one-on-one or two-on-one, there are times when larger groups of 3, 6, 9 or more may want to utilize the resources and expertise of our staff. For those situations, we offer flexible clinic programs that can be scheduled to accommodate larger groups.</p>

	<p>Heading out of town for a golf trip with your friends? A Brian Jacobs Golf Clinic can get you and your friends tuned up and ready to play. Have a small golf league or tournament that you'd like to offer a clinic before? We build highly custom clinics that allow you to cater the material to what you'd like to work on.</p>

	<p>Our clinic programs offer all the benefits of private instruction for larger groups and can be done any day of the week, provided we have availability. We're happy to work with you to design a clinic program that fits the needs of your group. Please contact us for more information about building a clinic today.</p>

	<div class="hidden-phone"><a href="{{ URL::to_route('contact', array('clinics')) }}" class="btn btn-primary">Contact Us for Clinic Info</a></div>

	<div class="visible-phone"><a href="{{ URL::to_route('contact', array('clinics')) }}" class="btn btn-primary btn-block btn-large">Contact Us for Clinic Info</a></div>
@endsection