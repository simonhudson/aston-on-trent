(function() { 'use strict';
    
    var exports = module.exports = {};

    exports.pages = {};
        exports.pages.root = 'http://localhost/github_simonhudson/aston-on-trent/app/';
        
        exports.pages.home = {
            url: exports.pages.root + ''
        };
        exports.pages.login = {
            url: exports.pages.root + 'login.php'
        };
        exports.pages.logout = {
            url: exports.pages.root + 'logout.php'
        };

})();