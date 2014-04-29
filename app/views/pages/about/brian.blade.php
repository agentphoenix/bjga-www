@layout('template')

@section('title')
	Meet Brian Jacobs
@endsection

@section('content')
	<h1>Meet Brian Jacobs</h1>

	<div class="pull-right inline-image"><img src="{{ URL::to_asset('img/img-brian.png') }}" alt="" class="img-rounded"></div>

	<p>For over 25 years, Brian Jacobs has devoted himself to education, in and out of the classroom. Since earning his Master of Science Degree in Education, Brian has taught in the Rochester City School District and been awarded local, state and national teaching accolades. Beyond the classroom and over the last 15 years, Brian has worked to empower golfers of all ages to find greater enjoyment from the game he loves so much. His dedication and passion for the game are infectious and have earned him Class A PGA credentials and recognition from the PGA Foundation for helping grow the game of golf.</p>

	<p>Trained in the Western New York Section, Brian has served the memberships of prestigious clubs like Midvale Country Club, Locust Hill Country Club and The Country Club of Rochester as an Assistant PGA Golf Professional and the PGA Director of Instruction at Irondequoit Country Club. Taking his experience at golf clubs, Brian transitioned to instruction at The Victory Golf Academy and later became a Lead Instructor for ESPN Golf Schools where he met Hank Haney (former teacher of Tiger Woods). Over the past 8 years, Brian has been mentored by Hank Haney and earned the distinction of a Hank Haney Golf Certified Instructor. Currently, Brian is one of only six instructors in the world to achieve Hank Haney's Level 3 Certification. As a Nike Staff Professional and the Director of Instruction at Brian Jacobs Golf, Brian leverages his <a href="{{ URL::to_route('relationships') }}">relationships</a> with Nike Golf, Hank Haney and his staff and many others to provide world class golf instruction for golfers of all ages and skill levels.</p>

	<p>Drawing from his unique experience as an accomplished player, caddie, PGA Professional and golf instructor, Brian brings an invaluable "inside the ropes" perspective to his teaching. Whether you're looking for swing instruction, short game help, course management skills, learning how to manage yourself within a round of golf or preparing your Junior Golfer to play the game at a high level, Brian has the expertise to help you succeed.</p>
@endsection