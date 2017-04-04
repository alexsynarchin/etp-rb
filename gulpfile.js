var gulp = require('gulp');
var less = require('gulp-less');
var b_path = "vendor/bower_components/";
gulp.task('copyfiles', function () {
    gulp.src(b_path + "bootstrap/less/**")
        .pipe(gulp.dest("resources/assets/libs/bootstrap/less"));
    gulp.src(b_path + "components-font-awesome/less/**/**")
        .pipe(gulp.dest("resources/assets/libs/font-awesome/less"));
    gulp.src(b_path + "components-font-awesome/fonts/**/**")
        .pipe(gulp.dest("public/assets/site/fonts/font-awesome"))
});
gulp.task ('site-less', function() {
    gulp.src('resources/assets/site/less/styles.less')
        .pipe(less())
        .pipe(gulp.dest('public/assets/site/css/'));
});
gulp.task('site-watch', function(){
    gulp.watch('resources/assets/site/less/**/**',['site-less']);
});
//dashboard
gulp.task('dashboard-less', function() {
    gulp.src('resources/assets/dashboard/less/styles.less')
        .pipe(less())
        .pipe(gulp.dest('public/assets/dashboard/css/'))
});
