/*
  gulpfile.js
  ===========
  Rather than manage one giant configuration file responsible
  for creating multiple tasks, each task has been broken out into
  its own file in gulp/tasks. Any file in that folder gets automatically
  required by the loop in ./gulp/index.js (required below).

  To add a new task, simply add a new task file to gulp/tasks.
*/

global.devDomain = "kirby-boilerplate.dev";

global.paths = {
  csslibs: [
    'bower_components/leaflet/dist/leaflet.css',
    'bower_components/Leaflet.awesome-markers/dist/leaflet.awesome-markers.css'
  ],
  scss: 'assets/css/src/*.scss',
  scripts: [
    'bower_components/jquery/dist/jquery.js', 
    'bower_components/lodash/lodash.js', 
    'bower_components/bean/bean.js', 
    'bower_components/revolverjs/js/revolver.js',
    'bower_components/mg-*/*.js',
    'assets/js/src/*.js'
  ]
};

require('./gulp');