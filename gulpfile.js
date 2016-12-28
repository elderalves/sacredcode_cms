var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync').create();

gulp.task('connect-sync', function(){

  browserSync.init({
    proxy: 'http://localhost/mtc/mtc-php/mic_modern_php/public/'
  });


  gulp.watch('**/*.php').on('change', function(){
    browserSync.reload();
  });
});
