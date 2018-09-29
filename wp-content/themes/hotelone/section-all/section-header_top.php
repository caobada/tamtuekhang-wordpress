<?php 
$disable_tb       = get_theme_mod( 'disable_header_tb', 0 );
$facebook_url     = get_theme_mod( 'facebook_url', '' );
$twitter_url      = get_theme_mod( 'twitter_url', '' );
$google_plus_url  = get_theme_mod( 'google_plus_url', '' );
$social_target    = get_theme_mod( 'social_target', 0 );
$phone            = get_theme_mod( 'phone', '' );
$email            = get_theme_mod( 'email', '' );
$header_contained            = get_theme_mod( 'hotelone_header_width', 'contained' );
$header_container = 'container-fluid';
if( $header_contained == 'contained' ){
	$header_container = 'container';
}

$header_pos = sanitize_text_field(get_theme_mod('hotelone_header_position', 'top'));
if ($header_pos == 'below_slider' ) {
	$disable_tb = true;
}
if( !$disable_tb ){
?>
<div class="header-top">
	<div class="<?php echo esc_attr( $header_container ); ?>">
		<div class="row">
			<div class="col-md-6">
				<ul class="header-social">
					<?php if( $facebook_url ){ ?>
					<li class="facebook"><a href="<?php echo esc_url( $facebook_url ); ?>" <?php if($social_target){ echo 'target="_blank"'; }?>><i class="fa fa-facebook"></i></a></li>
					<?php } ?>
					<li class="youtube"><a href="https://www.youtube.com/channel/UCXWpTHjH-peVZkAylsvguzw" target="_blank";><i class="fa fa-youtube"></i></a></li>
					<li class="google-plus"><a href="mailto:tamtuekhang@gmail.com target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<?php if( $twitter_url ){ ?>
					<li class="twitter"><a href="<?php echo esc_url( $twitter_url ); ?>" <?php if($social_target){ echo 'target="_blank"'; }?>><i class="fa fa-twitter"></i></a></li>
					
					<?php } ?>
					<?php if( $google_plus_url ){ ?>
					<li class="google-plus"><a href="<?php echo esc_url( $google_plus_url ); ?>" <?php if($social_target){ echo 'target="_blank"'; }?>><i class="fa fa-google-plus"></i></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="header-info pull-right">
				<li class="cart-top"><a href="<?php echo WC()->cart->get_cart_url(); ?>"><i class="fa fa-shopping-cart"></i><?php echo sprintf (_n( '(%d)', '(%d)', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></a></li>|
					<?php if( $phone ){ ?>
					<li><i class="fa fa-phone"></i> <?php echo esc_html( $phone ); ?></li>
					<?php } ?>|
					<?php if( $email ){ ?>
					<li><i class="fa fa-envelope"></i> <?php echo esc_html( $email ); ?></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div><!-- .container -->
</div><!-- .header-top -->
<?php } ?>