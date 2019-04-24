const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const connect = require('gulp-connect-php');

//compile scss in into css
function style(){
    //1. where is my scss file 
    return gulp.src('Website/assets/css-import/all.scss')
    //2. pass that file through sass compiler
    .pipe(sass())
    //3. where do i save the compiled css
    .pipe(gulp.dest('Website/assets/css-import/'))
    //4. stream changes to all browser
    .pipe(browserSync.stream());
}

//gulp watch function checks for changes in one of this files
function watch(){
    browserSync.init({
        proxy: "http://localhost/Ouderavond/Website/",
        notify: false
    });

    gulp.watch('Website/assets/scss/**/*.scss', style);
    gulp.watch('Website/*.php').on('change', browserSync.reload);
    gulp.watch('Website/assets/include/*.php').on('change', browserSync.reload);
    gulp.watch('Website/assets/db/*.php').on('change', browserSync.reload);
    gulp.watch('Website/assets/db/Controllers/*.php').on('change', browserSync.reload);
    gulp.watch('Website/assets/db/testing/*.php').on('change', browserSync.reload);
    gulp.watch('Website/assets/js/*.js').on('change', browserSync.reload);


}

//execute this commands in terminal

//gulp style 

//gulp watch (this is beter)
exports.style = style;
exports.watch = watch;