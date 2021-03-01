<?php
$tdatacarscategory = array();
$tdatacarscategory[".searchableFields"] = array();
$tdatacarscategory[".ShortName"] = "carscategory";
$tdatacarscategory[".OwnerID"] = "";
$tdatacarscategory[".OriginalTable"] = "carscategory";


$tdatacarscategory[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatacarscategory[".originalPagesByType"] = $tdatacarscategory[".pagesByType"];
$tdatacarscategory[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatacarscategory[".originalPages"] = $tdatacarscategory[".pages"];
$tdatacarscategory[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatacarscategory[".originalDefaultPages"] = $tdatacarscategory[".defaultPages"];

//	field labels
$fieldLabelscarscategory = array();
$fieldToolTipscarscategory = array();
$pageTitlescarscategory = array();
$placeHolderscarscategory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarscategory["English"] = array();
	$fieldToolTipscarscategory["English"] = array();
	$placeHolderscarscategory["English"] = array();
	$pageTitlescarscategory["English"] = array();
	$fieldLabelscarscategory["English"]["id"] = "Id";
	$fieldToolTipscarscategory["English"]["id"] = "";
	$placeHolderscarscategory["English"]["id"] = "";
	$fieldLabelscarscategory["English"]["category"] = "Category";
	$fieldToolTipscarscategory["English"]["category"] = "";
	$placeHolderscarscategory["English"]["category"] = "";
	if (count($fieldToolTipscarscategory["English"]))
		$tdatacarscategory[".isUseToolTips"] = true;
}


	$tdatacarscategory[".NCSearch"] = true;



$tdatacarscategory[".shortTableName"] = "carscategory";
$tdatacarscategory[".nSecOptions"] = 0;

$tdatacarscategory[".mainTableOwnerID"] = "";
$tdatacarscategory[".entityType"] = 0;
$tdatacarscategory[".connId"] = "Cars_at_localhost";


$tdatacarscategory[".strOriginalTableName"] = "carscategory";

	



$tdatacarscategory[".showAddInPopup"] = false;

$tdatacarscategory[".showEditInPopup"] = false;

$tdatacarscategory[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarscategory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarscategory[".listAjax"] = false;
//	temporary
$tdatacarscategory[".listAjax"] = false;

	$tdatacarscategory[".audit"] = false;

	$tdatacarscategory[".locking"] = false;


$pages = $tdatacarscategory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarscategory[".edit"] = true;
	$tdatacarscategory[".afterEditAction"] = 1;
	$tdatacarscategory[".closePopupAfterEdit"] = 1;
	$tdatacarscategory[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarscategory[".add"] = true;
$tdatacarscategory[".afterAddAction"] = 1;
$tdatacarscategory[".closePopupAfterAdd"] = 1;
$tdatacarscategory[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarscategory[".list"] = true;
}



$tdatacarscategory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarscategory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarscategory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarscategory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarscategory[".printFriendly"] = true;
}



$tdatacarscategory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarscategory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarscategory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarscategory[".isUseAjaxSuggest"] = true;

$tdatacarscategory[".rowHighlite"] = true;



									

$tdatacarscategory[".ajaxCodeSnippetAdded"] = false;

$tdatacarscategory[".buttonsAdded"] = false;

$tdatacarscategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarscategory[".isUseTimeForSearch"] = false;




$tdatacarscategory[".allSearchFields"] = array();
$tdatacarscategory[".filterFields"] = array();
$tdatacarscategory[".requiredSearchFields"] = array();

$tdatacarscategory[".googleLikeFields"] = array();
$tdatacarscategory[".googleLikeFields"][] = "id";
$tdatacarscategory[".googleLikeFields"][] = "category";



$tdatacarscategory[".tableType"] = "list";

$tdatacarscategory[".printerPageOrientation"] = 0;
$tdatacarscategory[".nPrinterPageScale"] = 100;

$tdatacarscategory[".nPrinterSplitRecords"] = 40;

$tdatacarscategory[".geocodingEnabled"] = false;










$tdatacarscategory[".pageSize"] = 20;

$tdatacarscategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarscategory[".strOrderBy"] = $tstrOrderBy;

$tdatacarscategory[".orderindexes"] = array();


$tdatacarscategory[".sqlHead"] = "SELECT id,  category";
$tdatacarscategory[".sqlFrom"] = "FROM carscategory";
$tdatacarscategory[".sqlWhereExpr"] = "";
$tdatacarscategory[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarscategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarscategory[".arrGroupsPerPage"] = $arrGPP;

$tdatacarscategory[".highlightSearchResults"] = true;

$tableKeyscarscategory = array();
$tableKeyscarscategory[] = "id";
$tdatacarscategory[".Keys"] = $tableKeyscarscategory;


$tdatacarscategory[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carscategory";
	$fdata["Label"] = GetFieldLabel("carscategory","id");
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


	$tdatacarscategory["id"] = $fdata;
		$tdatacarscategory[".searchableFields"][] = "id";
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "carscategory";
	$fdata["Label"] = GetFieldLabel("carscategory","category");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacarscategory["category"] = $fdata;
		$tdatacarscategory[".searchableFields"][] = "category";


$tables_data["carscategory"]=&$tdatacarscategory;
$field_labels["carscategory"] = &$fieldLabelscarscategory;
$fieldToolTips["carscategory"] = &$fieldToolTipscarscategory;
$placeHolders["carscategory"] = &$placeHolderscarscategory;
$page_titles["carscategory"] = &$pageTitlescarscategory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carscategory"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carscategory"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carscategory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  category";
$proto0["m_strFrom"] = "FROM carscategory";
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
	"m_strTable" => "carscategory",
	"m_srcTableName" => "carscategory"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "carscategory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "carscategory",
	"m_srcTableName" => "carscategory"
));

$proto8["m_sql"] = "category";
$proto8["m_srcTableName"] = "carscategory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "carscategory";
$proto11["m_srcTableName"] = "carscategory";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "category";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "carscategory";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "carscategory";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="carscategory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carscategory = createSqlQuery_carscategory();


	
		;

		

$tdatacarscategory[".sqlquery"] = $queryData_carscategory;



$tableEvents["carscategory"] = new eventsBase;
$tdatacarscategory[".hasEvents"] = false;

?>