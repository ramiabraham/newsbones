<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){

//Theme Shortname
$shortname = "newsbones";
$themename = "newsbones";

//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');


//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Select a page:"); 


//Access the WordPress Categories via an Array
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Select a category:");






/*-----------------------------------------------------------------------------------*/
/* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall




/* Option Page 1 - All Options */	
$options[] = array( "name" => __('Homepage and Header','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('Hi There!','framework_localize'),
			"desc" => "",
			"id" => $shortname."_admin_callout",
			"std" => "Please take a moment to setup the News Bones options. It should just take a moment.",
			"type" => "info");
			
			
$options[] = array( "name" => __('Huge homepage bi-line header','framework_localize'),
			"desc" => "Add your own homepage bi-line text.",
			"id" => $shortname."_newsbones_biline_text_field",
			"std" => "REMEMBER TO CUSTOMIZE THIS HEADER AREA",
			"type" => "text");
			
$options[] = array( "name" => __('Bi-line header link','framework_localize'),
			"desc" => "Add a link for the huge bi-line, if you like.",
			"id" => $shortname."_biline_link_text_field",
			"std" => "http://your-link-here.com",
			"type" => "text");

//start social top header area options		

//show twitter icon
$options[] = array( "name" => __('Show twitter icon?<br />','framework_localize'),
			"desc" => __('Default: Yes (checked)','framework_localize'),
			"id" => $shortname."_social_twitter_checkbox",
			"std" => "true",
			"type" => "checkbox");

//twitter username
$options[] = array( "name" => __('Your twitter username. <em>Just</em> the username, no @ symbol or anything else please.','framework_localize'),
			"desc" => "Add your twitter user name, like JoeSchmoe, not @JoeSchmoe",
			"id" => $shortname."_social_twitter",
			"std" => "ramiabraham",
			"type" => "text");

//show github icon
$options[] = array( "name" => __('Show github icon?<br />','framework_localize'),
			"desc" => __('Default: Yes (checked)','framework_localize'),
			"id" => $shortname."_social_github_checkbox",
			"std" => "true",
			"type" => "checkbox");

//github username
$options[] = array( "name" => __('Your github username. <em>Just</em> the username.','framework_localize'),
			"desc" => "Add your github.com user name, or leave blank.",
			"id" => $shortname."_social_github",
			"std" => "ramiabraham",
			"type" => "text");

//show rss icon
$options[] = array( "name" => __('Show RSS feed icon?<br />','framework_localize'),
			"desc" => __('Default: Yes (checked)','framework_localize'),
			"id" => $shortname."_social_rss_checkbox",
			"std" => "true",
			"type" => "checkbox");

//rss url
$options[] = array( "name" => __('Your custom RSS feed. Please include the full url.<br />Default is your WordPress feed:','framework_localize'),
			"desc" => "Add your RSS feed here.",
			"id" => $shortname."_social_rss",
			"std" => get_bloginfo('url') . "/feed",
			"type" => "text");



//twitter homepage feed options

$options[] = array( "name" => __('Would you like a twitter feed or a sidebar on the homepage?','framework_localize'),
			"desc" => __('Please make a selection.','framework_localize'),
			"id" => $shortname."_twitter_or_sidebar",
			"std" => "1",
			"type" => "select",
			"options" => array(
				'Twitter feed' => 'twitter',
				'A widgetized sidebar' => 'sidebar',
				));
		
//twitter widget id
$options[] = array( "name" => __('Your twitter widget ID. Twitter recently changed how widgets appear, so users now have to make a widget at your twitter settings page. <br /><a href="https://twitter.com/settings/widgets" target="_blank">Click here to create your widget</a>.<br /><br />Once you\'re finished, copy the widget ID and paste it below:','framework_localize'),
			"desc" => "Add your twitter widget ID here",
			"id" => $shortname."_social_twitter_widget",
			"std" => "258045120518168576",
			"type" => "text");

//twitter homepage feed limit
$options[] = array( "name" => __('How many tweets would you like to show on the homepage?','framework_localize'),
			"desc" => __('Pick a number from 1 to 20. Maximum set by Twitter.', 'framework_localize'),
			"id" => $shortname."_social_twitter_limit",
			"std" => "3",
			"type" => "select",
			"options" => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'5' => '5',
				'6' => '6',
				'7' => '7',
				'8' => '8',
				'9' => '9',
				'10' => '10',
				'11' => '11',
				'12' => '12',
				'13' => '13',
				'14' => '14',
				'15' => '15',
				'16' => '16',
				'17' => '17',
				'18' => '18',
				'19' => '19',
				'20' => '20',
			));

//end social top header area options

//Exclude categories from homepage option
			

			
			
$options[] = array( "name" => __('Exclude some categories from the homepage?','framework_localize'),
			"desc" => __('Select the post categories, if any, that you would like excluded from the homepage.','framework_localize'),
			"id" => $shortname."_sample_wp_category",
			"std" => "1",
			"type" => "select",
			"options" => $tt_categories);
			
//End of page one	
			

/* Option Page 2 - favicon and footer stuff */
$options[] = array( "name" => __('Favicon, Footer, &amp; more','framework_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('Favicon','framework_localize'),
			"desc" => __('Upload a 16px x 16px image that will represent your website\'s favicon.<br /><br /><em>To ensure cross-browser compatibility, we recommend converting the favicon into .ico format before uploading. (<a href="http://www.favicon.cc/">www.favicon.cc</a>)</em>','framework_localize'),
			"id" => $shortname."_favicon",
			"std" => "",
			"type" => "upload");
			
									   
$options[] = array( "name" => __('Tracking Code','framework_localize'),
			"desc" => __('Paste Google Analytics (or other) tracking code here.','framework_localize'),
			"id" => $shortname."_tracking_code",
			"std" => "",
			"type" => "textarea");



/* Option Page 3 - SEO Message */


$options[] = array( "name" => __('SEO','framework_localize'),
			"type" => "heading");				

$options[] = array( "name" => __('Hi There!','framework_localize'),
			"desc" => "",
			"id" => $shortname."_seo_callout",
			"std" => "If you're really serious about SEO for this site, use a plugin instead - something that's <em>made</em> for SEO. We recommend using <a href='http://wordpress.org/extend/plugins/wordpress-seo/' target='_blank'>WordPress SEO by Yoast</a> (free)",
			"type" => "info");					
					


/* Option Page 4 - Shortcodes documentation */


$options[] = array( "name" => __('News Bones Shortcodes','framework_localize'),
			"type" => "heading");
			
$options[] = array( "name" => __('There are no shortcodes bundled with this theme. Why?','framework_localize'),
			"desc" => "",
			"id" => $shortname."_shortcodes_docs",
			"std" => "Because one day you might want to switch to a different theme. Learn more.",
			"type" => "info");					



update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>
