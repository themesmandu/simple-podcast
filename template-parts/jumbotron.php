<?php
/**
 * Template part for displaying head banner in front-page.php
 *
 * @link https://getbootstrap.com/docs/4.3/components/jumbotron/
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Postmandu
 */

$heading    = get_theme_mod( 'banner_title' );
$subheading = get_theme_mod( 'banner_subtitle' );
$btn_link   = get_theme_mod( 'banner_button_link' );
$btn_label  = get_theme_mod( 'banner_button_label' );
$bg_img     = get_theme_mod( 'banner_bg_image' );

if ( ! empty( $bg_img ) ) {
	$img_url = wp_get_attachment_url( $bg_img );
}

if ( empty( $heading ) && empty( $subheading ) && empty( $bg_img ) && empty( $btn_label ) ) {
	return;
}
?>

<section class="header-banner">
	<div class="container">
		<div class="banner-content">
			<h1 class="banner-heading">
				<?php echo esc_html( $heading ); ?>
			</h1>

			<h4 class="banner-sub-heading">
				<?php echo esc_html( $subheading ); ?>
			</h4>

			<?php if ( ! empty( $btn_label ) ) { ?>
			<a href="<?php echo esc_url( $btn_link ); ?>" class="btn-postmandu btn-podcast">
				<?php echo esc_html( $btn_label ); ?>
			</a>
			<?php } ?>
		</div>
	</div>
</section>