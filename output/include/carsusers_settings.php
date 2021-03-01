<?php
$tdatacarsusers = array();
$tdatacarsusers[".searchableFields"] = array();
$tdatacarsusers[".ShortName"] = "carsusers";
$tdatacarsusers[".OwnerID"] = "";
$tdatacarsusers[".OriginalTable"] = "carsusers";


$tdatacarsusers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacarsusers[".originalPagesByType"] = $tdatacarsusers[".pagesByType"];
$tdatacarsusers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarsusers[".originalPages"] = $tdatacarsusers[".pages"];
$tdatacarsusers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacarsusers[".originalDefaultPages"] = $tdatacarsusers[".defaultPages"];

//	field labels
$fieldLabelscarsusers = array();
$fieldToolTipscarsusers = array();
$pageTitlescarsusers = array();
$placeHolderscarsusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarsusers["English"] = array();
	$fieldToolTipscarsusers["English"] = array();
	$placeHolderscarsusers["English"] = array();
	$pageTitlescarsusers["English"] = array();
	$fieldLabelscarsusers["English"]["id"] = "Id";
	$fieldToolTipscarsusers["English"]["id"] = "";
	$placeHolderscarsusers["English"]["id"] = "";
	$fieldLabelscarsusers["English"]["password"] = "Password";
	$fieldToolTipscarsusers["English"]["password"] = "";
	$placeHolderscarsusers["English"]["password"] = "";
	$fieldLabelscarsusers["English"]["username"] = "Username";
	$fieldToolTipscarsusers["English"]["username"] = "";
	$placeHolderscarsusers["English"]["username"] = "";
	if (count($fieldToolTipscarsusers["English"]))
		$tdatacarsusers[".isUseToolTips"] = true;
}


	$tdatacarsusers[".NCSearch"] = true;



$tdatacarsusers[".shortTableName"] = "carsusers";
$tdatacarsusers[".nSecOptions"] = 0;

$tdatacarsusers[".mainTableOwnerID"] = "";
$tdatacarsusers[".entityType"] = 0;
$tdatacarsusers[".connId"] = "Cars_at_localhost";


$tdatacarsusers[".strOriginalTableName"] = "carsusers";

	



$tdatacarsusers[".showAddInPopup"] = false;

$tdatacarsusers[".showEditInPopup"] = false;

$tdatacarsusers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarsusers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarsusers[".listAjax"] = false;
//	temporary
$tdatacarsusers[".listAjax"] = false;

	$tdatacarsusers[".audit"] = false;

	$tdatacarsusers[".locking"] = false;


$pages = $tdatacarsusers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarsusers[".edit"] = true;
	$tdatacarsusers[".afterEditAction"] = 1;
	$tdatacarsusers[".closePopupAfterEdit"] = 1;
	$tdatacarsusers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarsusers[".add"] = true;
$tdatacarsusers[".afterAddAction"] = 1;
$tdatacarsusers[".closePopupAfterAdd"] = 1;
$tdatacarsusers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarsusers[".list"] = true;
}



$tdatacarsusers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarsusers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarsusers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarsusers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarsusers[".printFriendly"] = true;
}



$tdatacarsusers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarsusers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarsusers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarsusers[".isUseAjaxSuggest"] = true;

$tdatacarsusers[".rowHighlite"] = true;



									

$tdatacarsusers[".ajaxCodeSnippetAdded"] = false;

$tdatacarsusers[".buttonsAdded"] = false;

$tdatacarsusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarsusers[".isUseTimeForSearch"] = false;


$tdatacarsusers[".badgeColor"] = "4169E1";


$tdatacarsusers[".allSearchFields"] = array();
$tdatacarsusers[".filterFields"] = array();
$tdatacarsusers[".requiredSearchFields"] = array();

$tdatacarsusers[".googleLikeFields"] = array();
$tdatacarsusers[".googleLikeFields"][] = "id";
$tdatacarsusers[".googleLikeFields"][] = "password";
$tdatacarsusers[".googleLikeFields"][] = "username";



$tdatacarsusers[".tableType"] = "list";

$tdatacarsusers[".printerPageOrientation"] = 0;
$tdatacarsusers[".nPrinterPageScale"] = 100;

$tdatacarsusers[".nPrinterSplitRecords"] = 40;

$tdatacarsusers[".geocodingEnabled"] = false;










$tdatacarsusers[".pageSize"] = 20;

$tdatacarsusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarsusers[".strOrderBy"] = $tstrOrderBy;

$tdatacarsusers[".orderindexes"] = array();


$tdatacarsusers[".sqlHead"] = "SELECT id,  password,  username";
$tdatacarsusers[".sqlFrom"] = "FROM carsusers";
$tdatacarsusers[".sqlWhereExpr"] = "";
$tdatacarsusers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarsusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarsusers[".arrGroupsPerPage"] = $arrGPP;

$tdatacarsusers[".highlightSearchResults"] = true;

$tableKeyscarsusers = array();
$tableKeyscarsusers[] = "id";
$tdatacarsusers[".Keys"] = $tableKeyscarsusers;


$tdatacarsusers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carsusers";
	$fdata["Label"] = GetFieldLabel("carsusers","id");
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


	$tdatacarsusers["id"] = $fdata;
		$tdatacarsusers[".searchableFields"][] = "id";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "carsusers";
	$fdata["Label"] = GetFieldLabel("carsusers","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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


	$tdatacarsusers["password"] = $fdata;
		$tdatacarsusers[".searchableFields"][] = "password";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "carsusers";
	$fdata["Label"] = GetFieldLabel("carsusers","username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatacarsusers["username"] = $fdata;
		$tdatacarsusers[".searchableFields"][] = "username";


$tables_data["carsusers"]=&$tdatacarsusers;
$field_labels["carsusers"] = &$fieldLabelscarsusers;
$fieldToolTips["carsusers"] = &$fieldToolTipscarsusers;
$placeHolders["carsusers"] = &$placeHolderscarsusers;
$page_titles["carsusers"] = &$pageTitlescarsusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carsusers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carsusers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carsusers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  password,  username";
$proto0["m_strFrom"] = "FROM carsusers";
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
	"m_strName" => "id",
	"m_strTable" => "carsusers",
	"m_srcTableName" => "carsusers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carsusers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "carsusers",
	"m_srcTableName" => "carsusers"
));

$proto8["m_sql"] = "password";
$proto8["m_srcTableName"] = "carsusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "carsusers",
	"m_srcTableName" => "carsusers"
));

$proto10["m_sql"] = "username";
$proto10["m_srcTableName"] = "carsusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "carsusers";
$proto13["m_srcTableName"] = "carsusers";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "password";
$proto13["m_columns"][] = "username";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "carsusers";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "carsusers";
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
$proto0["m_srcTableName"]="carsusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carsusers = createSqlQuery_carsusers();


	
		;

			

$tdatacarsusers[".sqlquery"] = $queryData_carsusers;



$tableEvents["carsusers"] = new eventsBase;
$tdatacarsusers[".hasEvents"] = false;

?>