var
  gulp           = require('gulp'),
  sass           = require('gulp-sass'),
  browserSync = require('browser-sync').create();
// WATCH

// Compile sass files and move them to dist/styles
gulp.task('default', watch);
gulp.task('sass', compileSass);

function watch() {
  gulp.watch('/assets/scss/**/*.scss', ['sass']);
}

function compileSass() {
  return gulp.src('assets/scss/**/*.scss')
             .pipe(sass())
             .pipe(gulp.dest('assets/css'))
	           .pipe(browserSync.stream());
}

gulp.task('browser-sync', function() {
    // Watch files
    var files = [
      './assets/css/*.css', 
      './assets/js/*.js',
      '**/*.php',
      'assets/images/**/*.{png,jpg,gif,svg,webp}',
    ];

    browserSync.init(files, {
      // Replace with URL of your local site
      proxy: "http://localhost:8888/",
    });
    
    gulp.watch('./assets/scss/**/*.scss', compileSass).on('change', browserSync.reload);

});
