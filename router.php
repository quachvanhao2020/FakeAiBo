<?php
define("CLIENT_BASE",isset($_ENV['CLIENT_BASE']) ? $_ENV['CLIENT_BASE'] : "/client");
define("ADMIN_BASE",isset($_ENV['ADMIN_BASE']) ? $_ENV['ADMIN_BASE'] : "/admin/");
define("STATIC_BASE",isset($_ENV['STATIC_BASE']) ? $_ENV['STATIC_BASE'] : "/static");
define("CLIENT_LOGIN",CLIENT_BASE."/login.php");
define("CLIENT_LOGOUT",CLIENT_LOGIN);
define("CLIENT_FA2VERI",CLIENT_BASE."/fa2veri.php");
define("CLIENT_INFO_REGISTER",CLIENT_BASE."/info-register.php");
define("ADMIN_LOGIN",ADMIN_BASE."/login.php");
define("ADMIN_LOGOUT",ADMIN_LOGIN);