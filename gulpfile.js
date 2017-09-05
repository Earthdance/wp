var gulp = require('gulp');
var stylus = require('gulp-stylus');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');

var themePath = './wp-content/themes/earthdance_17/';


// External sourcemaps
gulp.task('stylus', function () {
  return gulp.src(themePath + 'css/style.styl')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(stylus())
    .pipe(postcss([ autoprefixer(), cssnano() ]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(themePath))
    .pipe(browserSync.stream());
});

// External sourcemaps
gulp.task('stylusProd', function () {
  return gulp.src(themePath + 'css/style.styl')
    .pipe(plumber())
    .pipe(stylus())
    .pipe(postcss([ autoprefixer(), cssnano() ]))
    .pipe(gulp.dest(themePath))
    .pipe(browserSync.stream());
});

gulp.task('serve', ['stylus'], function() {
    browserSync.init({
        proxy: "earthdance.dev",
        browser: "google chrome canary"
    });
    gulp.watch(themePath + 'css/**/*.styl', ['stylus']);
    gulp.watch(themePath +'/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
