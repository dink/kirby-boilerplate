var gulp   = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

/* Bundle javascripty things. */
gulp.task('scripts', function() {
  return gulp.src(global.paths.scripts)
    .pipe(uglify())
    .pipe(concat('site.js'))
    .pipe(gulp.dest('assets/js'));
});