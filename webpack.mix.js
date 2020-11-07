const mix = require( 'laravel-mix' );
const wpPot = require( 'wp-pot' );

mix
	.setPublicPath( 'public' )
	.sourceMaps( false )

	// admin assets
	.js( 'src/FacebookPixel/resources/js/admin/give-fbpt-admin.js', 'public/js/' )
	.sass( 'src/FacebookPixel/resources/css/admin/give-fbpt-admin.scss', 'public/css' )

	// public assets
	.js( 'src/FacebookPixel/resources/js/frontend/give-fbpt.js', 'public/js/' )
	.sass( 'src/FacebookPixel/resources/css/frontend/give-fbpt.scss', 'public/css' )

	// images
	.copy( 'src/FacebookPixel/resources/images/*.{jpg,jpeg,png,gif}', 'public/images' );

mix.webpackConfig( {
	externals: {
		$: 'jQuery',
		jquery: 'jQuery',
	},
} );

if ( mix.inProduction() ) {
	wpPot( {
		package: 'GIVE_FBPT',
		domain: 'GIVE_FBPT',
		destFile: 'languages/GIVE_FBPT.pot',
		relativeTo: './',
		bugReport: 'https://github.com/impress-org/give-fbpt/issues/new',
		team: 'GiveWP <info@givewp.com>',
	} );
}
