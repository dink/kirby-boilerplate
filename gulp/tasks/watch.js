var gulp = require('gulp');

gulp.task('watch', ['csslibs', 'browserSync'], function() {
  gulp.watch(global.paths.scss, ['sass']);
  gulp.watch(global.paths.scripts, ['scripts']);

//  var server = livereload();
//  gulp.watch('assets/css/site.css').on('change', function(file) {
//    server.changed(file.path);
//  });
});
