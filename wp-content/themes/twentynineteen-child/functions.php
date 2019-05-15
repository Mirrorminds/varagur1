<?php
//Child Theme Functions File

add_action( 'wp_enqueue_scripts', 'enqueue_wp_child_theme' );

function enqueue_wp_child_theme() 
{
	wp_enqueue_style('parent-css', get_template_directory_uri().'/style.css' );

	wp_enqueue_style('child-css', get_stylesheet_uri());

	wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0', true );
}
 

// ChildThemWP.com Settings 

function childthemewpdotcom_register_settings() 
{ 
	register_setting( 'childthemewpdotcom_theme_options_group', 'childthemewpdotcom_setting_1', 'ctwp_callback' );
	register_setting( 'childthemewpdotcom_theme_options_group', 'childthemewpdotcom_setting_2', 'ctwp_callback' );
	register_setting( 'childthemewpdotcom_theme_options_group', 'childthemewpdotcom_setting_3', 'ctwp_callback' );
	register_setting( 'childthemewpdotcom_theme_options_group', 'childthemewpdotcom_setting_4', 'ctwp_callback' );
}
add_action( 'admin_init', 'childthemewpdotcom_register_settings' );

function childthemewpdotcom_register_options_page() 
{
	add_options_page('Child Theme Settings', 'Child Theme', 'manage_options', 'childthemewpdotcom', 'childthemewpdotcom_theme_options_page');
}
add_action('admin_menu', 'childthemewpdotcom_register_options_page');

function childthemewpdotcom_theme_options_page()
{ 
?>
<div>
	<style>
		table.childthemewpdotcom {table-layout: fixed ;  width: 100%; vertical-align:top; }
		table.childthemewpdotcom td { width:50%; vertical-align:top; padding:0px 20px; }
		#childthemewpdotcom_settings { padding:0px 20px; }
	</style> 
	<div id="childthemewpdotcom_settings">
		<h1>Child Theme Options</h1>
	</div>
	<table class="childthemewpdotcom">
		<tr>
			<td>
				<h2>Enable/Disable Footer Link</h2>
				<h4>Disable Footer Link</h4>
				<form method="post" action="options.php">
					<?php settings_fields( 'childthemewpdotcom_theme_options_group' ); ?>

					<p><label><input size="76" type="checkbox" name="childthemewpdotcom_setting_1" id="childthemewpdotcom_setting_1" <?php if((get_option('childthemewpdotcom_setting_1') == "Yes")) { echo ' checked="checked" '; } ?> value='Yes' > 
						Check To Disable The ChildThemeWP.com Link In The Footer</label></p>
					<hr>
					<h2>Style Footer Link</h2>
					<h4>Footer Link Hex Color (Default: #000000)</h4>
					<p><label><input type="text" name="childthemewpdotcom_setting_2" id="childthemewpdotcom_setting_2" value="<?php if((get_option('childthemewpdotcom_setting_2') != "")) { echo get_option('childthemewpdotcom_setting_2');  } else { echo "#000000"; } ?>" placeholder="#000000" ></label></p>
					<h4>Footer Link Alignment (Default: Center)</h4>
					<p><label><select type="text" name="childthemewpdotcom_setting_3" id="childthemewpdotcom_setting_3">
						<option selected="selected"><?php if((get_option('childthemewpdotcom_setting_3') != "")) { echo get_option('childthemewpdotcom_setting_3'); } else { echo "Center"; } ?></option>
						<option>Left</option>
						<option>Center</option>
						<option>Right</option>
						</select></label>
					</p>
					<h4>Footer Link Size</h4>
					<p><label><select type="text" name="childthemewpdotcom_setting_4" id="childthemewpdotcom_setting_4">
						<option selected="selected"><?php if((get_option('childthemewpdotcom_setting_4') != "")) { echo get_option('childthemewpdotcom_setting_4');  } else { echo "12px"; } ?></option>
						<option>9px</option>
						<option>10px</option>
						<option>11px</option>
						<option>12px</option>
						<option>13px</option>
						<option>14px</option>
						<option>15px</option>
						<option>20px</option>
						</select></label>
					</p>
					<?php submit_button(); ?>
				</form>	
			</td>
			<td>
				<h2>Information</h2>
				<h4>Report A Problem With Your Child Theme</h4>
				<p>Report a problem with your WordPress child theme on our <a href="https://childthemewp.com/report-a-problem/" target="_blank">Report a problem</a> page.</p>
				<hr>
				<h4>FREE Speed Theme Plugin</h4>
				<p>Want to make your WordPress website pages load faster? I made one of the fastest WordPrss websites in the World with this plugin! Download or demo the <a href="https://speedthemewp.com" target="_blank">Speed Theme WP Plugin</a>.</p>	
				
			</td>
		</tr>
	</table>
</div>
<?php
} 

function childthemewpdotcom_footerlink() 
{
	if((is_home()) || (is_front_page()))
	{
		if(get_option('childthemewpdotcom_setting_1') != "Yes")
		{
			$color = get_option('childthemewpdotcom_setting_2');
			$align = get_option('childthemewpdotcom_setting_3');
			$size = get_option('childthemewpdotcom_setting_4');

			if($color == ""){ $color="#000000"; }
			if($align == ""){ $align="center"; }
			if($size == ""){ $size="12px"; }

			$output = '<style>';
			$output .='
				#footerlinktochildthemewp_div, 
				#footerlinktochildthemewp_div p, 
				#footerlinktochildthemewp_div p a { font-size:'.$size.'!important; color:'.$color.'!important; text-align:'.$align.'!important; }
				';
			$output .= '</style>';
			//$output .= '<div id="footerlinktochildthemewp_div"><p id="footerlinktochildthemewp_p"><a href="https://childthemewp.com" target="_blank" id="footerlinktochildthemewp_a">ChildThemeWP.com</a></p></div>';

			echo $output;
		}
	}
	
	$extoutput = "<!-- WordPress Child Theme https://childthemewp.com --> ";
	
	echo $extoutput;
}
add_action( 'wp_footer', 'childthemewpdotcom_footerlink' );

//bootstrap 

function ad_bootstrap_enqueue() {
    wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), NULL, true );
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, NULL, 'all' );
}
add_action( 'wp_enqueue_scripts', 'ad_bootstrap_enqueue' );

//menu
function pietergoosen_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }

add_action( 'after_setup_theme', 'pietergoosen_theme_setup' );

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );
function footer_news() {
    register_sidebar(
        array (
            'name' => __( 'footer_news', 'your-theme-domain' ),
            'id' => 'footer_news',
            'description' => __( 'footer_news', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'footer_news' );
function footer_address() {
    register_sidebar(
        array (
            'name' => __( 'footer address', 'your-theme-domain' ),
            'id' => 'footer_address',
            'description' => __( 'footer_address', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'footer_address' );
function footer_email() {
    register_sidebar(
        array (
            'name' => __( 'footer Email', 'your-theme-domain' ),
            'id' => 'footer_email',
            'description' => __( 'footer_email', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'footer_email' );
function footer_number1() {
    register_sidebar(
        array (
            'name' => __( 'footer Number', 'your-theme-domain' ),
            'id' => 'footer_number1',
            'description' => __( 'footer_number1', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'footer_number1' );