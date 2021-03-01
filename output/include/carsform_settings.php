<?php
$tdatacarsform = array();
$tdatacarsform[".searchableFields"] = array();
$tdatacarsform[".ShortName"] = "carsform";
$tdatacarsform[".OwnerID"] = "";
$tdatacarsform[".OriginalTable"] = "carsform";


$tdatacarsform[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" );
$tdatacarsform[".originalPagesByType"] = $tdatacarsform[".pagesByType"];
$tdatacarsform[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" ) );
$tdatacarsform[".originalPages"] = $tdatacarsform[".pages"];
$tdatacarsform[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"search\":\"search\"}" );
$tdatacarsform[".originalDefaultPages"] = $tdatacarsform[".defaultPages"];

//	field labels
$fieldLabelscarsform = array();
$fieldToolTipscarsform = array();
$pageTitlescarsform = array();
$placeHolderscarsform = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarsform["English"] = array();
	$fieldToolTipscarsform["English"] = array();
	$placeHolderscarsform["English"] = array();
	$pageTitlescarsform["English"] = array();
	$fieldLabelscarsform["English"]["car"] = "Car";
	$fieldToolTipscarsform["English"]["car"] = "";
	$placeHolderscarsform["English"]["car"] = "";
	$fieldLabelscarsform["English"]["comments"] = "Comments";
	$fieldToolTipscarsform["English"]["comments"] = "";
	$placeHolderscarsform["English"]["comments"] = "";
	$fieldLabelscarsform["English"]["email"] = "Email";
	$fieldToolTipscarsform["English"]["email"] = "";
	$placeHolderscarsform["English"]["email"] = "";
	$fieldLabelscarsform["English"]["firstname"] = "First name";
	$fieldToolTipscarsform["English"]["firstname"] = "";
	$placeHolderscarsform["English"]["firstname"] = "";
	$fieldLabelscarsform["English"]["id"] = "Id";
	$fieldToolTipscarsform["English"]["id"] = "";
	$placeHolderscarsform["English"]["id"] = "";
	$fieldLabelscarsform["English"]["lastname"] = "Last name";
	$fieldToolTipscarsform["English"]["lastname"] = "";
	$placeHolderscarsform["English"]["lastname"] = "";
	$fieldLabelscarsform["English"]["phone"] = "Phone";
	$fieldToolTipscarsform["English"]["phone"] = "";
	$placeHolderscarsform["English"]["phone"] = "";
	if (count($fieldToolTipscarsform["English"]))
		$tdatacarsform[".isUseToolTips"] = true;
}


	$tdatacarsform[".NCSearch"] = true;



$tdatacarsform[".shortTableName"] = "carsform";
$tdatacarsform[".nSecOptions"] = 0;

$tdatacarsform[".mainTableOwnerID"] = "";
$tdatacarsform[".entityType"] = 0;
$tdatacarsform[".connId"] = "Cars_at_localhost";


$tdatacarsform[".strOriginalTableName"] = "carsform";

	



$tdatacarsform[".showAddInPopup"] = false;

$tdatacarsform[".showEditInPopup"] = false;

$tdatacarsform[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarsform[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarsform[".listAjax"] = false;
//	temporary
$tdatacarsform[".listAjax"] = false;

	$tdatacarsform[".audit"] = false;

	$tdatacarsform[".locking"] = false;


$pages = $tdatacarsform[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarsform[".edit"] = true;
	$tdatacarsform[".afterEditAction"] = 1;
	$tdatacarsform[".closePopupAfterEdit"] = 1;
	$tdatacarsform[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarsform[".add"] = true;
$tdatacarsform[".afterAddAction"] = 1;
$tdatacarsform[".closePopupAfterAdd"] = 1;
$tdatacarsform[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarsform[".list"] = true;
}



$tdatacarsform[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacarsform[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarsform[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarsform[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarsform[".printFriendly"] = true;
}



$tdatacarsform[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarsform[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarsform[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarsform[".isUseAjaxSuggest"] = true;

$tdatacarsform[".rowHighlite"] = true;



									

$tdatacarsform[".ajaxCodeSnippetAdded"] = false;

$tdatacarsform[".buttonsAdded"] = false;

$tdatacarsform[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacarsform[".isUseTimeForSearch"] = false;


$tdatacarsform[".badgeColor"] = "DAA520";


$tdatacarsform[".allSearchFields"] = array();
$tdatacarsform[".filterFields"] = array();
$tdatacarsform[".requiredSearchFields"] = array();

$tdatacarsform[".googleLikeFields"] = array();
$tdatacarsform[".googleLikeFields"][] = "car";
$tdatacarsform[".googleLikeFields"][] = "comments";
$tdatacarsform[".googleLikeFields"][] = "email";
$tdatacarsform[".googleLikeFields"][] = "firstname";
$tdatacarsform[".googleLikeFields"][] = "id";
$tdatacarsform[".googleLikeFields"][] = "lastname";
$tdatacarsform[".googleLikeFields"][] = "phone";



$tdatacarsform[".tableType"] = "list";

$tdatacarsform[".printerPageOrientation"] = 0;
$tdatacarsform[".nPrinterPageScale"] = 100;

$tdatacarsform[".nPrinterSplitRecords"] = 40;

$tdatacarsform[".geocodingEnabled"] = false;










$tdatacarsform[".pageSize"] = 20;

$tdatacarsform[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarsform[".strOrderBy"] = $tstrOrderBy;

$tdatacarsform[".orderindexes"] = array();


$tdatacarsform[".sqlHead"] = "SELECT car,  comments,  email,  firstname,  id,  lastname,  phone";
$tdatacarsform[".sqlFrom"] = "FROM carsform";
$tdatacarsform[".sqlWhereExpr"] = "";
$tdatacarsform[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarsform[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarsform[".arrGroupsPerPage"] = $arrGPP;

$tdatacarsform[".highlightSearchResults"] = true;

$tableKeyscarsform = array();
$tableKeyscarsform[] = "id";
$tdatacarsform[".Keys"] = $tableKeyscarsform;


$tdatacarsform[".hideMobileList"] = array();




//	car
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "car";
	$fdata["GoodName"] = "car";
	$fdata["ownerTable"] = "carsform";
	$fdata["Label"] = GetFieldLabel("carsform","car");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "car";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "car";

	
	
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


	$tdatacarsform["car"] = $fdata;
		$tdatacarsform[".searchableFields"][] = "car";
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "carsform";
	$fdata["Label"] = GetFieldLabel("carsform","comments");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "comments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comments";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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
		
		$edata["controlWidth"] = 560;

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


	$tdatacarsform["comments"] = $fdata;
		$tdatacarsform[".searchableFields"][] = "comments";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "carsform";
	$fdata["Label"] = GetFieldLabel("carsform","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatacarsform["email"] = $fdata;
		$tdatacarsform[".searchableFields"][] = "email";
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "carsform";
	$fdata["Label"] = GetFieldLabel("carsform","firstname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "firstname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "firstname";

	
	
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


	$tdatacarsform["firstname"] = $fdata;
		$tdatacarsform[".searchableFields"][] = "firstname";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carsform";
	$fdata["Label"] = GetFieldLabel("carsform","id");
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


	$tdatacarsform["id"] = $fdata;
		$tdatacarsform[".searchableFields"][] = "id";
//	lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lastname";
	$fdata["GoodName"] = "lastname";
	$fdata["ownerTable"] = "carsform";
	$fdata["Label"] = GetFieldLabel("carsform","lastname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "lastname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastname";

	
	
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


	$tdatacarsform["lastname"] = $fdata;
		$tdatacarsform[".searchableFields"][] = "lastname";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "carsform";
	$fdata["Label"] = GetFieldLabel("carsform","phone");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "phone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
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

		$edata["controlWidth"] = 100;

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


	$tdatacarsform["phone"] = $fdata;
		$tdatacarsform[".searchableFields"][] = "phone";


$tables_data["carsform"]=&$tdatacarsform;
$field_labels["carsform"] = &$fieldLabelscarsform;
$fieldToolTips["carsform"] = &$fieldToolTipscarsform;
$placeHolders["carsform"] = &$placeHolderscarsform;
$page_titles["carsform"] = &$pageTitlescarsform;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carsform"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carsform"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carsform()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "car,  comments,  email,  firstname,  id,  lastname,  phone";
$proto0["m_strFrom"] = "FROM carsform";
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
	"m_strName" => "car",
	"m_strTable" => "carsform",
	"m_srcTableName" => "carsform"
));

$proto6["m_sql"] = "car";
$proto6["m_srcTableName"] = "carsform";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "carsform",
	"m_srcTableName" => "carsform"
));

$proto8["m_sql"] = "comments";
$proto8["m_srcTableName"] = "carsform";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "carsform",
	"m_srcTableName" => "carsform"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "carsform";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "carsform",
	"m_srcTableName" => "carsform"
));

$proto12["m_sql"] = "firstname";
$proto12["m_srcTableName"] = "carsform";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "carsform",
	"m_srcTableName" => "carsform"
));

$proto14["m_sql"] = "id";
$proto14["m_srcTableName"] = "carsform";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "carsform",
	"m_srcTableName" => "carsform"
));

$proto16["m_sql"] = "lastname";
$proto16["m_srcTableName"] = "carsform";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "carsform",
	"m_srcTableName" => "carsform"
));

$proto18["m_sql"] = "phone";
$proto18["m_srcTableName"] = "carsform";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "carsform";
$proto21["m_srcTableName"] = "carsform";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "car";
$proto21["m_columns"][] = "comments";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "firstname";
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "lastname";
$proto21["m_columns"][] = "phone";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "carsform";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "carsform";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="carsform";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carsform = createSqlQuery_carsform();


	
		;

							

$tdatacarsform[".sqlquery"] = $queryData_carsform;



include_once(getabspath("include/carsform_events.php"));
$tableEvents["carsform"] = new eventclass_carsform;
$tdatacarsform[".hasEvents"] = true;

?>