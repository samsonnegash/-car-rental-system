<?php
$dalTablecarsmodels = array();
$dalTablecarsmodels["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecarsmodels["make"] = array("type"=>3,"varname"=>"make", "name" => "make");
$dalTablecarsmodels["model"] = array("type"=>200,"varname"=>"model", "name" => "model");
	$dalTablecarsmodels["id"]["key"]=true;

$dal_info["Cars_at_localhost__carsmodels"] = &$dalTablecarsmodels;
?>