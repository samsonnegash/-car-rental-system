<?php
$tdatacarsmodels = array();
$tdatacarsmodels[".searchableFields"] = array();
$tdatacarsmodels[".ShortName"] = "carsmodels";
$tdatacarsmodels[".OwnerID"] = "";
$tdatacarsmodels[".OriginalTable"] = "carsmodels";


$tdatacarsmodels[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatacarsmodels[".originalPagesByType"] = $tdatacarsmodels[".pagesByType"];
$tdatacarsmodels[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatacarsmodels[".originalPages"] = $tdatacarsmodels[".pages"];
$tdatacarsmodels[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatacarsmodels[".originalDefaultPages"] = $tdatacarsmodels[".defaultPages"];

//	field labels
$fieldLabelscarsmodels = array();
$fieldToolTipscarsmodels = array();
$pageTitlescarsmodels = array();
$placeHolderscarsmodels = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarsmodels["English"] = array();
	$fieldToolTipscarsmodels["English"] = array();
	$placeHolderscarsmodels["English"] = array();
	$pageTitlescarsmodels["English"] = array();
	$fieldLabelscarsmodels["English"]["id"] = "Id";
	$fieldToolTipscarsmodels["English"]["id"] = "";
	$placeHolderscarsmodels["English"]["id"] = "";
	$fieldLabelscarsmodels["English"]["make"] = "Make";
	$fieldToolTipscarsmodels["English"]["make"] = "";
	$placeHolderscarsmodels["English"]["make"] = "";
	$fieldLabelscarsmodels["English"]["model"] = "Model";
	$fieldToolTipscarsmodels["English"]["model"] = "";
	$placeHolderscarsmodels["English"]["model"] = "";
	if (count($fieldToolTipscarsmodels["English"]))
		$tdatacarsmodels[".isUseToolTips"] = true;
}


	$tdatacarsmodels[".NCSearch"] = true;



$tdatacarsmodels[".shortTableName"] = "carsmodels";
$tdatacarsmodels[".nSecOptions"] = 0;

$tdatacarsmodels[".mainTableOwnerID"] = "";
$tdatacarsmodels[".entityType"] = 0;
$tdatacarsmodels[".connId"] = "Cars_at_localhost";


$tdatacarsmodels[".strOriginalTableName"] = "carsmodels";

	



$tdatacarsmodels[".showAddInPopup"] = false;

$tdatacarsmodels[".showEditInPopup"] = false;

$tdatacarsmodels[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarsmodels[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarsmodels[".listAjax"] = false;
//	temporary
$tdatacarsmodels[".listAjax"] = false;

	$tdatacarsmodels[".audit"] = false;

	$tdatacarsmodels[".locking"] = false;


$pages = $tdatacarsmodels[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarsmodels[".edit"] = true;
	$tdatacarsmodels[".afterEditAction"] = 1;
	$tdatacarsmodels[".closePopupAfterEdit"] = 1;
	$tdatacarsmodels[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarsmodels[".add"] = true;
$tdatacarsmodels[".afterAddAction"] = 1;
$tdatacarsmodels[".closePopupAfterAdd"] = 1;
$tdatacarsmodels[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarsmodels[".list"] = true;
}



$tdatacarsmodels[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarsmodels[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarsmodels[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarsmodels[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarsmodels[".printFriendly"] = true;
}



$tdatacarsmodels[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarsmodels[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarsmodels[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarsmodels[".isUseAjaxSuggest"] = true;

$tdatacarsmodels[".rowHighlite"] = true;



									

$tdatacarsmodels[".ajaxCodeSnippetAdded"] = false;

$tdatacarsmodels[".buttonsAdded"] = false;

$tdatacarsmodels[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarsmodels[".isUseTimeForSearch"] = false;


$tdatacarsmodels[".badgeColor"] = "E07878";


$tdatacarsmodels[".allSearchFields"] = array();
$tdatacarsmodels[".filterFields"] = array();
$tdatacarsmodels[".requiredSearchFields"] = array();

$tdatacarsmodels[".googleLikeFields"] = array();
$tdatacarsmodels[".googleLikeFields"][] = "id";
$tdatacarsmodels[".googleLikeFields"][] = "make";
$tdatacarsmodels[".googleLikeFields"][] = "model";



$tdatacarsmodels[".tableType"] = "list";

$tdatacarsmodels[".printerPageOrientation"] = 0;
$tdatacarsmodels[".nPrinterPageScale"] = 100;

$tdatacarsmodels[".nPrinterSplitRecords"] = 40;

$tdatacarsmodels[".geocodingEnabled"] = false;










$tdatacarsmodels[".pageSize"] = 20;

$tdatacarsmodels[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarsmodels[".strOrderBy"] = $tstrOrderBy;

$tdatacarsmodels[".orderindexes"] = array();


$tdatacarsmodels[".sqlHead"] = "SELECT id,  make,  model";
$tdatacarsmodels[".sqlFrom"] = "FROM carsmodels";
$tdatacarsmodels[".sqlWhereExpr"] = "";
$tdatacarsmodels[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarsmodels[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarsmodels[".arrGroupsPerPage"] = $arrGPP;

$tdatacarsmodels[".highlightSearchResults"] = true;

$tableKeyscarsmodels = array();
$tableKeyscarsmodels[] = "id";
$tdatacarsmodels[".Keys"] = $tableKeyscarsmodels;


$tdatacarsmodels[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carsmodels";
	$fdata["Label"] = GetFieldLabel("carsmodels","id");
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


	$tdatacarsmodels["id"] = $fdata;
		$tdatacarsmodels[".searchableFields"][] = "id";
//	make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "make";
	$fdata["GoodName"] = "make";
	$fdata["ownerTable"] = "carsmodels";
	$fdata["Label"] = GetFieldLabel("carsmodels","make");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "make";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "make";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "carsmake";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "make";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatacarsmodels["make"] = $fdata;
		$tdatacarsmodels[".searchableFields"][] = "make";
//	model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "model";
	$fdata["GoodName"] = "model";
	$fdata["ownerTable"] = "carsmodels";
	$fdata["Label"] = GetFieldLabel("carsmodels","model");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "model";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "model";

	
	
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


	$tdatacarsmodels["model"] = $fdata;
		$tdatacarsmodels[".searchableFields"][] = "model";


$tables_data["carsmodels"]=&$tdatacarsmodels;
$field_labels["carsmodels"] = &$fieldLabelscarsmodels;
$fieldToolTips["carsmodels"] = &$fieldToolTipscarsmodels;
$placeHolders["carsmodels"] = &$placeHolderscarsmodels;
$page_titles["carsmodels"] = &$pageTitlescarsmodels;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carsmodels"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carsmodels"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carsmodels()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  make,  model";
$proto0["m_strFrom"] = "FROM carsmodels";
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
	"m_strTable" => "carsmodels",
	"m_srcTableName" => "carsmodels"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carsmodels";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "make",
	"m_strTable" => "carsmodels",
	"m_srcTableName" => "carsmodels"
));

$proto8["m_sql"] = "make";
$proto8["m_srcTableName"] = "carsmodels";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "model",
	"m_strTable" => "carsmodels",
	"m_srcTableName" => "carsmodels"
));

$proto10["m_sql"] = "model";
$proto10["m_srcTableName"] = "carsmodels";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "carsmodels";
$proto13["m_srcTableName"] = "carsmodels";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "make";
$proto13["m_columns"][] = "model";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "carsmodels";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "carsmodels";
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
$proto0["m_srcTableName"]="carsmodels";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carsmodels = createSqlQuery_carsmodels();


	
		;

			

$tdatacarsmodels[".sqlquery"] = $queryData_carsmodels;



$tableEvents["carsmodels"] = new eventsBase;
$tdatacarsmodels[".hasEvents"] = false;

?>