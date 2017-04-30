/* jshint ignore:start */
define(['jquery', 'theme_bootstrapbase/bootstrap', 'core/log'], function($, bootstrap, log) {

  "use strict"; // jshint ;_;

  log.debug('Adaptable Bootstrap AMD opt in functions');

    return {
        init: function(hasaffix) {
            $(document).ready(function($) {
                if (hasaffix) {
                    $('#navwrap').affix({
                        'offset': { top: $('#navwrap').offset().top}
                    });
                }
            });
        }
    };
});
/* jshint ignore:end */