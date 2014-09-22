var changed    = require('gulp-changed');
var newer      = require('gulp-newer');
var gulp       = require('gulp');

// Copy all static images
gulp.task('fonts', function() {
  return gulp.src(['bower_components/fontawesome/fonts/fontawesome-webfont.*'])
    .pipe(newer('assets/fonts/'))
    .pipe(gulp.dest('assets/fonts/'));
});
