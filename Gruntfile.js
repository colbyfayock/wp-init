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

                    './bower_components/modernizr/modernizr.js',


                    // Local components

                    // './local_components/dir/dir.js',


                    // Main

                    './build/js/main.js'

                ],
                dest: './content/themes/colbyfayock/assets/js/colbyfayock.js',
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
                    './content/themes/colbyfayock/assets/js/colbyfayock.min.js': [
                        './content/themes/colbyfayock/assets/js/colbyfayock.js'
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
                    './content/themes/colbyfayock/style.css': './build/scss/style.scss'
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
        'rsync'
    ]);

    grunt.registerTask('css', [
        'sass'
    ]);

    grunt.registerTask('js', [
        // 'concat',
        // 'uglify'
        // node r.js -o build.js
    ]);

    grunt.registerTask('build', [
        'css',
        'js'
    ]);

    grunt.registerTask('deploy', [
        'rsync:deploy'
    ]);

};