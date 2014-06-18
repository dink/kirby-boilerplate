var gulp = require('gulp');

gulp.task('watch', ['setWatch', 'browserSync'], function() {
  // copy css files to location, that gets commited
  gulp.src(global.paths.css)
      .pipe(gulp.dest('./assets/css'));

  gulp.watch(global.paths.scss, ['sass']);
  gulp.watch(global.paths.images, ['images', 'bs-reload']);
  // Note: The browserify task handles js recompiling with watchify

//  var server = livereload();
//  gulp.watch('assets/css/site.css').on('change', function(file) {
//    server.changed(file.path);
//  });
});
