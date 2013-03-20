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
			<h3><a href="http://hankhaneygolf.com/Index.aspx" target="_blank">Hank Haney Golf</a></h3>
			<p>Hank Haney Pro is a self-paced golf instruction certification program designed by Hank Haney to provide golfers around the world the tools, training, and support necessary to become the best instructor they can be, by partnering and adopting with the Hank Haney method and brand.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://hankhaneygolf.com/Index.aspx" target="_blank"><img src="{{ URL::to_asset('img/logo-hankhaney.png') }}" alt="Hank Haney Golf"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.powertrainsports.com/" target="_blank">Power Train Sports Institute</a></h3>
			<p>Power Train Sports Institute believes that in order to truly understand what an athlete needs, you must first be an athlete. Their performance team is made up of national and world-class athletes. Their commitment to sports and experience as athletes brings a positive approach to performance enhancement training. Power Train coaches utilize their experience as athletes and education as coaches to enhance the performance of each client. With respect as a coach and the acknowledgement as an athlete our program creates the optimal environment for success. Power Train Sports Institute is the players place to train and the athletes place to succeed.  Athletes demand quality, they want results and will do whatever is takes to reach the next level. Through education, commitment, and discipline, Power Train Sports Institute provides the environment for athletes to achieve their goals and full potential.  Our programs are specific to the individual athlete and their particular sport.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.powertrainsports.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-powertrain.png') }}" alt="Power Train Sports Institute"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.advocare.com/" target="_blank">Advocare</a></h3>
			<p>AdvoCare is a premier health and wellness company offering world-class energy, weight-loss, nutrition, and sports performance products along with a rewarding business opportunity.</p>
			<p>AdvoCare empowers individuals to explore their ultimate potential. When people try the products, the positive testimonials pour in: "I feel better than I have in years." "My energy level is unbelievable." "AdvoCare has changed my life." AdvoCare focuses on wellness and provides an opportunity to enrich your life in the way that you choose.</p>
			<div class="visible-desktop"><a href="{{ URL::to_route('contact', array('advocare')) }}" class="btn btn-primary">Contact Us About AdvoCare</a></div>
			<div class="hidden-desktop"><a href="{{ URL::to_route('contact', array('advocare')) }}" class="btn btn-primary btn-block btn-large">Contact Us About AdvoCare</a></div>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.advocare.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-advocare.png') }}" alt="Advocare"></a></div>
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
			<h3><a href="http://www.puregrips.com/" target="_blank">PURE Grips</a></h3>
			<p>As passionate golfers we're always trying to improve our game. That's why the founders of PURE Grips came together in the first place - to give all golfers one more way to find an edge. Our consistently tacky, all-weather line of grips are the first to combine everything golfers and pro shops want in a grip: superior feel and comfort, exceptional durability and easy installation, all at a great value.</p>

			<p>We know smart change can make a big difference in the quality and consistency of our shots. A better grip is one of those smart changes. We're glad to be able to help our fellow golfers hit more of the pure shots we all love.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.puregrips.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-puregrips.png') }}" alt="PURE Grips"></a></div>
	</div>

	<hr>

	<!--<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://rochester.golflocal.com/golf-rochester-ny/" target="_blank">Golf Local</a></h3>
			<p>GolfLocal.com is 100% dedicated to all aspects of golf and is strictly designed to promote, inform and educate individuals about the game of golf. Their focus is to be the one place golfers go to find information about the game they love. They provide information about local golf courses, tournaments, events and offer Stay-N-Play packages for golfers looking to come to the Rochester, NY area to play golf.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://rochester.golflocal.com/golf-rochester-ny/" target="_blank"><img src="{{ URL::to_asset('img/logo-golflocal.png') }}" alt="Golf Local"></a></div>
	</div>

	<hr>-->

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
			<h3><a href="http://uschedule.com" target="_blank">USchedule</a></h3>
			<p>At its core, USchedule is a web based scheduling system for you to more efficiently manage your calendar and allow your clients to book appointments via the web 24/7. When your clients schedule an appointment, they automatically receive an email confirmation as well as email and text message reminders, drastically reducing or eliminating no-shows altogether. By having your availability online, you will get more client bookings and phone tag will become a thing of the past.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://uschedule.com" target="_blank"><img src="{{ URL::to_asset('img/logo-uschedule.png') }}" alt="USchedule"></a></div>
	</div>

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://www.holidayinn.com/hotels/us/en/reservation" target="_blank">Holiday Inn &amp; Suites</a></h3>
			<p>Come and stay at the Holiday Inn Hotel &amp; Suites Rochester - Marketplace near the Rochester Airport. Our Rochester, NY hotel provides a complimentary hot breakfast buffet with Chef Attend Omelet Station daily and complimentary dinner and drinks at Manager Reception Monday-Thursday and free shuttle to take you to and from the airport for your traveling convenience.</p>
			<p>Families looking for lodging in Rochester, New York will love staying at our hotel, located just off Interstate 390 in southern Rochester. This hotel is convenient to numerous local attractions, including the Strong National Museum of Play, the Marketplace Mall, Seabreeze Amusement Park, Frontier Field and beautiful Lake Ontario.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://www.holidayinn.com/hotels/us/en/reservation" target="_blank"><img src="{{ URL::to_asset('img/logo-holidayinn.png') }}" alt="Holiday Inn and Suites"></a></div>
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

	<!--<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="https://www.playerstowel.com/" target="_blank">Players Towel</a></h3>
			<p>The Players Towel was once reserved for only the Players and Caddies on tour and is currently used on all major golf tours. The Players Towel is made of a unique Microfiber technology providing the best absorption and cleaning characteristics available. What started as a golf towel has quickly evolved into a sports towel for all athletes!</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="https://www.playerstowel.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-playerstowel.png') }}" alt="Players Towel"></a></div>
	</div>-->

	<!--<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://teambscott.com/" target="_blank">Team BScott</a></h3>
			<p>Team BScott, is a movement for anyone who understands the substance of being passionate about what they work for. It is the thought that you do not have to do extraordinary things, but always aim to do things extraordinarily well.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://teambscott.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-teambscott.png') }}" alt="Team BScott"></a></div>
	</div>-->

	<hr>

	<div class="row-fluid">
		<div class="span8">
			<h3><a href="http://sectionvathlete.com/" target="_blank">Section V Athlete</a></h3>
			<p>Do you have questions about the recruiting process? Concerns about your grades, financial aid or which test you should be taking? Whether you're a freshman just getting started or a senior worried about the next step SectionVAthlete.com is here to help. SectionVAthlete.com is not a recruiting site. It's actually FREE and its mission is simple: to help student-athletes become better prepared, whether it's for college or even just to become a better athlete. Find out about camps, clinics and other professional services in their directory or learn the right way to get colleges interested in you at SectionVAthlete.com.</p>
		</div>
		<div class="span4 relationship-logo hidden-phone"><a href="http://sectionvathlete.com/" target="_blank"><img src="{{ URL::to_asset('img/logo-sectionv.png') }}" alt="Section V Athlete"></a></div>
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