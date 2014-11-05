module.exports = function(grunt) {
  "use strict";

  grunt.initConfig({
    secret: grunt.file.readJSON('secret.json'),
    peach: {
      url: {
        options: {
          force: true
        },
        src:  'web/mysqldumps/latest.sql',
        dest: 'web/mysqldumps/url.sql',
        from: '<%= secret.host %>.<%= secret.host_tld %>',
        to:   '<%= secret.host %>.dev'
      },
      path: {
        options: {
          force: true
        },
        src:  'web/mysqldumps/url.sql',
        dest: 'web/mysqldumps/output.sql',
        from: '/home/<%= secret.host %>/current/web',
        to:   '<%= secret.path %>/web'
      }

    },
    exec: {
      get_dumps: {
        cmd: 'echo "Please be patient, this may take a minute or two... Getting database dump." && scp root@<%= secret.host %>:/tmp/mysqldumps/latest.sql.gz web/mysqldumps/latest.sql.gz && echo "Aww yeah, tasty."'
      },
      unzip_it: {
        cmd: 'gunzip -f web/mysqldumps/latest.sql.gz'
      }
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-peach');
  grunt.loadNpmTasks('grunt-exec');

  // Register tasks
  grunt.registerTask('default', []);
  grunt.registerTask('process_dumps', [ 'exec:get_dumps', 'exec:unzip_it', 'peach' ]);
};