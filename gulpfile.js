var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		browserSync  = require('browser-sync'),
		concat       = require('gulp-concat'),
		cleancss     = require('gulp-clean-css'),
		autoprefixer = require('gulp-autoprefixer'),
		rsync        = require('gulp-rsync'),
		newer        = require('gulp-newer'),
		rename       = require('gulp-rename'),
		responsive   = require('gulp-responsive'),
		del          = require('del');
var tplPth = 'public_html/local/templates/home';

// Local Server
gulp.task('browser-sync', function() {
	browserSync({
		proxy: 'safronovy.loc',
		notify: false,
		// online: false, // Work offline without internet connection
		// tunnel: true, tunnel: 'projectname', // Demonstration page: http://projectname.localtunnel.me
	})
});
function bsReload(done) { browserSync.reload(); done(); };

// Custom Styles
gulp.task('styles', function() {
	return gulp.src(tplPth+'/css/sass/*.sass')
	.pipe(sass({ outputStyle: 'expanded' }))
	.pipe(autoprefixer({
		grid: true,
		overrideBrowserslist: ['last 10 versions']
	}))
	.pipe(gulp.dest(tplPth+'/css'))
	.pipe(browserSync.stream())
});


// Responsive Images
var quality = 95; // Responsive images quality

// Produce @1x images
gulp.task('img-responsive-1x', async function() {
	return gulp.src(tplPth+'/img/_src/**/*.{png,jpg,jpeg,webp,raw}')
		.pipe(newer(tplPth+'/img/@1x'))
		.pipe(responsive({
			'**/*': { width: '50%', quality: quality }
		})).on('error', function (e) { console.log(e) })
		.pipe(rename(function (path) {path.extname = path.extname.replace('jpeg', 'jpg')}))
		.pipe(gulp.dest(tplPth+'/img/@1x'))
});
// Produce @2x images
gulp.task('img-responsive-2x', async function() {
	return gulp.src(tplPth+'/img/_src/**/*.{png,jpg,jpeg,webp,raw}')
		.pipe(newer(tplPth+'/img/@2x'))
		.pipe(responsive({
			'**/*': { width: '100%', quality: quality }
		})).on('error', function (e) { console.log(e) })
		.pipe(rename(function (path) {path.extname = path.extname.replace('jpeg', 'jpg')}))
		.pipe(gulp.dest(tplPth+'/img/@2x'))
});
gulp.task('img', gulp.series('img-responsive-1x', 'img-responsive-2x', bsReload));

// Clean @*x IMG's
gulp.task('cleanimg', function() {
	return del([tplPth+'/img/@*'], { force: true })
});

// Code & Reload
gulp.task('code', function() {
	return gulp.src(tplPth+'/**/*.php')
	.pipe(browserSync.reload({ stream: true }))
});

// Deploy
gulp.task('rsync', function() {
	return gulp.src('public_html/')
	.pipe(rsync({
		root: 'public_html/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_html/',
		// include: ['*.htaccess'], // Included files
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excluded files
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});

gulp.task('watch', function() {
	gulp.watch(tplPth+'/css/**/*.sass', gulp.parallel('styles'));
	gulp.watch(tplPth+'/js/main.js');
	gulp.watch(tplPth+'/*.php', gulp.parallel('code'));
	gulp.watch(tplPth+'/img/_src/**/*', gulp.parallel('img'));
});

gulp.task('default', gulp.parallel('img', 'styles', 'browser-sync', 'watch'));
