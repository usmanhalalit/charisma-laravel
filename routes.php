<?php
Route::any('(:bundle)/test', function () {
    dd('aa');
});

// Let's poin to our home controller
Route::any('(:bundle)/(:any?)', array('as' => 'charisma.default', 'uses' => 'charisma::home@index'));
