<?php
require_once __DIR__."/../init.php";
define("CSM_TITLE","Admin");
load_module(__DIR__);
if(empty(@$user['username'])){
    header("Location: ".ADMIN_LOGIN);exit;
}
$include = __INCLUDE__."/head.php";
$menus = require_once __CONFIG__."/admin-menu.php";;
$metas = [
	"request" => [
		"router" => "request.php",
	],
	"game" => [
		"router" => "game.php",
	],
	"bet" => [
		"router" => "bet.php",
	],
	"wallet" => [
		"router" => "wallet.php",
	],
	"network" => [
		"router" => "network.php",
	],
	"contract" => [
		"router" => "contract.php",
	],
	"taisan" => [
		"router" => "taisan.php",
	],
	"member" => [
		"router" => "thanhvien.php",
	]
];
register_event('giaithuong.push',function(&$data){
    global $thongkes;
	global $members;
	$thongke = $thongkes[DAY_ID];
	$thongke['bom'] = $thongke['bom'] + $data['total'];
	$member = $members[$data['user']];
	$member['total'] = $member['total'] + $data['total'];
});