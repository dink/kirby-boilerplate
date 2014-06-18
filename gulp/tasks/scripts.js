/* browserify task
   ---------------
   Bundle javascripty things with browserify!

   If the watch task is running, this uses watchify instead
   of browserify for faster bundling using caching.
*/

var browserify   = require('browserify');
var watchify     = require('watchify');
var bundleLogger = require('../util/bundleLogger');
var gulp         = require('gulp');
var source       = require('vinyl-source-stream');
var notify       = require('gulp-notify');
var plumber = require('gulp-plumber');

gulp.task('scripts', function() {

	var bundleMethod = global.isWatching ? watchify : browserify;

	var bundler = bundleMethod({
		// Specify the entry point of your app
		entries: ['./assets/js/src/site.js'],
		// Add file extentions to make optional in your requires
		extensions: ['.coffee', '.hbs']
	});

	var bundle = function() {
		// Log when bundling starts
		bundleLogger.start();

		return bundler
			// Enable source maps!
			// .bundle({debug: true})
			.bundle()
			// Report compile errors
			.pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
			// Use vinyl-source-stream to make the
			// stream gulp compatible. Specifiy the
			// desired output filename here.
			.pipe(source('site.js'))
			// Specify the output destination
			.pipe(gulp.dest('./assets/js/'))
			// Log when bundling completes!
			.on('end', bundleLogger.end);
	};

	if(global.isWatching) {
		// Rebundle with watchify on changes.
		bundler.on('update', bundle);
	}

	return bundle();
});
