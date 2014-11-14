var gulp = require('gulp'),
    gutil    = require('gulp-util'),
    uglify  = require('gulp-uglify'),
    concat  = require('gulp-concat'),
    browserSync = require('browser-sync'),
    sass = require('gulp-ruby-sass')
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename');

// `gulp.task()` defines task that can be run calling `gulp xyz` from the command line

gulp.task('browser-sync', function() {
    browserSync({
        proxy: "localhost:8000"
    });
});

gulp.task('styles', function() {
  return gulp.src('./themes/cbc/assets/sass/theme.scss')
    .pipe(concat('theme.scss'))
    .pipe(sass({ style: 'expanded' }))
    .pipe(gulp.dest('./themes/cbc/assets/css'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(cssmin())
    .pipe(gulp.dest('./themes/cbc/assets/css'));
});

/*gulp.task('less', function () {

  return gulp.src('./themes/cbc/assets/less/theme.less')
  .pipe(concat('theme.less'))
  .pipe(less())
  //.pipe(cssmin())
  //.pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('./themes/cbc/assets/css'));
});*/

gulp.task('js', function () {
    gulp.src('./themes/cbc/assets/javascript/*.js')
        .pipe(uglify())
        .pipe(concat('all.js'))
        .pipe(gulp.dest('./themes/cbc/assets/javascript'));
});

// The `default` task gets called when no task name is provided to Gulp
gulp.task('default', ['browser-sync'], function () {

    // add browserSync.reload to the tasks array to make
    // all browsers reload after tasks are complete.
    gulp.watch('./themes/cbc/*/*.htm', browserSync.reload);
    gulp.watch('./themes/cbc/assets/javascript/*.js', ['js', browserSync.reload]);
    gulp.watch(['./themes/cbc/assets/sass/*.scss', './themes/cbc/assets/sass/*/*.scss'], ['styles', browserSync.reload]);
});
