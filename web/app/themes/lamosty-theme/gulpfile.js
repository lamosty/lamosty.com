var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var minifyCSS = require('gulp-minify-css');

var assetsPath = './assets';
var destPath = './';

gulp.task('sass', function () {
    gulp.src(assetsPath + '/sass/**/*.scss')
        .pipe(watch(assetsPath + '/sass/**/*.scss', function(files) {
            return files
                .pipe(sass())
                .pipe(minifyCSS({keepBreaks:true}))
                .pipe(gulp.dest(destPath));
        }))
        .pipe(sass())
        .pipe(minifyCSS({keepBreaks:true}))
        .pipe(gulp.dest(destPath));
});
