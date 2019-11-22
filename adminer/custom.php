<?php

//includes
include "root.php";
require_once "resources/require.php";
require_once "resources/check_auth.php";

//check permission
if (permission_exists('adminer')) {
    //access granted
}
else {
    echo "access denied";
    exit;
}

//notice
    //FusionPBX using Adminer under
    //the Apache License 2.0 License.

//hide notices and warnings
//ini_set('display_errors', '0');
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
