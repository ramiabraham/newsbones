<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<?php $newsbones_favicon = get_option('newsbones_favicon'); ?>
		<link rel="icon" href="<?php echo $newsbones_favicon; ?>">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">
	
				<div id="inner-header" class="wrap clearfix">

						
					<div class="newsbones-header">
					
					
					
						<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
								
							<p><?php bloginfo('description'); ?></p>
									

										
										
										<div class="newsbones-header-meta">

											
												<div class="newsbones-header-date">
													<div class="genericon genericon-book"></div> Volume: <?php $newsbones_numerals = 																	date('Y');
 
											    /*** echo the roman numeral for the year ***/
											    echo romanNumerals($newsbones_numerals); ?>
													, &#8470; <?php $count = wp_count_posts('post'); printf($count->publish); ?>. | <div class="genericon genericon-month"></div> Edition: <?php echo date('l jS \of F Y'); ?>.
													
													<!-- News Bones Social Options -->
													
						<?php $newsbones_social_twitter_checkbox = get_option('newsbones_social_twitter_checkbox');
								$newsbones_social_github_checkbox = get_option('newsbones_social_github_checkbox');
								$newsbones_social_rss_checkbox = get_option('newsbones_social_rss_checkbox');
								$newsbones_social_twitter = get_option('newsbones_social_twitter');
								$newsbones_social_github = get_option('newsbones_social_github');
								$newsbones_social_rss = get_option('newsbones_social_rss');
								
															if ($newsbones_social_twitter_checkbox == "true") {
															echo '| <a class="newsbones-twitter" href="https://twitter.com/' .  																	$newsbones_social_twitter . '">Twitter</a> ';
													 } else { echo '';
													} 
												
													if ($newsbones_social_github_checkbox == "true") {
															echo '| <a class="newsbones-github" href="https://github.com/' .  																	$newsbones_social_github . '">Github</a> ';
													 } else { echo '';
													}
												
													if ($newsbones_social_rss_checkbox == "true") {
															echo '| <a class="newsbones-rss" href="' . $newsbones_social_rss . '">Subscribe</a> ';
													 } else { echo '';
													}
													?>
												
												
												
												
												
												</div>
										</div>
									
					</div>

					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
