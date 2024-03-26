<?php
$dalTablefoto = array();
$dalTablefoto["foto_id"] = array("type"=>3,"varname"=>"foto_id");
$dalTablefoto["judul_foto"] = array("type"=>200,"varname"=>"judul_foto");
$dalTablefoto["deskripsi"] = array("type"=>201,"varname"=>"deskripsi");
$dalTablefoto["tanggalunggah"] = array("type"=>7,"varname"=>"tanggalunggah");
$dalTablefoto["gambar"] = array("type"=>200,"varname"=>"gambar");
$dalTablefoto["album_id"] = array("type"=>3,"varname"=>"album_id");
$dalTablefoto["user_id"] = array("type"=>3,"varname"=>"user_id");
	$dalTablefoto["foto_id"]["key"]=true;

$dal_info["kilua_at_localhost__foto"] = &$dalTablefoto;
?>