'use strict'

var pkg = require('./package.json')

var gulp = require('gulp')
var plugins = {
	sass: require('gulp-sass'),
	size: require('gulp-size'),
	util: require('gulp-util'),
	clean: require('gulp-clean'),
	cache: require('gulp-cache'),
	uglify: require('gulp-uglify'),
	concat: require('gulp-concat'),
	rename: require('gulp-rename'),
	plumber: require('gulp-plumber'),
	sourcemaps: require('gulp-sourcemaps'),
	autoprefixer: require('gulp-autoprefixer')
}

var path = {
	sass: './assets/sass',
	css: './assets/css',
	js: './assets/js',
	img: './images'
}

gulp.task('styles', function () {
	return gulp.src(path.sass + '/*.scss')
		.pipe(plugins.plumber())
		.pipe(plugins.sourcemaps.init())
			.pipe(plugins.sass({
				outputStyle: 'compressed'
			}).on('error', plugins.sass.logError))
			.pipe(plugins.autoprefixer({
				browsers: ['last 3 versions'],
				cascade: false
			}))
		.pipe(plugins.sourcemaps.write('/'))
		.pipe(plugins.plumber.stop())
		.pipe(plugins.size())
		.pipe(gulp.dest(path.css))
})

gulp.task('scripts:clean', function () {
	return gulp.src(path.js + '/main.min.js', { read: false })
		.pipe(plugins.clean())
})

gulp.task('scripts', ['scripts:clean'], function () {
	return gulp.src(path.js + '/*.js')
		.pipe(plugins.plumber())
		.pipe(plugins.sourcemaps.init())
			.pipe(plugins.uglify({
				sourceMap: false
			}))
			.pipe(plugins.concat('main.min.js'))
		.pipe(plugins.sourcemaps.write('/'))
		.pipe(plugins.plumber.stop())
		.pipe(plugins.size())
		.pipe(gulp.dest(path.js))
})

gulp.task('images', function () {
	return gulp.src([path.img + '/**/*.jpg', path.img + '/**/*.png'])
		.pipe(plugins.cache(plugins.imagemin()))
		.pipe(gulp.dest(path.img))
})

gulp.watch('watch', function () {
	gulp.watch(path.sass + '/**/*.scss', ['styles'])
	gulp.watch(path.js + '/**/*.js', ['scripts'])
})
