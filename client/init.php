<?php
require_once __DIR__."/../init.php";
load_module(__DIR__);
if(empty(@$member['username'])){
    header("Location: ".CLIENT_LOGIN); exit;
}
$include = __INCLUDE__."/head.php";
define("CSM_TITLE","GamePlay");