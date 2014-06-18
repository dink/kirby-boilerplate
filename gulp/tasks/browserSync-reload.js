var browserSync = require('browser-sync');
var gulp        = require('gulp');

// Reload all Browsers
gulp.task('bs-reload', function () {
    browserSync.reload();
});