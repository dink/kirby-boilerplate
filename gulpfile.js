var gulp = require('gulp');

var sass = require('gulp-ruby-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var livereload = require('gulp-livereload');
var imagemin = require('gulp-imagemin');
var changed = require('gulp-changed');
var newer = require('gulp-newer');
var cached = require('gulp-cached');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');

var paths = {
  scss: 'assets/css/src/*.scss',
  scripts: ['bower_components/mg-*/*.js', 'assets/js/src/*.js', '!assets/js/all.min.js'],
  images: 'assets/images/src/**/*',
  css: ['bower_components/leaflet/dist/leaflet.css', 'bower_components/Leaflet.awesome-markers/dist/leaflet.awesome-markers.css']
};

gulp.task('sass', function () {
  return gulp.src(paths.scss)
      .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
      .pipe(sass())
      .pipe(gulp.dest('./assets/css'));
});


gulp.task('scripts', function() {
  // Minify and copy all JavaScript (except vendor scripts)
  return gulp.src(paths.scripts)
    //.pipe(uglify())
    .pipe(concat('all.min.js'))
    .pipe(gulp.dest('assets/js'));
});

// Copy all static images
gulp.task('images', function() {
 return gulp.src(paths.images)
    .pipe(newer('assets/images/'))
    .pipe(imagemin({optimizationLevel: 5}))
    .pipe(gulp.dest('assets/images/'));
});


// Rerun the task when a file changes
gulp.task('watch', function() {
  gulp.run('sass');
  gulp.run('scripts');
  gulp.run('images');

  // copy css files to location, that gets commited
  gulp.src(paths.css)
      .pipe(gulp.dest('./assets/css'));

  gulp.watch(paths.scss, ['sass']);
  gulp.watch(paths.scripts, ['scripts']);
  gulp.watch(paths.images, ['images']);

  var server = livereload();
  gulp.watch('assets/css/site.css').on('change', function(file) {
    server.changed(file.path);
  });
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['watch']);