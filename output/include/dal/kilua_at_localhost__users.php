<?php
$dalTableusers = array();
$dalTableusers["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email");
$dalTableusers["nama_lengkap"] = array("type"=>200,"varname"=>"nama_lengkap");
$dalTableusers["alamat"] = array("type"=>201,"varname"=>"alamat");
	$dalTableusers["user_id"]["key"]=true;

$dal_info["kilua_at_localhost__users"] = &$dalTableusers;
?>