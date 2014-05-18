@layout('template')

@section('title')
	Relationships
@endsection

@section('content')
	<h1>Relationships</h1>

	<p>For over 15 years, Brian Jacobs has cultivated relationships with local, national and global brands to provide the best resources and values for his students. We encourage you to take a closer look at these resources and <a href="{{ URL::to_route('contact', array('general')) }}">contact us</a> with any questions you may have.</p>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.pga.com/pga-america" target="_blank">PGA of America</a></h3>
			<p>Since 1916, the PGA's mission has been twofold; to establish and elevate the standards of the profession and to grow interest and participation in the game of golf.</p>
			<p>By establishing and elevating the standards of the golf profession through world-class education, career services, marketing and research programs, the Association enables PGA Professionals to maximize their performance in their respective career paths and showcases them as experts in the game and in the $75 billion golf industry.</p>
			<p>By creating and delivering dramatic world-class championships and exciting and enjoyable golf promotions that are viewed as the best of their class in the golf industry, the PGA elevates the public's interest in the game, the desire to play more golf, and ensures accessibility to the game for everyone, everywhere.</p>
			<p>The PGA brand represents the gold standard, the very best in golf.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.pga.com/pga-america" target="_blank"><img src="{{ URL::to_asset('img/logo-pga.png') }}" alt="PGA of America"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.nike.com/nikegolf" target="_blank">Nike Golf</a></h3>
			<p>Nike Golf designs and markets golf equipment, apparel, balls, footwear, bags and accessories worldwide. Nike Golf is passionately dedicated to ushering in the future of this great sport by developing groundbreaking innovations that allow athletes to perform at their physical and mental peak.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.nike.com/nikegolf" target="_blank"><img src="{{ URL::to_asset('img/logo-nike.png') }}" alt="Nike Golf"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://trackmangolf.com/" target="_blank">TrackMan</a></h3>
			<p>The TrackMan radar unit tracks the trajectory of your golf ball from launch to landing. The ability to measure the full ball flight is essential to produce the highest quality data. The golf radar can pick up valuable information about your club head, giving a precise picture of the club during ball impact. The technology used is the "Doppler radar principle" and has been widely used in military applications to track missiles and projectiles since the 1960s.</p>

			<p>The TrackMan Radar Unit provides a technology that has conceptually changed the way players think, practice and get fitted for golf clubs. Consequently all major club and ball manufactures as well as the best players and teachers in the world have embraced the TrackMan technology.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://trackmangolf.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-trackman.png') }}" alt="TrackMan"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://hankhaneygolf.com/Index.aspx" target="_blank">Hank Haney Golf</a></h3>
			<p>Hank Haney Pro is a self-paced golf instruction certification program designed by Hank Haney to provide golfers around the world the tools, training, and support necessary to become the best instructor they can be, by partnering and adopting with the Hank Haney method and brand.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://hankhaneygolf.com/Index.aspx" target="_blank"><img src="{{ URL::to_asset('img/logo-hankhaney.png') }}" alt="Hank Haney Golf"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.trainatnextlevel.com/" target="_blank">Next Level Strength and Conditioning</a></h3>
			<p>For the past 10 years, Next Level Strength and Conditioning has offered the latest in Sports Performance Training to countless Youth, High School, College and Professional Athletes. Our team of knowledgeable strength coaches posses a wealth of experience working with athletes and general fitness clients of all ages and skill levels. We take pride in offering developmentally appropriate programs with sound progressions and sequencing, within a closely supervised environment to maximize results and safety.</p>

			<p>Our brand new 5,000 square foot training facility in Fairport is unlike any other privately owned facility in the area! Regardless of your age, sport, skill level or training goals, we can help you reach the Next Level!</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.trainatnextlevel.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-nextlevel.jpg') }}" alt="Next Level Strength and Conditioning"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.eyelinegolf.com/" target="_blank">Eyeline Golf</a></h3>
			<p>Since 2002, our passion has been helping golfers unlock their potential. It is exhilarating to break your personal bests. We are very proud to be the #1 Training aid company on the Pro Tours. We actually had 247 Tour Players choose EyeLine in 2011 - PGA, LPGA, Nationwide.</p>
			<div class="visible-desktop"><a href="{{ URL::to_route('contact', array('eyeline')) }}" class="btn btn-primary">Contact Us About Eyeline Golf</a></div>
			<div class="hidden-desktop"><a href="{{ URL::to_route('contact', array('eyeline')) }}" class="btn btn-primary btn-block btn-large">Contact Us About Eyeline Golf</a></div>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.eyelinegolf.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-eyeline.png') }}" alt="Eyeline"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.golfwny.com/" target="_blank">Golf Western New York</a></h3>
			<p>Golf Western NY is your Stay &amp; Play golf concierge service focused on booking golf packages in the Rochester, NY area.</p>

			<p>It's never easy planning a golf trip in an area you aren't familiar with, so Golf Western NY here to guide you in the right direction. Their golf packages offer excellent accommodations that cater to both large and small groups. Designed to fit your budget and allow you to play some of the best golf courses in Rochester, NY, their Play &amp; Stay golf packages offer something for everyone.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.golfwny.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-golfwny.png') }}" alt="GolfWNY"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.millcreekgolf.com/" target="_blank">Mill Creek Golf Club</a></h3>
			<p>The renowned golf course design team of Raymond Hearn and Paul Albanese created this unique course by blending the natural aesthetics of the land with the risk/reward factors of a well-crafted challenge. The intent is to deliver the most memorable experience to golfers of all skill levels.</p>
			<p>Five sets of tees accommodate the novice and challenge the expert by adjusting the angle and length of the course from less than 5,000 to over 7,000 yards. Each player has a similar experience from tee to green, meshing mature trees and lush, bent grass fairways, greens and bunkers.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.millcreekgolf.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-millcreek.png') }}" alt="Mill Creek Golf Club"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.mirrortee.com" target="_blank">Mirror Tee</a></h3>
			<p>The Mirror Tee&reg; Golf Tee enables golfers of all abilities to hit the ball longer and straighter!</p>

			<ul>
				<li>The tee is 3 and 1/4 inches long &ndash; perfect for any sized driver head.</li>
				<li>Conforms to USGA Rules.</li>
				<li>Conforms to the R &amp; A rules of golf.</li>
				<li>The only golf tee to enable 17&deg; of randomly placed forward lean.</li>
				<li>Reduced ball spin off the tee = better ball flight dynamics.</li>
				<li>Increased bounce and roll.</li>
				<li>Straighter.</li>
				<li>Durable. Each tee can be hit more than 100+ times!</li>
				<li>More stable even in windy conditions.</li>
				<li>Patented and Made in America.</li>
			</ul>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.mirrortee.com" target="_blank"><img src="{{ URL::to_asset('img/logo-mirrortee.png') }}" alt="Mirror Tee"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.edbowegolf.com/amelia-island-golf-resort/" target="_blank">Amelia Island Plantation</a></h3>
			<p>The Omni Amelia Island Plantation is committed to providing its members and guests with a first class golf experience. Named a "Silver Medal Golf Resort" every year by Golf Magazine, the resort boasts incredible championship courses.</p>
			<p>Amelia Links, designed by Pete Dye and Bobby Weed, is a 36-hole configuration that includes two signature courses, Oak Marsh and Ocean Links. The natural beauty of tidal marshes, intercoastal waters, the Atlantic Ocean, and mature live oak trees that surround these courses provide stunning and breathtaking views that simultaneously amaze and challenge the novice and professional alike. Having the golf courses be Audobon International Certified Sanctuaries not only preserves the natural heritage of the game, but also the wildlife that thrives there.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.edbowegolf.com/amelia-island-golf-resort/" target="_blank"><img src="{{ URL::to_asset('img/logo-ameliaisland.png') }}" alt="Amelia Island Plantation"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3>Santa's Vision</h3>
			<p>Santa's Vision "Day out with Santa and Friends" is a way for community leaders, local businesses and people in various towns and cities to come together to support the needs of children during the Holiday season.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><img src="{{ URL::to_asset('img/logo-santasvision.png') }}" alt="Santa's Vision"></div>
	</div>
@endsection