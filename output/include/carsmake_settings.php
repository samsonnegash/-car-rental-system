<?php
$tdatacarsmake = array();
$tdatacarsmake[".searchableFields"] = array();
$tdatacarsmake[".ShortName"] = "carsmake";
$tdatacarsmake[".OwnerID"] = "";
$tdatacarsmake[".OriginalTable"] = "carsmake";


$tdatacarsmake[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacarsmake[".originalPagesByType"] = $tdatacarsmake[".pagesByType"];
$tdatacarsmake[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacarsmake[".originalPages"] = $tdatacarsmake[".pages"];
$tdatacarsmake[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacarsmake[".originalDefaultPages"] = $tdatacarsmake[".defaultPages"];

//	field labels
$fieldLabelscarsmake = array();
$fieldToolTipscarsmake = array();
$pageTitlescarsmake = array();
$placeHolderscarsmake = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarsmake["English"] = array();
	$fieldToolTipscarsmake["English"] = array();
	$placeHolderscarsmake["English"] = array();
	$pageTitlescarsmake["English"] = array();
	$fieldLabelscarsmake["English"]["id"] = "Id";
	$fieldToolTipscarsmake["English"]["id"] = "";
	$placeHolderscarsmake["English"]["id"] = "";
	$fieldLabelscarsmake["English"]["make"] = "Make";
	$fieldToolTipscarsmake["English"]["make"] = "";
	$placeHolderscarsmake["English"]["make"] = "";
	$fieldLabelscarsmake["English"]["logo"] = "Logo";
	$fieldToolTipscarsmake["English"]["logo"] = "";
	$placeHolderscarsmake["English"]["logo"] = "";
	if (count($fieldToolTipscarsmake["English"]))
		$tdatacarsmake[".isUseToolTips"] = true;
}


	$tdatacarsmake[".NCSearch"] = true;



$tdatacarsmake[".shortTableName"] = "carsmake";
$tdatacarsmake[".nSecOptions"] = 0;

$tdatacarsmake[".mainTableOwnerID"] = "";
$tdatacarsmake[".entityType"] = 0;
$tdatacarsmake[".connId"] = "Cars_at_localhost";


$tdatacarsmake[".strOriginalTableName"] = "carsmake";

	



$tdatacarsmake[".showAddInPopup"] = false;

$tdatacarsmake[".showEditInPopup"] = false;

$tdatacarsmake[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarsmake[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarsmake[".listAjax"] = false;
//	temporary
$tdatacarsmake[".listAjax"] = false;

	$tdatacarsmake[".audit"] = false;

	$tdatacarsmake[".locking"] = false;


$pages = $tdatacarsmake[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarsmake[".edit"] = true;
	$tdatacarsmake[".afterEditAction"] = 1;
	$tdatacarsmake[".closePopupAfterEdit"] = 1;
	$tdatacarsmake[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarsmake[".add"] = true;
$tdatacarsmake[".afterAddAction"] = 1;
$tdatacarsmake[".closePopupAfterAdd"] = 1;
$tdatacarsmake[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarsmake[".list"] = true;
}



$tdatacarsmake[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarsmake[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarsmake[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarsmake[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarsmake[".printFriendly"] = true;
}



$tdatacarsmake[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarsmake[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarsmake[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarsmake[".isUseAjaxSuggest"] = true;

$tdatacarsmake[".rowHighlite"] = true;



									

$tdatacarsmake[".ajaxCodeSnippetAdded"] = false;

$tdatacarsmake[".buttonsAdded"] = false;

$tdatacarsmake[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarsmake[".isUseTimeForSearch"] = false;


$tdatacarsmake[".badgeColor"] = "DC143C";


$tdatacarsmake[".allSearchFields"] = array();
$tdatacarsmake[".filterFields"] = array();
$tdatacarsmake[".requiredSearchFields"] = array();

$tdatacarsmake[".googleLikeFields"] = array();
$tdatacarsmake[".googleLikeFields"][] = "id";
$tdatacarsmake[".googleLikeFields"][] = "make";
$tdatacarsmake[".googleLikeFields"][] = "logo";



$tdatacarsmake[".tableType"] = "list";

$tdatacarsmake[".printerPageOrientation"] = 0;
$tdatacarsmake[".nPrinterPageScale"] = 100;

$tdatacarsmake[".nPrinterSplitRecords"] = 40;

$tdatacarsmake[".geocodingEnabled"] = false;










$tdatacarsmake[".pageSize"] = 20;

$tdatacarsmake[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarsmake[".strOrderBy"] = $tstrOrderBy;

$tdatacarsmake[".orderindexes"] = array();


$tdatacarsmake[".sqlHead"] = "SELECT id,  make,  logo";
$tdatacarsmake[".sqlFrom"] = "FROM carsmake";
$tdatacarsmake[".sqlWhereExpr"] = "";
$tdatacarsmake[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarsmake[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarsmake[".arrGroupsPerPage"] = $arrGPP;

$tdatacarsmake[".highlightSearchResults"] = true;

$tableKeyscarsmake = array();
$tableKeyscarsmake[] = "id";
$tdatacarsmake[".Keys"] = $tableKeyscarsmake;


$tdatacarsmake[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carsmake";
	$fdata["Label"] = GetFieldLabel("carsmake","id");
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


	$tdatacarsmake["id"] = $fdata;
		$tdatacarsmake[".searchableFields"][] = "id";
//	make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "make";
	$fdata["GoodName"] = "make";
	$fdata["ownerTable"] = "carsmake";
	$fdata["Label"] = GetFieldLabel("carsmake","make");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatacarsmake["make"] = $fdata;
		$tdatacarsmake[".searchableFields"][] = "make";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "carsmake";
	$fdata["Label"] = GetFieldLabel("carsmake","logo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "logo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "logo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 150;
	$vdata["ImageHeight"] = 0;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatacarsmake["logo"] = $fdata;
		$tdatacarsmake[".searchableFields"][] = "logo";


$tables_data["carsmake"]=&$tdatacarsmake;
$field_labels["carsmake"] = &$fieldLabelscarsmake;
$fieldToolTips["carsmake"] = &$fieldToolTipscarsmake;
$placeHolders["carsmake"] = &$placeHolderscarsmake;
$page_titles["carsmake"] = &$pageTitlescarsmake;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carsmake"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carsmake"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carsmake()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  make,  logo";
$proto0["m_strFrom"] = "FROM carsmake";
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
	"m_strTable" => "carsmake",
	"m_srcTableName" => "carsmake"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carsmake";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "make",
	"m_strTable" => "carsmake",
	"m_srcTableName" => "carsmake"
));

$proto8["m_sql"] = "make";
$proto8["m_srcTableName"] = "carsmake";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "carsmake",
	"m_srcTableName" => "carsmake"
));

$proto10["m_sql"] = "logo";
$proto10["m_srcTableName"] = "carsmake";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "carsmake";
$proto13["m_srcTableName"] = "carsmake";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "make";
$proto13["m_columns"][] = "logo";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "carsmake";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "carsmake";
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
$proto0["m_srcTableName"]="carsmake";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carsmake = createSqlQuery_carsmake();


	
		;

			

$tdatacarsmake[".sqlquery"] = $queryData_carsmake;



$tableEvents["carsmake"] = new eventsBase;
$tdatacarsmake[".hasEvents"] = false;

?>