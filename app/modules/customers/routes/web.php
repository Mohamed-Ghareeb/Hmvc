<?php

$moduleName = basename(dirname(__DIR__, 1));

Route::namespace(buildControllerNamespace($moduleName))->middleware('customer')->group(function() use ($moduleName)
{

    Route::namespace('Backend')->prefix(buildPrefix('customers', 'backend'))->group(function()
    {
        require 'backend.php';
    });

    Route::namespace('Frontend')->prefix(buildPrefix('customers', 'frontend'))->group(function()
    {
        require 'frontend.php';
    });

});
