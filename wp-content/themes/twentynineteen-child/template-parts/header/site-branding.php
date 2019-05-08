<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
?>			<span class="sr-only">(current)</span>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->
      
    </ul>
    
  </div>
</nav>
	
</div><!-- .site-branding -->
