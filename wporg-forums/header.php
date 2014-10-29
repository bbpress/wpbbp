<?php
/**
 * The Header for our theme.
 *
 * @package WPBBP
 */
$GLOBALS['pagetitle'] = wp_title( '&laquo;', false, 'right' ) . ' ' . get_bloginfo( 'name' );
require WPORGPATH . 'header.php';
?>

<div id="headline">
	<div class="wrapper">
		<h2><a href="http://wordpress.org/support/">Forums</a></h2>
		<p class="login">
			<?php if ( is_user_logged_in() ) : ?>
				<?php echo sprintf( esc_html__( 'Welcome, %s', 'wporg' ), bbp_get_current_user_name() ); ?>
				<a href="<?php bbp_user_profile_url( bbp_get_current_user_id() ); ?>">View your profile</a>

				<small>(
				<?php if ( bbp_is_user_keymaster() ) : ?>
					<a href="<?php echo esc_url( admin_url() ); ?>"><?php esc_html_e( 'Admin', 'wporg' ); ?></a> |
				<?php endif; ?>
					<a href="<?php bbp_logout_url(); ?>"><?php esc_html_e( 'Sign Out', 'wporg' ); ?></a>
				)</small><br>
			<?php else : ?>
				
			<?php endif; ?>
		</p>
	</div>
</div>
