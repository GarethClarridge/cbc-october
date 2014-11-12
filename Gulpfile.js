var gulp = require('gulp'),
      gutil    = require('gulp-util'),
      uglify  = require('gulp-uglify'),
    concat  = require('gulp-concat'),
    browserSync = require('browser-sync'),
    less = require('gulp-less'),
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename');
 
// `gulp.task()` defines task that can be run calling `gulp xyz` from the command line

gulp.task('browser-sync', function() {
    browserSync({
        proxy: "localhost:8000"
    });
});

gulp.task('less', function () {

  return gulp.src('./themes/demo/assets/less/theme.less')
  .pipe(concat('all.less'))
  .pipe(less())
  .pipe(cssmin())
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('./themes/demo/assets/css'));
});

gulp.task('js', function () {
    gulp.src('./themes/demo/assets/javascript/*.js')
        .pipe(uglify())
        .pipe(concat('all.js'))
        .pipe(gulp.dest('./themes/demo/assets/javascript'));
});

// The `default` task gets called when no task name is provided to Gulp
gulp.task('default', ['browser-sync'], function () {

    // add browserSync.reload to the tasks array to make
    // all browsers reload after tasks are complete.
    gulp.watch("./themes/demo/assets/javascript/*.js", ['js', browserSync.reload]);
    gulp.watch(['./themes/demo/assets/less/theme.less', './themes/demo/assets/less/controls/*.less', './themes/demo/assets/less/layouts/*.less', './themes/demo/assets/less/pages/*.less', './themes/demo/assets/less/theme/*.less'], ['less', browserSync.reload]);
});
