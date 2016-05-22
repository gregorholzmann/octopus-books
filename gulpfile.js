'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("style.scss")
        .pipe(sass())
        .pipe(gulp.dest(""));
});


gulp.task('default', ['sass']);
