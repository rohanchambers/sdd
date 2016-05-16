module.exports = function(grunt){

	// Load all of the tasks automatically using the matchdep dependency
	//require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		
		// SASS task config
		sass: {
			dist: {
				files: {
					'assets/css/styles.css' : 'assets/sass/styles.scss'
				}
			}
		},
		
		// CSS min styles.css 
		cssmin : {
			minify : {
				expand : true,
				cwd : 'assets/css/',
				src : [ '*.css', '!*.min.css' ],
				dest : 'assets/css/',
				ext : '.min.css'
			}
		},

		// JShint for scripts
        jshint: {
            all: {
                src: 'assets/js/scripts.js',
	            options: {
					camelcase: true,
					noempty: true,
					quotmark: 'single',
				    curly: true,
				    eqeqeq: true,
				    eqnull: true,
				    browser: true,
				    globals: {
				      jQuery: true
				    }
				}
            }
        },

		concat: {
			options: {
			  separator: ';',
			},
			dist: {			  
			  src: ['bower_components/jquery/dist/jquery.min.js', 'assets/js/vendor/**/*.js'],
			  dest: 'assets/js/plugins.js'
			},
		},

        // Minify JS
        uglify: {
            all: {
                files: {
                    'assets/js/main.min.js': 'assets/js/main.js',
                    'assets/js/plugins.min.js': 'assets/js/plugins.js',
                }
            }
        },

		// Using the BrowserSync Server for your static .html files.
		browserSync: {
		  default_options: {
		    bsFiles: {
		      src: [
		        "assets/css/*.css",
		        "assets/js/**/*.js",
		        "*.php",
		        "incl/*.php"
		      ]
		    },
		    options: {
		      watchTask: true,
				proxy: "sdd.dev"
		    }
		  }
		},

 		// Watch task config
		watch: {
			css: {
				files: 'assets/sass/**/*.scss',
				tasks: ['sass', 'cssmin']
			}

            // javaScript: {
            //     files: 'assets/js/**.js',
            //     tasks: 'jshint'
            // }
		},

		targethtml: {
		  dist: {
		    files: {
		      'index-2.php': 'index.php'
		    }
		  }
		}		

	});

	grunt.loadNpmTasks('grunt-browser-sync');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');	
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-targethtml');	

	grunt.registerTask('default', ['browserSync', 'concat', 'cssmin', 'uglify', 'watch']);

};