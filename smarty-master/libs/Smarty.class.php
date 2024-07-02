<?php

/////////////////////////////////////////////////////////////////////
// This is a stub PSR-4 loading script that gets all the pieces of //
// Smarty 5.x loaded without requiring the use of composer. It's   //
// not really a 'class' file, but the name is used so we're        //
// backwards compatible with previous versions of Smarty.          //
//                                                                 //
// Example:                                                        //
// require_once("/path/to/smarty/libs/Smarty.class.php");          //
//                                                                 //
// $smarty = new Smarty\Smarty;                                    //
// $smarty->testInstall();                                         //
/////////////////////////////////////////////////////////////////////

// Define __SMARTY_DIR only if it's not already defined
if (!defined('__SMARTY_DIR')) {
    define('__SMARTY_DIR', __DIR__ . '/../src/');
}

// Global function declarations
require_once(__SMARTY_DIR . "functions.php");

// Register the Smarty autoloader
spl_autoload_register(function ($class) {
    // Class prefix
    $prefix = 'Smarty\\';

    // Check if the class uses the namespace prefix
    if (strpos($class, $prefix) !== 0) {
        // If not, move to the next registered autoloader
        return;
    }

    // Get the relative class name
    $relative_class = substr($class, strlen($prefix));

    // Build the file path
    $file = __SMARTY_DIR . str_replace('\\', '/', $relative_class) . '.php';

    // If the file exists, require it
    if (file_exists($file)) {
        require_once($file);
    }
});