<?php defined( 'ABSPATH' ) or exit; ?>

<strong>
	<?php _e( 'Activation Error:', 'GIVE_FBPT' ); ?>
</strong>
<?php _e( 'You must have', 'GIVE_FBPT' ); ?> <a href="https://givewp.com" target="_blank">Give</a>
<?php _e( 'version', 'GIVE_FBPT' ); ?> <?php echo GIVE_VERSION; ?>+
<?php printf( esc_html__( 'for the %1$s add-on to activate', 'GIVE_FBPT' ), GIVE_FBPT_NAME ); ?>.

