var gulp         = require('gulp');
var concat       = require('gulp-concat');
var minifyCSS    = require('gulp-minify-css');

// Minify and copy all CSS Libs
gulp.task('csslibs', function() {
  return gulp.src(global.paths.csslibs)
    .pipe(minifyCSS())
    .pipe(concat('libs.css'))
    .pipe(gulp.dest('assets/css'));
});