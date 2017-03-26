var gulp = require('gulp');
var browserSync = require('browser-sync');

gulp.task('default',['browser-sync'], function() {
  // place code for your default task here
    gulp.watch(['**/*.html'], browserSync.reload);
    gulp.watch(['**/*.php'], browserSync.reload);
   // gulp.watch(['css/**/*.css'], browserSync.reload);
});

gulp.task('browser-sync', function() {
    
    browserSync.init({
    proxy: "localhost/queuebot/web",
    port: 8000  
    });

    browserSync({
        server: {
            baseDir: "./localhost/queuebot/view"
        }
    });
});