<?php

Autoloader::namespaces(array(
    'Charisma\Models' => Bundle::path('charisma').'models',
));

Autoloader::map(array(
    'Charisma_Base_Controller' => Bundle::path('charisma').'controllers/base.php',
));
