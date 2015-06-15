<?php
/*
 * Template Name: Musicians Page Template
 * Description: Loops through all musicians, shows image and excerpt with 'read more' 
 * 				link to single page, and sorts musicians by instrument (tag).
 */
 
get_header(); ?>
<?php 
	$aadya_col =  aadya_get_content_cols(); 
	$aadya_col = 12; //we have to override this to achieve the 2 column effect
?>	

<div class="col-md-<?php echo $aadya_col;?>" role="content">
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<nav>
						<h4><a href="/musicians">Meet The Orchestra</a></h4>
					</nav>
					<hgroup>
						<h1 class="nomargintop"><?php the_title(); ?></h1>
					</hgroup>
				</header>
				<hr class="custom-hr"/>
				<div class="entry-content">	
									
					<?php if (has_post_thumbnail()) { ?>
					<div class="biosummary cf">
						<div class="left"><?php the_post_thumbnail('medium'); ?></div>
						<div class="left biotext wideimg"><?php echo apply_filters('the_content', $post->post_content); ?></div>
					</div>
					<?php } else { ?>
						<?php echo apply_filters('the_content', $post->post_content); ?>
					<?php } ?>
					
				</div>
				
				<footer class="entry-meta">		
					<hr/>
				</footer>
		
			</article>

		</div><!-- #content -->
	</div><!-- #primary -->
</div> <!-- .col-md-<?php echo $aadya_col;?> .content -->	

<?php get_footer(); ?>
