<?php 
$header_contained            = get_theme_mod( 'hotelone_header_width', 'contained' );
$header_container = 'container-fluid';
if( $header_contained == 'contained' ){
	$header_container = 'container';
}

$sticky_header_class = 'nav_sticky';
$sticky_header = get_theme_mod( 'hotelone_sticky_header_disable', 0 );
if( $sticky_header ){
	$sticky_header_class = '';
}

$vertical_logo_class = '';
$vertical_nav_class = '';
$vertical_logo = get_theme_mod( 'hotelone_vertical_align_menu', 0 );
if( $vertical_logo ){
	$vertical_logo_class = 'logo_centered text-center';
	$vertical_nav_class = 'menu_centered';
}

$header_scroll_logo_class = ' ';
$header_scroll_logo = get_theme_mod( 'hotelone_header_scroll_logo', 0 );
if( $header_scroll_logo ){
	$header_scroll_logo_class = ' header_scroll_logo';
}
?>
<div class="nav-spacer"></div>
<nav class="navbar navbar-default hotelone_nav <?php  echo esc_attr( $sticky_header_class ); ?>">
	<div class="<?php echo esc_attr( $header_container ); ?>">
		<div class="navbar-header <?php echo esc_attr( $vertical_logo_class . $header_scroll_logo_class ); ?>">
			<?php 
			// hotelone theme logo
			hotelone_logo();
			?>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only"><?php esc_html_e('Toggle navigation','hotelone'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse <?php echo esc_attr( $vertical_nav_class ); ?>" id="bs-example-navbar-collapse-1">
			<?php 
				wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class' => 'nav navbar-nav navbar-right',
				'fallback_cb' => 'Hotelone_bootstrap_navwalker::fallback',
				'walker' => new Hotelone_bootstrap_navwalker())
				); 
			?>
		</div><!--.navbar-collapse -->
	</div><!-- .container-fluid -->
</nav><!-- menu -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-bottom: 15px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/WebAnhThi/TamTueKhang/wp-content/uploads/2018/09/COVER_AVATAR2.png" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/WebAnhThi/TamTueKhang/wp-content/uploads/2018/09/COVER_AVATAR2.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="clearfix"></div>