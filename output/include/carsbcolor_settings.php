<?php
$tdatacarsbcolor = array();
$tdatacarsbcolor[".searchableFields"] = array();
$tdatacarsbcolor[".ShortName"] = "carsbcolor";
$tdatacarsbcolor[".OwnerID"] = "";
$tdatacarsbcolor[".OriginalTable"] = "carsbcolor";


$tdatacarsbcolor[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacarsbcolor[".originalPagesByType"] = $tdatacarsbcolor[".pagesByType"];
$tdatacarsbcolor[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacarsbcolor[".originalPages"] = $tdatacarsbcolor[".pages"];
$tdatacarsbcolor[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacarsbcolor[".originalDefaultPages"] = $tdatacarsbcolor[".defaultPages"];

//	field labels
$fieldLabelscarsbcolor = array();
$fieldToolTipscarsbcolor = array();
$pageTitlescarsbcolor = array();
$placeHolderscarsbcolor = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarsbcolor["English"] = array();
	$fieldToolTipscarsbcolor["English"] = array();
	$placeHolderscarsbcolor["English"] = array();
	$pageTitlescarsbcolor["English"] = array();
	$fieldLabelscarsbcolor["English"]["color"] = "Color";
	$fieldToolTipscarsbcolor["English"]["color"] = "";
	$placeHolderscarsbcolor["English"]["color"] = "";
	$fieldLabelscarsbcolor["English"]["id"] = "Id";
	$fieldToolTipscarsbcolor["English"]["id"] = "";
	$placeHolderscarsbcolor["English"]["id"] = "";
	$fieldLabelscarsbcolor["English"]["rgb"] = "Rgb";
	$fieldToolTipscarsbcolor["English"]["rgb"] = "";
	$placeHolderscarsbcolor["English"]["rgb"] = "";
	if (count($fieldToolTipscarsbcolor["English"]))
		$tdatacarsbcolor[".isUseToolTips"] = true;
}


	$tdatacarsbcolor[".NCSearch"] = true;



$tdatacarsbcolor[".shortTableName"] = "carsbcolor";
$tdatacarsbcolor[".nSecOptions"] = 0;

$tdatacarsbcolor[".mainTableOwnerID"] = "";
$tdatacarsbcolor[".entityType"] = 0;
$tdatacarsbcolor[".connId"] = "Cars_at_localhost";


$tdatacarsbcolor[".strOriginalTableName"] = "carsbcolor";

	



$tdatacarsbcolor[".showAddInPopup"] = false;

$tdatacarsbcolor[".showEditInPopup"] = false;

$tdatacarsbcolor[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarsbcolor[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarsbcolor[".listAjax"] = false;
//	temporary
$tdatacarsbcolor[".listAjax"] = false;

	$tdatacarsbcolor[".audit"] = false;

	$tdatacarsbcolor[".locking"] = false;


$pages = $tdatacarsbcolor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarsbcolor[".edit"] = true;
	$tdatacarsbcolor[".afterEditAction"] = 1;
	$tdatacarsbcolor[".closePopupAfterEdit"] = 1;
	$tdatacarsbcolor[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarsbcolor[".add"] = true;
$tdatacarsbcolor[".afterAddAction"] = 1;
$tdatacarsbcolor[".closePopupAfterAdd"] = 1;
$tdatacarsbcolor[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarsbcolor[".list"] = true;
}



$tdatacarsbcolor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarsbcolor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarsbcolor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarsbcolor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarsbcolor[".printFriendly"] = true;
}



$tdatacarsbcolor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarsbcolor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarsbcolor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarsbcolor[".isUseAjaxSuggest"] = true;

$tdatacarsbcolor[".rowHighlite"] = true;



									

$tdatacarsbcolor[".ajaxCodeSnippetAdded"] = false;

$tdatacarsbcolor[".buttonsAdded"] = false;

$tdatacarsbcolor[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacarsbcolor[".isUseTimeForSearch"] = false;


$tdatacarsbcolor[".badgeColor"] = "5F9EA0";


$tdatacarsbcolor[".allSearchFields"] = array();
$tdatacarsbcolor[".filterFields"] = array();
$tdatacarsbcolor[".requiredSearchFields"] = array();

$tdatacarsbcolor[".googleLikeFields"] = array();
$tdatacarsbcolor[".googleLikeFields"][] = "color";
$tdatacarsbcolor[".googleLikeFields"][] = "id";
$tdatacarsbcolor[".googleLikeFields"][] = "rgb";



$tdatacarsbcolor[".tableType"] = "list";

$tdatacarsbcolor[".printerPageOrientation"] = 0;
$tdatacarsbcolor[".nPrinterPageScale"] = 100;

$tdatacarsbcolor[".nPrinterSplitRecords"] = 40;

$tdatacarsbcolor[".geocodingEnabled"] = false;










$tdatacarsbcolor[".pageSize"] = 20;

$tdatacarsbcolor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarsbcolor[".strOrderBy"] = $tstrOrderBy;

$tdatacarsbcolor[".orderindexes"] = array();


$tdatacarsbcolor[".sqlHead"] = "SELECT color,  id,  rgb";
$tdatacarsbcolor[".sqlFrom"] = "FROM carsbcolor";
$tdatacarsbcolor[".sqlWhereExpr"] = "";
$tdatacarsbcolor[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarsbcolor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarsbcolor[".arrGroupsPerPage"] = $arrGPP;

$tdatacarsbcolor[".highlightSearchResults"] = true;

$tableKeyscarsbcolor = array();
$tableKeyscarsbcolor[] = "id";
$tdatacarsbcolor[".Keys"] = $tableKeyscarsbcolor;


$tdatacarsbcolor[".hideMobileList"] = array();




//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "carsbcolor";
	$fdata["Label"] = GetFieldLabel("carsbcolor","color");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "color";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacarsbcolor["color"] = $fdata;
		$tdatacarsbcolor[".searchableFields"][] = "color";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carsbcolor";
	$fdata["Label"] = GetFieldLabel("carsbcolor","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacarsbcolor["id"] = $fdata;
		$tdatacarsbcolor[".searchableFields"][] = "id";
//	rgb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rgb";
	$fdata["GoodName"] = "rgb";
	$fdata["ownerTable"] = "carsbcolor";
	$fdata["Label"] = GetFieldLabel("carsbcolor","rgb");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rgb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rgb";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "ColorPicker");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacarsbcolor["rgb"] = $fdata;
		$tdatacarsbcolor[".searchableFields"][] = "rgb";


$tables_data["carsbcolor"]=&$tdatacarsbcolor;
$field_labels["carsbcolor"] = &$fieldLabelscarsbcolor;
$fieldToolTips["carsbcolor"] = &$fieldToolTipscarsbcolor;
$placeHolders["carsbcolor"] = &$placeHolderscarsbcolor;
$page_titles["carsbcolor"] = &$pageTitlescarsbcolor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carsbcolor"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carsbcolor"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carsbcolor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "color,  id,  rgb";
$proto0["m_strFrom"] = "FROM carsbcolor";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "carsbcolor",
	"m_srcTableName" => "carsbcolor"
));

$proto6["m_sql"] = "color";
$proto6["m_srcTableName"] = "carsbcolor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "carsbcolor",
	"m_srcTableName" => "carsbcolor"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "carsbcolor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rgb",
	"m_strTable" => "carsbcolor",
	"m_srcTableName" => "carsbcolor"
));

$proto10["m_sql"] = "rgb";
$proto10["m_srcTableName"] = "carsbcolor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "carsbcolor";
$proto13["m_srcTableName"] = "carsbcolor";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "color";
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "rgb";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "carsbcolor";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "carsbcolor";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="carsbcolor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carsbcolor = createSqlQuery_carsbcolor();


	
		;

			

$tdatacarsbcolor[".sqlquery"] = $queryData_carsbcolor;



include_once(getabspath("include/carsbcolor_events.php"));
$tableEvents["carsbcolor"] = new eventclass_carsbcolor;
$tdatacarsbcolor[".hasEvents"] = true;

?>