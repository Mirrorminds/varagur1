<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="main-head-1">
        <div class="container">
        <div class="sticky-headerdsssd">
            <audio controls="" style="
    filter: invert(75%) sepia(62%) saturate(6691%) hue-rotate(25deg) brightness(94%) contrast(93%);
">
  <source src="http://trydemo.xyz/varagur1/wp-content/uploads/2019/05/MainPageBanner.mp3" type="audio/mpeg" style="
    background: transparent;
">
Your browser does not support the audio element.
</audio>
<div class="social-media">
<ul>
     <?php echo do_shortcode('[cn-social-icon]'); ?>
  
</ul>

</div>
        </div>
        
        <div class="row content-header">
<div class="col-lg-1 col-2"><a href = "<?php echo get_bloginfo('wpurl'); ?>"><img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/twentynineteen-child/images/header-side-1.png" class="img-responsive"></a></div>
<div class="col-lg-10 col-8"><a href = "<?php echo get_bloginfo('wpurl'); ?>"><h1>Sri MahaKaliasanadhar & Sri Venkatesa Perumal Temple - Varagur</h1><p>ஸ்ரீ மஹா கைலாசநாதர் & ஸ்ரீ வேங்கடேச பெருமாள் ஆலயம்  - வரகூர் </p></a></div>
<div class="col-lg-1 col-2"><a href = "<?php echo get_bloginfo('wpurl'); ?>"><img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/twentynineteen-child/images/header-side-2.png" class="img-responsive"></a></div>
</div>
        </div>
        </div>
	</div>

	<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .layout-wrap -->

		
	<div id="content" class="site-content">
