<?php

Autoloader::namespaces(array(
    'Charisma\Models' => Bundle::path('charisma').'models',
));

Autoloader::map(array(
    'Charisma_Base_Controller' => Bundle::path('charisma').'controllers/base.php',
));

Asset::container('header')->bundle('charisma');
Asset::container('footer')->bundle('charisma');

Asset::container('header')->add('charisma-app', 'css/charisma-app.css');
Asset::container('header')->add('bootstrap-responsive', 'css/bootstrap-responsive.css');
Asset::container('header')->add('jquery-ui-1.8.21.custom', 'css/jquery-ui-1.8.21.custom.css');
Asset::container('header')->add('fullcalendar', 'css/fullcalendar.css');
Asset::container('header')->add('fullcalendar.print', 'css/fullcalendar.print.css');
Asset::container('header')->add('chosen', 'css/chosen.css');
Asset::container('header')->add('uniform.default', 'css/uniform.default.css');
Asset::container('header')->add('colorbox', 'css/colorbox.css');
Asset::container('header')->add('jquery.cleditor', 'css/jquery.cleditor.css');
Asset::container('header')->add('jquery.noty', 'css/jquery.noty.css');
Asset::container('header')->add('noty_theme_default', 'css/noty_theme_default.css');
Asset::container('header')->add('elfinder.min', 'css/elfinder.min.css');
Asset::container('header')->add('elfinder.theme', 'css/elfinder.theme.css');
Asset::container('header')->add('jquery.iphone.toggle', 'css/jquery.iphone.toggle.css');
Asset::container('header')->add('opa-icons', 'css/opa-icons.css');
Asset::container('header')->add('uploadify', 'css/uploadify.css');



Asset::container('footer')->add('jquery', 'js/jquery-1.7.2.min.js');
Asset::container('footer')->add('bootstrap-transition', 'js/bootstrap-transition.js');
Asset::container('footer')->add('bootstrap-alert', 'js/bootstrap-alert.js');
Asset::container('footer')->add('bootstrap-modal', 'js/bootstrap-modal.js');
Asset::container('footer')->add('bootstrap-dropdown', 'js/bootstrap-dropdown.js');
Asset::container('footer')->add('bootstrap-scrollspy', 'js/bootstrap-scrollspy.js');
Asset::container('footer')->add('bootstrap-tab', 'js/bootstrap-tab.js');
Asset::container('footer')->add('bootstrap-tooltip', 'js/bootstrap-tooltip.js');
Asset::container('footer')->add('bootstrap-popover', 'js/bootstrap-popover.js');
Asset::container('footer')->add('bootstrap-button', 'js/bootstrap-button.js');
Asset::container('footer')->add('bootstrap-collapse', 'js/bootstrap-collapse.js');
Asset::container('footer')->add('bootstrap-carousel', 'js/bootstrap-carousel.js');
Asset::container('footer')->add('bootstrap-typeahead', 'js/bootstrap-typeahead.js');
Asset::container('footer')->add('bootstrap-tour', 'js/bootstrap-tour.js');
Asset::container('footer')->add('bootstrap-toggle', 'js/bootstrap-tour.js');
Asset::container('footer')->add('jquery-ui-1.8.21.custom.min', 'js/jquery-ui-1.8.21.custom.min.js');
Asset::container('footer')->add('jquery.cookie', 'js/jquery.cookie.js');
Asset::container('footer')->add('jquery.fullcalendar.min', 'js/fullcalendar.min.js');
Asset::container('footer')->add('jquery.dataTables.min', 'js/jquery.dataTables.min.js');
Asset::container('footer')->add('excanvas', 'js/excanvas.js');
Asset::container('footer')->add('jquery.flot.min', 'js/jquery.flot.min.js');
Asset::container('footer')->add('jquery.flot.pie.min', 'js/jquery.flot.pie.min.js');
Asset::container('footer')->add('jquery.flot.stack', 'js/jquery.flot.stack.js');
Asset::container('footer')->add('jquery.flot.resize.min', 'js/jquery.flot.resize.min.js');
Asset::container('footer')->add('jquery.chosen.min', 'js/jquery.chosen.min.js');
Asset::container('footer')->add('jquery.colorbox.min', 'js/jquery.colorbox.min.js');
Asset::container('footer')->add('jquery.cleditor.min', 'js/jquery.cleditor.min.js');
Asset::container('footer')->add('jquery.noty', 'js/jquery.noty.js');
Asset::container('footer')->add('jquery.elfinder.min', 'js/jquery.elfinder.min.js');
Asset::container('footer')->add('jquery.raty.min', 'js/jquery.raty.min.js');
Asset::container('footer')->add('jquery.iphone.toggle', 'js/jquery.iphone.toggle.js');
Asset::container('footer')->add('jquery.autogrow-textarea', 'js/jquery.autogrow-textarea.js');
Asset::container('footer')->add('jquery.uploadify-3.1.min', 'js/jquery.uploadify-3.1.min.js');
Asset::container('footer')->add('jquery.history', 'js/jquery.history.js');
Asset::container('footer')->add('jquery.uniform.min', 'js/jquery.uniform.min.js');
Asset::container('footer')->add('fullcalendar.min', 'js/fullcalendar.min.js');
Asset::container('footer')->add('charisma', 'js/charisma.js');


