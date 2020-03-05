var elixir =require('laravel-elixir');

elixir.config.sourcemaps = false;

var gulp = require('gulp');

elixir(function(mix){
	// compile sass to css
	mix.sass('resources/assets/sass/app.scss','resources/assets/css');
	mix.styles(
			[
			'resources/assets/css/app.css',
			'node_modules/slick-carousel/slick/slick.css'
			],'public/css/all.css'//creates a folder with a css file with the content specified by us
		
		);
	mix.scripts(
		[
		//jquery dependancy
		'node_modules/jquery/dist/jquery.mim.js',
		// foundation js
		'node_modules/foundation-sites/dist/foundation.min.js',
		'node-modules/slick-carousel/slick/slick.min.js'
		],'public/js/all.js','resources/assets'
		);
})