<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["ModifyMenuItem"]=true;


//	onscreen events
		$this->events["carscars_snippet_color_options"] = true;
		$this->events["carscars_snippet2_color_option"] = true;
		$this->events["carsform_snippet_Cars_information"] = true;
		$this->events["Your_info"] = true;
		$this->events["Cars_Information"] = true;
		$this->events["carscars_snippet"] = true;
		$this->events["carscars_snippet1"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		if( $_SESSION["UserID"]!="Guest" && $_SESSION["UserID"]!="" ){
	header("Location:carscars_list.php?page=list1");
	exit();
}


;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		if($_SESSION["UserID"]=="Guest" || $_SESSION["UserID"]=="")
	return false;
else
	return true;
;		
} // function ModifyMenuItem

		

//	onscreen events
	function event_carscars_snippet_color_options(&$params)
	{
	echo "<style>";
$rs = DB::Query("select * from carsbcolor");
while( $data = $rs->fetchAssoc() )
{
	echo "[id^=value_color_] option[value='".$data["id"]."'] {
		background-color: ".$data["rgb"].";  
	}";
}
echo "</style>";
	;
}
	function event_carscars_snippet2_color_option(&$params)
	{
	echo "<style>";
$rs = DB::Query("select * from carsbcolor");
while( $data = $rs->fetchAssoc() )
{
	echo "[id^=value_color_] option[value='".$data["id"]."'] {
		background-color: ".$data["rgb"].";  
	}";
}
echo "</style>";
	;
}
	function event_carsform_snippet_Cars_information(&$params)
	{
	// Put your code here.
echo "Cars information";
	;
}
	function event_Your_info(&$params)
	{
	// Put your code here.
echo "Your contact information";
	;
}
	function event_Cars_Information(&$params)
	{
	global $conn;
global $dal;
if($_REQUEST["editid1"])
{
	$rs = DB::Query("select * from carscars where ".AddFieldWrappers("id")."=".$_REQUEST["editid1"]);
	if($data = $rs->fetchAssoc())
	{
		$rsmake = DB::Query("select * from carsmake where ".AddFieldWrappers("id")."=".$data["Make"]);
		if($datamake = $rsmake->fetchAssoc())
			$_SESSION["Make"] = $datamake["make"];
		$rsmodel = DB::Query("select * from carsmodels where ".AddFieldWrappers("id")."=" . $data["Model"]);
		if($datamodel = $rsmodel->fetchAssoc())
			$_SESSION["Model"] = $datamodel["model"];
		$_SESSION["YearOfMake"] = $data["YearOfMake"];
		$res = my_json_decode($data["Picture"]);
		$first = true;
		$out = "";
		foreach($res as $val){
			$style = "";
				if(!$first)
					$style = "style=\"display:none\"";
				else
					$_SESSION["Email_Picture"] = $val["name"];
				$out.= "<li ".$style." data-src=\"".GetWebRootPath().$val["name"]."\">";
				$out.= "<a href=\"\">";
				$out.= "<img width=150px class=\"img-responsive\" src=\"".GetWebRootPath().$val["thumbnail"]."\">";
				$out.= "</a></li>";
				$first = false;
		}
		$value = "<div style=\"width:150px;padding-top:10px\">".
		"<ul id=\"lightgallery\" class=\"list-unstyled row\">".
		$out."</ul></div>";

		$_SESSION["Picture"] = $value;


		$_SESSION["id"] = $data["id"];
	}
}

$mess="<table width=300px align=center>";
$mess .= "<TR><TD width=150px><b>Model</b><br>".$_SESSION["Make"]." ".$_SESSION["Model"]."</td><td rowspan=2>".$_SESSION["Picture"]."</td></tr>";
$mess .= "<TR><TD><b>Year of make</b><br>".$_SESSION["YearOfMake"]."</td></tr>";
$mess .= "</table>";
echo $mess;
	;
}
	function event_carscars_snippet(&$params)
	{
	// Put your code here.
echo "Your message";
	;
}
	function event_carscars_snippet1(&$params)
	{
	echo "<a href='login.php' type='button' class='btn btn-primary' id=customLogin>Login</a>";
	;
}




}
?>
