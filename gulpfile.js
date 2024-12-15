const gulp = require('gulp');
const browserSync = require('browser-sync').create();

// Task to reload BrowserSync
gulp.task('browser-sync', function () {
  browserSync.init({
    proxy: "http://localhost/heritage-renewal", // Replace with your site URL
    notify: false,
  });
});

// Watch PHP, CSS, and JS files
gulp.task('watch', function () {
  gulp.watch("./**/*.php").on("change", browserSync.reload);
  gulp.watch("./assets/**/*.css").on("change", browserSync.reload);
  gulp.watch("./js/**/*.js").on("change", browserSync.reload);
});

// Default task
gulp.task('default', gulp.parallel('browser-sync', 'watch'));