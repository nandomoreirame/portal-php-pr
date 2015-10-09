/**
 * gulp watch
 */

var config = require('../config.json');
var gulp   = require('gulp');
var $      = require('gulp-load-plugins')();

gulp.task('watch', function () {
  // watch sass files
  gulp.watch(config.sass + '**/*.scss', ['sass']);

  // watch js files
  gulp.watch(config.js + '**/*.js', ['lint', 'js']);
});