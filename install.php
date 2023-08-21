<?php
require_once __DIR__."/init.php";
$users["admin"] = arrs([
    "id" => "admin",
    "username" => "admin",
    "password" => "aaaa2222",
    "type" => "admin",
    "logo" => "https://i.ibb.co/nPHN8xc/logo-search-grid-1x.png"
]);
echo "Admin Init!";