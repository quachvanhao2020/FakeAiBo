<?php
require_once __DIR__."/init.php";
session_unset();
session_destroy();
header("Location: ".CLIENT_LOGOUT);
exit;