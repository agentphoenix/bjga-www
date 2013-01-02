<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form role="search" method="get" id="searchform" class="form-search" action="<?php echo esc_url( home_url( '/' ) );?>">
		<div class="controls">
			<div class="input-append">
				<input type="text" value="<?php echo get_search_query();?>" name="s" id="s" class="span8 search-query" placeholder="Search">
				<button type="submit" id="searchsubmit" class="btn"><?php echo esc_attr__('Search');?></button>
			</div>
		</div>
	</form>
