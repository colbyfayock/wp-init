module.exports = function(grunt) {

    require('jit-grunt')(grunt);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        concat: {

            options: {
                separator: ';',
            },

            desktop: {
                src: [

                    './bower_components/jquery.fitvids/jquery.fitvids.js',

                    './build/js/main.js'

                ],
                dest: './content/themes/kim/assets/js/scripts.js',
            },

        },

        uglify: {
            options: {
                banner: '/*\n' +
                    ' * <%= pkg.name %>\n' +
                    ' */\n',
                mangle: false,
                compress: false
            },
            js: {
                files: {
                    './content/themes/kim/assets/js/scripts.min.js': [
                        './content/themes/kim/assets/js/scripts.js'
                    ]
                }
            }
        },

        sass: {
            options: {
                sourceMap: false
            },
            dist: {
                files: {
                    './content/themes/kim/style.css': './build/scss/style.scss',
                    './content/themes/kim/assets/css/login.css': './build/scss/login.scss'
                }
            }
        },

        rsync: {
            options: {
                args: [
                    "-avhzS --progress"
                ],
                exclude: [

                    ".git*",

                    "wp",
                    "build",

                    "bower_components",
                    "node_modules",
                    "local_components",

                    "local-config.php",
                    "package.json",
                    "bower.json",
                    "*.sublime*",

                    "content/cache",
                    "content/plugins",
                    "content/upgrade",
                    "content/uploads"

                ],
                recursive: true
            },
            deploy: {
                options: {
                    src: '<%= env.rsync.deploy.src %>',
                    dest: '<%= env.rsync.deploy.dest %>',
                    host: '<%= env.rsync.deploy.host %>',
                    delete: false
                }
            }
        },

        watch: {
            css: {
                files: './build/scss/**/**/**/*.scss',
                tasks: [
                    'sass'
                ]
            },
            js: {
                files: './build/js/**/**/**/*.js',
                tasks: [
                    'js'
                ]
            },
        }

    });

    grunt.registerTask('default', [
        // 'rsync'
    ]);

    grunt.registerTask('css', [
        'sass'
    ]);

    grunt.registerTask('js', [
        'concat',
        'uglify'
    ]);

    grunt.registerTask('build', [
        'css',
        'js'
    ]);

    grunt.registerTask('deploy', [
        'rsync:deploy'
    ]);

};