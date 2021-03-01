<?php
$dalTablecarsmake = array();
$dalTablecarsmake["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecarsmake["make"] = array("type"=>200,"varname"=>"make", "name" => "make");
$dalTablecarsmake["logo"] = array("type"=>200,"varname"=>"logo", "name" => "logo");
	$dalTablecarsmake["id"]["key"]=true;

$dal_info["Cars_at_localhost__carsmake"] = &$dalTablecarsmake;
?>