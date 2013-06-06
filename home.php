<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
							<div class="newsbones-homepage-biline">
							
								<?php
								// Value from Text Field
								$newsbones_biline_text_field = get_option('newsbones_newsbones_biline_text_field'); 
								$newsbones_biline_link = get_option('newsbones_biline_link_text_field');
								?>
								<a href="<?php echo $newsbones_biline_link; ?>"><h1>
				                <?php echo $newsbones_biline_text_field; ?></h1></a>
			                
			                
			                </div>
						<div id="newsbones-homegrid-container" class="tencol first clearfix" role="main">
						
						
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								

							
							<article <?php post_class('clearfix newsbones-homegrid'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<a class="home-grid-title" href="<?php the_permalink(); ?>"><h1 class="page-title"><?php the_title(); ?></h1></a><hr></hr>
									<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
													the_post_thumbnail('thumbnail');
												} ?></a> 
									<p class="byline vcard"><?php
										printf(__('Written <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link());
									?></p><p class="homepage-meta-bottom-area"></p>


								</header> <!-- end article header -->
										
										
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_excerpt(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="clearfix"></p>
								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
										</footer>
									</article>
										
							<?php endif; ?>

						</div> <!-- end #main -->


						<?php
						$newsbones_twitter_or_sidebar = get_option('newsbones_twitter_or_sidebar');
						$newsbones_social_twitter = get_option('newsbones_social_twitter');
						$newsbones_social_twitter_widget = get_option('newsbones_social_twitter_widget');
						$newsbones_social_twitter_limit = get_option('newsbones_social_twitter_limit');
						
				if ($newsbones_twitter_or_sidebar == "twitter") { ?>
				<div class="newsbones-homepage-twitter-wrapper">
					<div class="newsbones-homepage-twitter-feed">							
					<h1 class="page-title newsbones-twitter">From Twitter:</h1>
					<a class="twitter-timeline" href="https://twitter.com/<?php echo $newsbones_social_twitter; ?>" data-widget-id="<?php echo $newsbones_social_twitter_widget; ?>" data-tweet-limit="<?php echo $newsbones_social_twitter_limit; ?>" data-theme="light" data-link-color="#000" data-chrome="nofooter noborders noheader noscrollbar transparent" width="100%">From Twitter:</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					
					</div>
				</div> 
					<?php } else { get_sidebar();
					} ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
