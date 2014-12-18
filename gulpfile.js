var gulp = require('gulp'),
	concat = require('gulp-concat');

gulp.task(
	'default', 
	[
		'js',
		'css'
	]
);


gulp.task('js', function() {

	return gulp.src([
				'bower_components/jquery/dist/jquery.min.js',
				'bower_components/bootstrap/dist/js/bootstrap.min.js'
			])
    	.pipe(concat('scripts.min.js'))
	    .pipe(gulp.dest('public_html/js'));

});

gulp.task('css', function() {

	return gulp.src([
				'bower_components/bootstrap/dist/css/bootstrap.min.css'
			])
    	.pipe(concat('styles.min.css'))
	    .pipe(gulp.dest('public_html/css'));

});
