<?php

// Simple example that demonstrates how to successfully authenticate
// against the API and retrieve a user's inbox items using the implicit
// OAuth flow.

define('IMPLICIT', TRUE);

require_once 'config.php';
require_once '../../src/output_helper.php';

// Determine what page we want to be redirected to after
$redirect_page = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . '?auth_redirect';

// Check if this is that page and if so, abort
if(isset($_GET['auth_redirect']))
{
    echo OutputHelper::GetHelperJS();
    echo 'Please wait...';
    exit;
}

?>
