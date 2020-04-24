module.exports = function () {


	$.gulp.task('pug', function () {

		return $.gulp.src($.sourse + '/pug/pages/*.pug')
			.pipe($.gp.pug({ pretty: true }).on("error", $.gp.notify.onError()))
			.pipe($.tabify(2, true))
			.pipe($.gp.rename({
				extname: '.php'
			}))
			.pipe($.gulp.dest($.public))
			.on('end', $.browserSync.reload);
		// .pipe($.browserSync.reload({ stream: true }));
	});
}