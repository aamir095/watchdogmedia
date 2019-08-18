var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('sass', function () {
    return gulp.src('./assets/sass/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/'))

});

gulp.task('watch', function () {


    gulp.watch('./assets/sass/*.scss', ['sass']);

});

gulp.task('test', function () {


   console.log('testing');

});