var browserSync = require('browser-sync');
var gulp        = require('gulp');

gulp.task('browserSync', ['build'], function() {
	browserSync.init(null, {
		proxy: global.devDomain,
    open: false,
    notify: false
	});
});