var browserSync  = require('browser-sync');
var gulp         = require('gulp');
var sass         = require('gulp-ruby-sass');
var notify       = require('gulp-notify');
var plumber = require('gulp-plumber');

gulp.task('sass', function () {
  return gulp.src(global.paths.scss)
      .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
      .pipe(sass())
      .pipe(gulp.dest('./assets/css'))
      .pipe(browserSync.reload({stream:true}));
});