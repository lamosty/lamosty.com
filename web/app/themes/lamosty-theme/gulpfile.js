var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');

var assetsPath = './assets';
var destPath = './';

function onWatchError(err) {
    console.log(err);
    this.emit('end');
}

gulp.task('sass', function () {
    return gulp.src(assetsPath + '/sass/**/*.scss')
        .pipe(plumber({
            errorHandler: onWatchError
        }))
        .pipe(sass())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
        .pipe(minifyCSS({keepBreaks: true}))
        .pipe(gulp.dest(destPath));
});

gulp.task('watch', function () {
    gulp.watch(assetsPath + '/sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);
