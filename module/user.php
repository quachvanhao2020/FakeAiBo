<?php
global $user;
global $users;
global $user_meta;
global $user_metas;
@session_start();
$users = new StdArrays();
factory(!define("_USER_","_USER_") ?: _USER_,$users,new FsContainer(__CACHE__."/users"));
$user_meta = [
    "username" => [
        "type" => "string",
    ],
    "password" => [
        "type" => "string",
    ],
    "type" => [
        "type" => "string",
    ],
    "logo" => [
        "type" => "string",
    ],
];
$id = @$_SESSION['id'];
if($id){
    $user = $users[$id];
}
$users->setValidation(new Validation($user_meta));