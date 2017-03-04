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

		concat: {
			css: {
				src: ['bower_components/normalize-css/normalize.css', 'assets/css/styles.css'],
				dest: 'assets/css/compiled.css'
			},
			jsHome: {
				options: {
					separator: '\n;',
				},
				src: ['bower_components/jquery/dist/jquery.min.js', 'assets/js/vendor/**/*.js', 'assets/js/main.js'],
				dest: 'assets/js/compiled.js'
			},
			jsCS: {
				options: {
					separator: '\n;',
				},
				src: ['bower_components/jquery/dist/jquery.min.js', 'assets/js/vendor/modernizr-custom.js', 'assets/js/vendor/nav-overlay.js', 'assets/js/vendor/classie.js', 'assets/js/vendor/css3-animate-it.min.js', 'assets/js/vendor/jquery.fittext.js', 'assets/js/vendor/constellations.js', 'assets/js/main-pages.js'],
				dest: 'assets/js/cs-compiled.js'
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

        // Minify JS
        uglify: {
            all: {
                files: {
                    'assets/js/compiled.min.js': 'assets/js/compiled.js',
                    'assets/js/cs-compiled.min.js': 'assets/js/cs-compiled.js',
                }
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

		// Using the BrowserSync Server for your static .html files.
		browserSync: {
		  default_options: {
		    bsFiles: {
		      src: [
		        "assets/css/*.css",
		        "assets/js/**/*.js",
		        "packages/*.php",
		        "*.php",
		        "incl/*.php",
		        "case-study/**/*.php"
		      ]
		    },
		    options: {
		      watchTask: true,
		      open: true,
				proxy: "sdd.dev/index-dev.php"
		    }
		  }
		},

		targethtml: {
			options: {
				curlyTags: {
					rlsdate: '<%= grunt.template.today("yyyymmdd") %>'
				}
			},

			dist: {
				files: {
					'index.php': 'index-dev.php',
					'packages/index.php': 'packages/index-dev.php',
					'packages/french.php': 'packages/french-dev.php'
				}
			}
		},

		htmlmin: {                                     	 // Task
			dist: {                                      // Target
			  options: {                             // Target options
		        removeComments: true,
		        collapseWhitespace: true
			  },
			  files: {                           // Dictionary of files
			    'index.php': 'index-dev.php'     // 'destination': 'source'
			  }
			}
		},
		
		imagemin: {
		   home: {
		      options: {
		        optimizationLevel: 5
		      },

		      files: [{
		         expand: true,
		         cwd: 'assets/img-uncompressed',
		         src: ['**/*.{png,jpg,gif}'],
		         dest: 'assets/img'
		      }]
		   },

		   cs: {
		      files: [{
		         expand: true,
		         cwd: 'case-study/**/img',
		         src: ['**/*.{png,jpg,gif}'],
		         dest: 'case-study/**/dist'
		      }]
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
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

	// Dev
	grunt.registerTask('default', ['browserSync', 'watch']);

	// Production - Build app
	grunt.registerTask('prod', ['concat' ,'cssmin', 'uglify', 'targethtml', 'browserSync', 'watch']);
	
	// Minify images
	grunt.registerTask('minifyImg', ['imagemin']);
};