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

                    // Bower components

                    './bower_components/jquery.fitvids/jquery.fitvids.js',

                    './build/js/main.js'

                ],
                dest: './content/themes/zurg/assets/js/zurg.js',
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
                    './content/themes/zurg/assets/js/zurg.min.js': [
                        './content/themes/zurg/assets/js/zurg.js'
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
                    './content/themes/zurg/style.css': './build/scss/main.scss'
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
                files: './build/scss/**/*.scss',
                tasks: [
                    'css'
                ]
            },
            js: {
                files: './build/js/**/*.js',
                tasks: [
                    'js'
                ]
            }
        }

    });

    grunt.registerTask('default', [
        'css',
        'js'
    ]);

    grunt.registerTask('css', [
        'sass'
    ]);

    grunt.registerTask('js', [
        'concat',
        'uglify'
    ]);

    grunt.registerTask('deploy', [
        'rsync:deploy'
    ]);

};