module.exports = function(grunt) {
	
	var mozjpeg = require('imagemin-mozjpeg');

	grunt.initConfig({
	  	watch: {		  	  
		  	sass: {
		      files: ['src/sass/*', 'src/sass/bootstrap/*'],
		      tasks: ['sass', 'postcss'],
		  	},
		  	js: {
		      files: ['src/js'],
      		  tasks: ['jshint'],
		  	},
		  	images: {
		      files: ['src/images/*.{png,jpg,gif}'],
		      tasks: ['imagemin'],
		      options: {
		      	spawn: false,
      		  }
      		}		  
		},
	  	sass: {
		    dist: {
		      files: [{
		        expand: true,
		        cwd: 'src/sass/' ,
		        src: ['**/*.scss'],
		        dest: 'dist/css',
		        ext: '.css'
		      }]
		    }
		},
		postcss: {
		  options: {
		    map: true,
		    processors: [
		      require('autoprefixer')({browsers: ['> 0.5%', 'last 2 version', 'ie 6-8', 'Firefox > 20']}),
		      require('cssnano')()
		    ]
		  },
		  dist: {
		    src: 'dist/css/*.css'
		  }
		},
		  jshint: {
	        files: ['Gruntfile.js', 'src/**/*.js'],
	          options: {
	            globals: {
	              jQuery: true
	            }
	      }
	    },
	    imagemin: {                          // Task
		    dynamic: {                         // Another target
		      files: [{
		        expand: true,                  // Enable dynamic expansion
		        cwd: 'src',                   // Src matches are relative to this path
		        src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
		        dest: 'dist'                  // Destination path prefix
		      }]
		    }
		},
		
	        
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-jshint');

	grunt.registerTask('default', ['sass', 'postcss', 'imagemin', 'watch']);
	
};