<?php
$dalTablecarsform = array();
$dalTablecarsform["car"] = array("type"=>200,"varname"=>"car", "name" => "car");
$dalTablecarsform["comments"] = array("type"=>201,"varname"=>"comments", "name" => "comments");
$dalTablecarsform["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablecarsform["firstname"] = array("type"=>200,"varname"=>"firstname", "name" => "firstname");
$dalTablecarsform["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecarsform["lastname"] = array("type"=>200,"varname"=>"lastname", "name" => "lastname");
$dalTablecarsform["phone"] = array("type"=>200,"varname"=>"phone", "name" => "phone");
	$dalTablecarsform["id"]["key"]=true;

$dal_info["Cars_at_localhost__carsform"] = &$dalTablecarsform;
?>