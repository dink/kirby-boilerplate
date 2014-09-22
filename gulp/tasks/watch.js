var gulp = require('gulp'),
    livereload = require('gulp-livereload');

// gulp.task('watch', ['csslibs', 'browserSync'], function() {
gulp.task('watch', ['csslibs', 'build'], function() {
    gulp.watch(global.paths.scss, ['sass']);
    gulp.watch(global.paths.scripts, ['scripts']);

    livereload.listen();
    gulp.watch(['assets/css/site.css', 'assets/js/site.js']).on('change', livereload.changed);
});
