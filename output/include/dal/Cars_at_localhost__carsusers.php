<?php
$dalTablecarsusers = array();
$dalTablecarsusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecarsusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTablecarsusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
	$dalTablecarsusers["id"]["key"]=true;

$dal_info["Cars_at_localhost__carsusers"] = &$dalTablecarsusers;
?>