var gulp = require('gulp');
var htmlmin = require('gulp-htmlmin');

gulp.task('minifyshare', function() {
    return gulp.src('html/*.html')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('share'))
});