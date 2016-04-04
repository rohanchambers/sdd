module.exports = function(grunt){

	// Load all of the tasks automatically using the matchdep dependency
	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
		
		htmllint: {
			options: {},
			src: [
			  '/*.html'
			],
		}
    });

    grunt.registerTask('default', []);

};