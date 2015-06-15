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
					<hgroup>
						<h1><?php the_title(); ?></h1>	
					</hgroup>
				</header>
				<hr class="custom-hr"/>
				<div class="entry-content">	
				
					<?php // get post tags
						$tags = get_tags( 'post_tag', array(
															'orderby' => 'name',
															'order' => 'asc',
															'hide_empty' => 0
														));
// 						uasort($tags, ["director", "violin", "viola", "cello", "bass", "winds", "brass"]);

						// DIRECTOR
						foreach( $tags as $tag ) {
							if(isset($tag->slug) && $tag->slug == 'director') {
								$args = array(
									'post_type' => 'musician',
									'orderby' => 'name',
									'order' => 'asc',
									'tag' => 'director'
								);
							
								$query = new WP_Query( $args );

								if ( $query->have_posts() ) { 
	// 								print_r($query);
								?>
							
									<?php if ($tag->slug != 'director') { ?>
										<h2><?php echo ucwords($tag->slug); ?></h2>
									<?php } ?>
							
									<?php while ( $query->have_posts() ) : $query->the_post();
								
										global $more; 
										$more = 0;
										?>
						
										<div class="biosummary marginbottom1rem cf">
											<?php if (has_post_thumbnail()) { ?>
											<div class="left"><?php the_post_thumbnail('thumbnail'); ?></div>
											<div class="left biotext">
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											</div>
											<?php } else { ?>
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											<?php } ?>
										</div>
					
										<?php
									endwhile; // end of the loop. 
								} else { ?>
									<p>No director found.</p>
								<?php }
							}
						wp_reset_postdata();
						}

						// VIOLIN
						foreach( $tags as $tag ) {
							if(isset($tag->slug) && $tag->slug == 'violin') {
								$args = array(
									'post_type' => 'musician',
									'orderby' => 'name',
									'order' => 'asc',
									'tag' => 'violin'
								);
							
								$query = new WP_Query( $args );

								if ( $query->have_posts() ) { 
	// 								print_r($query);
								?>
							
									<?php if ($tag->slug != 'director') { ?>
										<h2><?php echo ucwords($tag->slug); ?></h2>
									<?php } ?>
							
									<?php while ( $query->have_posts() ) : $query->the_post();
								
										global $more; 
										$more = 0;
										?>
						
										<div class="biosummary marginbottom1rem cf">
											<?php if (has_post_thumbnail()) { ?>
											<div class="left"><?php the_post_thumbnail('thumbnail'); ?></div>
											<div class="left biotext">
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											</div>
											<?php } else { ?>
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											<?php } ?>
										</div>
					
										<?php
									endwhile; // end of the loop. 
								} else { ?>
									<p>No violin players found.</p>
								<?php }
							}
						wp_reset_postdata();
						}

						// VIOLA
						foreach( $tags as $tag ) {
							if(isset($tag->slug) && $tag->slug == 'viola') {
								$args = array(
									'post_type' => 'musician',
									'orderby' => 'name',
									'order' => 'asc',
									'tag' => 'viola'
								);
							
								$query = new WP_Query( $args );

								if ( $query->have_posts() ) { 
	// 								print_r($query);
								?>
							
									<?php if ($tag->slug != 'director') { ?>
										<h2><?php echo ucwords($tag->slug); ?></h2>
									<?php } ?>
							
									<?php while ( $query->have_posts() ) : $query->the_post();
								
										global $more; 
										$more = 0;
										?>
						
										<div class="biosummary marginbottom1rem cf">
											<?php if (has_post_thumbnail()) { ?>
											<div class="left"><?php the_post_thumbnail('thumbnail'); ?></div>
											<div class="left biotext">
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											</div>
											<?php } else { ?>
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											<?php } ?>
										</div>
					
										<?php
									endwhile; // end of the loop. 
								} else { ?>
									<p>No viola players found.</p>
								<?php }
							}
						wp_reset_postdata();
						}

						// CELLO
						foreach( $tags as $tag ) {
							if(isset($tag->slug) && $tag->slug == 'cello') {
								$args = array(
									'post_type' => 'musician',
									'orderby' => 'name',
									'order' => 'asc',
									'tag' => 'cello'
								);
							
								$query = new WP_Query( $args );

								if ( $query->have_posts() ) { 
	// 								print_r($query);
								?>
							
									<?php if ($tag->slug != 'director') { ?>
										<h2><?php echo ucwords($tag->slug); ?></h2>
									<?php } ?>
							
									<?php while ( $query->have_posts() ) : $query->the_post();
								
										global $more; 
										$more = 0;
										?>
						
										<div class="biosummary marginbottom1rem cf">
											<?php if (has_post_thumbnail()) { ?>
											<div class="left"><?php the_post_thumbnail('thumbnail'); ?></div>
											<div class="left biotext">
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											</div>
											<?php } else { ?>
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											<?php } ?>
										</div>
					
										<?php
									endwhile; // end of the loop. 
								} else { ?>
									<p>No cello players found.</p>
								<?php }
							}
						wp_reset_postdata();
						}
						
						// BASS
						foreach( $tags as $tag ) {
							if(isset($tag->slug) && $tag->slug == 'bass') {
								$args = array(
									'post_type' => 'musician',
									'orderby' => 'name',
									'order' => 'asc',
									'tag' => 'bass'
								);
							
								$query = new WP_Query( $args );

								if ( $query->have_posts() ) { 
	// 								print_r($query);
								?>
							
									<?php if ($tag->slug != 'director') { ?>
										<h2><?php echo ucwords($tag->slug); ?></h2>
									<?php } ?>
							
									<?php while ( $query->have_posts() ) : $query->the_post();
								
										global $more; 
										$more = 0;
										?>
						
										<div class="biosummary marginbottom1rem cf">
											<?php if (has_post_thumbnail()) { ?>
											<div class="left"><?php the_post_thumbnail('thumbnail'); ?></div>
											<div class="left biotext">
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											</div>
											<?php } else { ?>
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											<?php } ?>
										</div>
					
										<?php
									endwhile; // end of the loop. 
								} else { ?>
									<p>No bass players found.</p>
								<?php }
							}
						wp_reset_postdata();
						}
						
						// WINDS
						foreach( $tags as $tag ) {
							if(isset($tag->slug) && $tag->slug == 'winds') {
								$args = array(
									'post_type' => 'musician',
									'orderby' => 'name',
									'order' => 'asc',
									'tag' => 'winds'
								);
							
								$query = new WP_Query( $args );

								if ( $query->have_posts() ) { 
	// 								print_r($query);
								?>
							
									<?php if ($tag->slug != 'director') { ?>
										<h2><?php echo ucwords($tag->slug); ?></h2>
									<?php } ?>
							
									<?php while ( $query->have_posts() ) : $query->the_post();
								
										global $more; 
										$more = 0;
										?>
						
										<div class="biosummary marginbottom1rem cf">
											<?php if (has_post_thumbnail()) { ?>
											<div class="left"><?php the_post_thumbnail('thumbnail'); ?></div>
											<div class="left biotext">
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											</div>
											<?php } else { ?>
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											<?php } ?>
										</div>
					
										<?php
									endwhile; // end of the loop. 
								} else { ?>
									<p>No wind instrument players found.</p>
								<?php }
							}
						wp_reset_postdata();
						}
						
						// ANYTHING ELSE
						foreach( $tags as $tag ) {
							if(isset($tag->slug) && ($tag->slug != 'director' && $tag->slug != 'violin' && $tag->slug != 'viola' && $tag->slug != 'cello' && $tag->slug != 'bass' && $tag->slug != 'winds')) {
								$args = array(
									'post_type' => 'musician',
									'orderby' => 'name',
									'order' => 'asc',
									'tag' => $tag->slug
								);
							
								$query = new WP_Query( $args );

								if ( $query->have_posts() ) { 
	// 								print_r($query);
								?>
							
									<?php if ($tag->slug != 'director') { ?>
										<h2><?php echo ucwords($tag->slug); ?></h2>
									<?php } ?>
							
									<?php while ( $query->have_posts() ) : $query->the_post();
								
										global $more; 
										$more = 0;
										?>
						
										<div class="biosummary marginbottom1rem cf">
											<?php if (has_post_thumbnail()) { ?>
											<div class="left"><?php the_post_thumbnail('thumbnail'); ?></div>
											<div class="left biotext">
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											</div>
											<?php } else { ?>
												<p class="nomarginbottom"><strong><?php the_title(); ?></strong></p>
												<?php the_content('Read more &raquo;'); ?>
											<?php } ?>
										</div>
					
										<?php
									endwhile; // end of the loop. 
								} else { ?>
									<p>No cello players found.</p>
								<?php }
							}
						wp_reset_postdata();
						}
						
					?>
				
					<?php the_content(); ?>

				</div>
				
				<footer class="entry-meta">		
					<hr/>
				</footer>
		
			</article>

		</div><!-- #content -->
	</div><!-- #primary -->
</div> <!-- .col-md-<?php echo $aadya_col;?> .content -->	

<?php get_footer(); ?>
