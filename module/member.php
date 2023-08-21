<?php
global $member;
global $members;
global $member_metas;
global $member_meta;
@session_start();
$members = new StdArrays();
$members['id'] = "member";
factory(!define("_MEMBER_","_MEMBER_") ?: _MEMBER_,$members,new FsContainer(__CACHE__."/members"));
$member_meta = [
    "name" => [
        "type" => "string",
    ],
    "email" => [
        "type" => "string",
        "unique" => true,
        "min" => 6,
        "max" => 30
    ],
    "username" => [
        "type" => "string",
        "unique" => true,
        "min" => 6,
        "max" => 12
    ],
    "password" => [
        "type" => "string",
        "min" => 6,
        "max" => 18
    ],
    "parent" => [
        "type" => "factory",
        "value" => $members
    ],
    "referral" => [
        "type" => "string",
    ],
    "total" => [
        "type" => "integer",
        "type" => "float",
        "step" => "0.001",
        "min" => 0,
    ],
    "type" => [
        "type" => "array",
        "value" => ["member","vip"]
    ],
    "status" => [
        "type" => "array",
        "value" => ["active","confirm","block"]
    ],
];
$mid = @$_SESSION['mid'];
if($mid){
    $member = $members[$mid];
}
$members->setValidation(new Validation($member_meta));