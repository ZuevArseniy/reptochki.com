<?php
// Preview route
Route::set('preview', 'files_preview/<filename>', array('filename' => '.+'))
    ->defaults(array(
    'controller' => 'files',
    'action'     => 'preview',
));
