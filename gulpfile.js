var gulp = require('gulp'),  
        sass = require('gulp-ruby-sass'),
        notify = require("gulp-notify"),
        bower = require('gulp-bower');

var config = {
    sassPath: './resources/sass',
    bowerDir: './bower_components' 
}

gulp.task('bower', function () {
    return bower()
            .pipe(gulp.dest(config.bowerDir))

});

gulp.task('icons', function () {

    return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*') 
            .pipe(gulp.dest('./public/fonts'));

});

gulp.task('css', function () {
    console.log('running css');
    
    return gulp.src(config.sassPath + '/*.scss')
            .pipe(sass({
//                style: 'compressed',
                loadPath: [
                    config.bowerDir + '/bootstrap-sass-official/assets/stylesheets',
                    config.bowerDir + '/fontawesome/scss',
                    config.sassPath + '/components',
                ]
            }) .on("error", notify.onError(function (error) {
                console.log(error.message);
                return "Error: " + error.message;
            }))) 
            .pipe(gulp.dest('./public/css'));

});

// Rerun the task when a file changes
gulp.task('watch', function () {
    gulp.watch([
        config.sassPath + '/**/*.scss',
        config.bowerDir + '/bootstrap-sass-official/assets/stylesheets/**/*.scss'
    ], ['css']);

});

gulp.task('default', ['bower', 'icons', 'css']);