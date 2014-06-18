var browserSync = require('browser-sync');
var changed    = require('gulp-changed');
var newer      = require('gulp-newer');
var gulp       = require('gulp');
var imagemin   = require('gulp-imagemin');

// Copy all static images
gulp.task('images', function() {
 return gulp.src(global.paths.images)
    .pipe(newer('assets/images/'))
    .pipe(imagemin({optimizationLevel: 5}))
    .pipe(gulp.dest('assets/images/'));
});