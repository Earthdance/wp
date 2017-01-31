var gulp = require('gulp');
var stylus = require('gulp-stylus');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();

var themePath = './wp-content/themes/earthdance_17/';


// External sourcemaps
gulp.task('stylus', function () {
  return gulp.src(themePath + 'css/style.styl')
    .pipe(sourcemaps.init())
    .pipe(stylus())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(themePath))
    .pipe(browserSync.stream());
});

gulp.task('serve', ['stylus'], function() {
    browserSync.init({
        proxy: "earthdance.dev",
        browser: "google chrome canary"
    });
    gulp.watch(themePath + 'css/*.styl', ['stylus']);
    gulp.watch(themePath +'/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
