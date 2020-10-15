const mix = require( 'laravel-mix' );
const wpPot = require( 'wp-pot' );

mix
	.setPublicPath( 'public' )
	.sourceMaps( false )

	// admin assets
	.js( 'src/Domain/resources/js/admin/give-fbpt-admin.js', 'public/js/' )
	.sass( 'src/Domain/resources/css/admin/give-fbpt-admin.scss', 'public/css' )

	// public assetsç
	.js( 'src/Domain/resources/js/frontend/give-fbpt.js', 'public/js/' )
	.sass( 'src/Domain/resources/css/frontend/give-fbpt-frontend.scss', 'public/css' );

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
