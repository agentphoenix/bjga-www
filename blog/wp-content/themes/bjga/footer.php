			<footer class="visible-desktop">
				<?php wp_footer(); ?>

				<div class="row">
					<div class="span6">
						<div class="inner">
							<h1>Brian Jacobs Golf Academy at Mill Creek Golf Club</h1>
							
							<p>A 23-acre practice center at Mill Creek Golf Club accommodates all levels of golfers serious about their game. The bent grass driving range has over 400 yards of hitting area with six target greens and the short game practice area includes three separate greens for pitching/chipping, putting and bunker play.</p>
							
							<p>128 Cedars Avenue<br>
							Churchville, NY 14428<br>
							(585) 889-4110</p>

							<p><a href="http://maps.google.com/?q=128 Cedars Ave Churchville, NY 14428" target="_blank"><span class="map-pin"></span>View in Google Maps</a></p>
						</div>
					</div>
					
					<div class="span2">
						<h1>Archives</h1>
						
						<ul class="unstyled">
							<?php wp_get_archives();?>
						</ul>
					</div>
					<div class="span2">
						<h1>Categories</h1>
						
						<ul class="unstyled">
							<?php wp_list_categories(array(
								'title_li' => ''
							));?>
						</ul>
					</div>
					<div class="span2">
						<h1>Meta</h1>
						
						<ul class="unstyled">
							<li><a href="http://brianjacobsgolf.com">Brian Jacobs Golf</a></li>
							<li><a href="wp-admin/">Site Admin</a></li>
							<li><a href="wp-login.php?action=logout">Log Out</a></li>
							<li><a href="index.php?feed=rss2">Entries RSS</a></li>
							<li><a href="index.php?feed=comments-rss2">Comments RSS</a></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>