<?php
$dalTablealbum = array();
$dalTablealbum["album_id"] = array("type"=>3,"varname"=>"album_id");
$dalTablealbum["nama_album"] = array("type"=>200,"varname"=>"nama_album");
$dalTablealbum["deskripsi"] = array("type"=>201,"varname"=>"deskripsi");
$dalTablealbum["tanggaldibuat"] = array("type"=>7,"varname"=>"tanggaldibuat");
$dalTablealbum["user_id"] = array("type"=>3,"varname"=>"user_id");
	$dalTablealbum["album_id"]["key"]=true;

$dal_info["kilua_at_localhost__album"] = &$dalTablealbum;
?>