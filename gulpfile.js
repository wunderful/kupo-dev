var gulp       = require('gulp'),
	gutil      = require('gulp-util'),
	browserify = require('browserify'),
	uglify     = require('gulp-uglify'),
	concat     = require('gulp-concat'),
	changed    = require('gulp-changed'),
	compass    = require('gulp-compass'),
	buffer     = require('vinyl-buffer'),
	source     = require('vinyl-source-stream'),
	livereload = require('gulp-livereload');

var scssSources = [
		'_src/scss/**/*.scss'
	],
	jsSources = [
		'_src/js/main.js'
	],
	jsVendorSources = [
		'_src/js/vendor.js'
	],
	scriptsPath = 'assets/js',
	scssPath    = 'assets/css';

var onError = function (error)
{
	gutil.log(gutil.colors.red(error));
	this.emit('end');
};

gulp.task('sass', function()
{
	gulp.src(scssSources)
		.pipe(changed(scssPath))
			.on('error', onError)
		.pipe(compass({
			style: 'expanded',
			sass: '_src/scss',
			css: scssPath,
			relative: true,
			require: ['breakpoint', 'susy']
		}))
			.on('error', onError)
		.pipe(gulp.dest(scssPath))
		.pipe(livereload())
});

gulp.task('js', function()
{
	return browserify(jsSources)
			.on('error', onError)
		.bundle()
			.on('error', onError)
		.pipe(source('main.js'))
			.on('error', onError)
		.pipe(buffer())
			.on('error', onError)
		//.pipe(uglify())
			//.on('error', onError)
		.pipe(gulp.dest(scriptsPath))
		.pipe(livereload());
});

gulp.task('js-vendor', function()
{
	return browserify(jsVendorSources)
			.on('error', onError)
		.bundle()
			.on('error', onError)
		.pipe(source('vendor.js'))
			.on('error', onError)
		.pipe(buffer())
			.on('error', onError)
		//.pipe(uglify())
			//.on('error', onError)
		.pipe(gulp.dest(scriptsPath))
		.pipe(livereload());
});

gulp.task('watch', function()
{
	livereload.listen();
	gulp.watch(['_src/js/main.js', '_src/js/scripts/**/*.js'], ['js']);
	gulp.watch(['_src/js/vendor.js', '_src/js/vendor/**/*.js'], ['js-vendor']);
	gulp.watch(scssSources, ['sass']);
	gulp.watch(['**/*.php', '**/*.html', '**/*.twig']).on('change', function(file) { livereload.changed(file.path) })
});

gulp.task('default', ['watch']);