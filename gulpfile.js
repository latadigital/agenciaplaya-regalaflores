'use strict';

var gulp        = require('gulp'),
    useref      = require('gulp-useref'),
    gulpif      = require('gulp-if'),
    uglify      = require('gulp-uglify'),
    imagemin    = require('gulp-imagemin'),
    pngcrush    = require('imagemin-pngcrush'),
    sass        = require('gulp-sass'),
    cleanCSS    = require('gulp-clean-css'),
    sourcemaps  = require('gulp-sourcemaps');

  gulp.task('compress', function () {
      return gulp.src('*.html')
          .pipe(useref())
          .pipe(gulpif('*.js', uglify()))
          .pipe(gulp.dest('dist'));
  });

  gulp.task('images', function() {
    gulp.src('static/*.{png,jpg,jpeg,gif,svg}')
      .pipe(imagemin({
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use: [pngcrush()]
      }))
      .pipe(gulp.dest('img/html'));
  });

  gulp.task('sass', function() {
      gulp.src('scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(gulp.dest('css/'));
  });

  gulp.task('default', function () {
      gulp.watch('scss/**/*.scss',['sass']);
      gulp.watch('dist/**',['images']); 
  });
