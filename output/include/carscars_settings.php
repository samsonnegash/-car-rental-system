<?php
$tdatacarscars = array();
$tdatacarscars[".searchableFields"] = array();
$tdatacarscars[".ShortName"] = "carscars";
$tdatacarscars[".OwnerID"] = "";
$tdatacarscars[".OriginalTable"] = "carscars";


$tdatacarscars[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"list1\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacarscars[".originalPagesByType"] = $tdatacarscars[".pagesByType"];
$tdatacarscars[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\",\"list1\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacarscars[".originalPages"] = $tdatacarscars[".pages"];
$tdatacarscars[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacarscars[".originalDefaultPages"] = $tdatacarscars[".defaultPages"];

//	field labels
$fieldLabelscarscars = array();
$fieldToolTipscarscars = array();
$pageTitlescarscars = array();
$placeHolderscarscars = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarscars["English"] = array();
	$fieldToolTipscarscars["English"] = array();
	$placeHolderscarscars["English"] = array();
	$pageTitlescarscars["English"] = array();
	$fieldLabelscarscars["English"]["category"] = "Category";
	$fieldToolTipscarscars["English"]["category"] = "";
	$placeHolderscarscars["English"]["category"] = "";
	$fieldLabelscarscars["English"]["color"] = "Color";
	$fieldToolTipscarscars["English"]["color"] = "";
	$placeHolderscarscars["English"]["color"] = "";
	$fieldLabelscarscars["English"]["Date_Listed"] = "Date Listed";
	$fieldToolTipscarscars["English"]["Date_Listed"] = "";
	$placeHolderscarscars["English"]["Date_Listed"] = "";
	$fieldLabelscarscars["English"]["descr"] = "Full Description";
	$fieldToolTipscarscars["English"]["descr"] = "";
	$placeHolderscarscars["English"]["descr"] = "";
	$fieldLabelscarscars["English"]["EPACity"] = "EPACity";
	$fieldToolTipscarscars["English"]["EPACity"] = "";
	$placeHolderscarscars["English"]["EPACity"] = "";
	$fieldLabelscarscars["English"]["EPAHighway"] = "EPAHighway";
	$fieldToolTipscarscars["English"]["EPAHighway"] = "";
	$placeHolderscarscars["English"]["EPAHighway"] = "";
	$fieldLabelscarscars["English"]["features"] = "Features";
	$fieldToolTipscarscars["English"]["features"] = "";
	$placeHolderscarscars["English"]["features"] = "";
	$fieldLabelscarscars["English"]["Horsepower"] = "Horsepower";
	$fieldToolTipscarscars["English"]["Horsepower"] = "";
	$placeHolderscarscars["English"]["Horsepower"] = "";
	$fieldLabelscarscars["English"]["id"] = "Id";
	$fieldToolTipscarscars["English"]["id"] = "";
	$placeHolderscarscars["English"]["id"] = "";
	$fieldLabelscarscars["English"]["Make"] = "Make";
	$fieldToolTipscarscars["English"]["Make"] = "";
	$placeHolderscarscars["English"]["Make"] = "";
	$fieldLabelscarscars["English"]["Model"] = "Model";
	$fieldToolTipscarscars["English"]["Model"] = "";
	$placeHolderscarscars["English"]["Model"] = "";
	$fieldLabelscarscars["English"]["Phone__"] = "Phone #";
	$fieldToolTipscarscars["English"]["Phone__"] = "";
	$placeHolderscarscars["English"]["Phone__"] = "";
	$fieldLabelscarscars["English"]["Picture"] = "Picture";
	$fieldToolTipscarscars["English"]["Picture"] = "";
	$placeHolderscarscars["English"]["Picture"] = "";
	$fieldLabelscarscars["English"]["Price"] = "Price";
	$fieldToolTipscarscars["English"]["Price"] = "";
	$placeHolderscarscars["English"]["Price"] = "";
	$fieldLabelscarscars["English"]["UserID"] = "User ID";
	$fieldToolTipscarscars["English"]["UserID"] = "";
	$placeHolderscarscars["English"]["UserID"] = "";
	$fieldLabelscarscars["English"]["YearOfMake"] = "Year Of Make";
	$fieldToolTipscarscars["English"]["YearOfMake"] = "";
	$placeHolderscarscars["English"]["YearOfMake"] = "";
	$fieldLabelscarscars["English"]["zipcode"] = "Zipcode";
	$fieldToolTipscarscars["English"]["zipcode"] = "";
	$placeHolderscarscars["English"]["zipcode"] = "";
	$fieldLabelscarscars["English"]["logo"] = "Logo";
	$fieldToolTipscarscars["English"]["logo"] = "";
	$placeHolderscarscars["English"]["logo"] = "";
	$pageTitlescarscars["English"]["add"] = "Carscars, Add new";
	$pageTitlescarscars["English"]["edit"] = "Carscars, Edit [{%id}]";
	$pageTitlescarscars["English"]["view"] = "Carscars, View [{%id}]";
	if (count($fieldToolTipscarscars["English"]))
		$tdatacarscars[".isUseToolTips"] = true;
}


	$tdatacarscars[".NCSearch"] = true;



$tdatacarscars[".shortTableName"] = "carscars";
$tdatacarscars[".nSecOptions"] = 0;

$tdatacarscars[".mainTableOwnerID"] = "";
$tdatacarscars[".entityType"] = 0;
$tdatacarscars[".connId"] = "Cars_at_localhost";


$tdatacarscars[".strOriginalTableName"] = "carscars";

	



$tdatacarscars[".showAddInPopup"] = false;

$tdatacarscars[".showEditInPopup"] = false;

$tdatacarscars[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarscars[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarscars[".listAjax"] = false;
//	temporary
$tdatacarscars[".listAjax"] = false;

	$tdatacarscars[".audit"] = false;

	$tdatacarscars[".locking"] = false;


$pages = $tdatacarscars[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacarscars[".edit"] = true;
	$tdatacarscars[".afterEditAction"] = 1;
	$tdatacarscars[".closePopupAfterEdit"] = 1;
	$tdatacarscars[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacarscars[".add"] = true;
$tdatacarscars[".afterAddAction"] = 1;
$tdatacarscars[".closePopupAfterAdd"] = 1;
$tdatacarscars[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacarscars[".list"] = true;
}



$tdatacarscars[".strSortControlSettingsJSON"] = "";

$tdatacarscars[".strClickActionJSON"] = "{\"fields\":{\"Date Listed\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EPACity\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EPAHighway\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Horsepower\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Make\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Model\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Phone #\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Picture\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"UserID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"YearOfMake\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"category\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"color\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"descr\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"features\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"logo\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zipcode\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"code\",\"codeData\":{\"snippet\":\"carscars_click_row\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatacarscars[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacarscars[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacarscars[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacarscars[".printFriendly"] = true;
}



$tdatacarscars[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacarscars[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacarscars[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacarscars[".isUseAjaxSuggest"] = true;

$tdatacarscars[".rowHighlite"] = true;



								
					
			

$tdatacarscars[".ajaxCodeSnippetAdded"] = true;

$tdatacarscars[".buttonsAdded"] = true;

$tdatacarscars[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacarscars[".isUseTimeForSearch"] = false;


$tdatacarscars[".badgeColor"] = "3CB371";


$tdatacarscars[".allSearchFields"] = array();
$tdatacarscars[".filterFields"] = array();
$tdatacarscars[".requiredSearchFields"] = array();

$tdatacarscars[".googleLikeFields"] = array();
$tdatacarscars[".googleLikeFields"][] = "id";
$tdatacarscars[".googleLikeFields"][] = "Make";
$tdatacarscars[".googleLikeFields"][] = "Model";
$tdatacarscars[".googleLikeFields"][] = "YearOfMake";
$tdatacarscars[".googleLikeFields"][] = "Picture";
$tdatacarscars[".googleLikeFields"][] = "Horsepower";
$tdatacarscars[".googleLikeFields"][] = "EPACity";
$tdatacarscars[".googleLikeFields"][] = "EPAHighway";
$tdatacarscars[".googleLikeFields"][] = "Price";
$tdatacarscars[".googleLikeFields"][] = "Date Listed";
$tdatacarscars[".googleLikeFields"][] = "Phone #";
$tdatacarscars[".googleLikeFields"][] = "UserID";
$tdatacarscars[".googleLikeFields"][] = "descr";
$tdatacarscars[".googleLikeFields"][] = "color";
$tdatacarscars[".googleLikeFields"][] = "category";
$tdatacarscars[".googleLikeFields"][] = "zipcode";
$tdatacarscars[".googleLikeFields"][] = "features";
$tdatacarscars[".googleLikeFields"][] = "logo";



$tdatacarscars[".tableType"] = "list";

$tdatacarscars[".printerPageOrientation"] = 0;
$tdatacarscars[".nPrinterPageScale"] = 100;

$tdatacarscars[".nPrinterSplitRecords"] = 40;

$tdatacarscars[".geocodingEnabled"] = false;










$tdatacarscars[".pageSize"] = 20;

$tdatacarscars[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarscars[".strOrderBy"] = $tstrOrderBy;

$tdatacarscars[".orderindexes"] = array();


$tdatacarscars[".sqlHead"] = "select carscars.id,  carscars.Make,  carscars.Model,  carscars.YearOfMake,  carscars.Picture,  carscars.Horsepower,  carscars.EPACity,  carscars.EPAHighway,  carscars.Price,  carscars.`Date Listed`,  carscars.`Phone #`,  carscars.UserID,  carscars.descr,  carscars.color,  carscars.category,  carscars.zipcode,  carscars.features,  logo";
$tdatacarscars[".sqlFrom"] = "FROM carscars  INNER JOIN carsmake ON carscars.Make = carsmake.id";
$tdatacarscars[".sqlWhereExpr"] = "";
$tdatacarscars[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarscars[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarscars[".arrGroupsPerPage"] = $arrGPP;

$tdatacarscars[".highlightSearchResults"] = true;

$tableKeyscarscars = array();
$tableKeyscarscars[] = "id";
$tdatacarscars[".Keys"] = $tableKeyscarscars;


$tdatacarscars[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdatacarscars["id"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "id";
//	Make
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Make";
	$fdata["GoodName"] = "Make";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","Make");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Make";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.Make";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "make";

	

	
	$edata["LookupOrderBy"] = "make";

	
	
		$edata["AllowToAdd"] = true;
		
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Model";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacarscars["Make"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "Make";
//	Model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Model";
	$fdata["GoodName"] = "Model";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","Model");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Model";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.Model";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "carsmodels";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "model";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Make", "lookup" => "make" );

		$edata["AllowToAdd"] = true;
		
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacarscars["Model"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "Model";
//	YearOfMake
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "YearOfMake";
	$fdata["GoodName"] = "YearOfMake";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","YearOfMake");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "YearOfMake";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.YearOfMake";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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
			$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Interval slider";
		$fdata["showCollapsed"] = false;

	
	
	
	

	$fdata["filterKnobsType"] = 0;
		$fdata["filterSliderStepType"] = 1;
	$fdata["filterSliderStepValue"] = 1;
//end of Filters settings


	$tdatacarscars["YearOfMake"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "YearOfMake";
//	Picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Picture";
	$fdata["GoodName"] = "Picture";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","Picture");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Picture";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.Picture";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 150;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 450;
	$vdata["ImageHeight"] = 0;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 150;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 450;
	$vdata["ImageHeight"] = 0;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 10;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 250;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 5;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 250;

			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 10;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "NOT Empty";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacarscars["Picture"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "Picture";
//	Horsepower
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Horsepower";
	$fdata["GoodName"] = "Horsepower";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","Horsepower");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Horsepower";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.Horsepower";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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
			$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Interval slider";
		$fdata["showCollapsed"] = false;

	
	
	
	

	$fdata["filterKnobsType"] = 0;
		$fdata["filterSliderStepType"] = 1;
	$fdata["filterSliderStepValue"] = 1;
//end of Filters settings


	$tdatacarscars["Horsepower"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "Horsepower";
//	EPACity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EPACity";
	$fdata["GoodName"] = "EPACity";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","EPACity");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "EPACity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.EPACity";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdatacarscars["EPACity"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "EPACity";
//	EPAHighway
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EPAHighway";
	$fdata["GoodName"] = "EPAHighway";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","EPAHighway");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "EPAHighway";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.EPAHighway";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdatacarscars["EPAHighway"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "EPAHighway";
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","Price");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Price";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.Price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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
			$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Interval slider";
		$fdata["showCollapsed"] = false;

	
	
	
	

	$fdata["filterKnobsType"] = 0;
		$fdata["filterSliderStepType"] = 1;
	$fdata["filterSliderStepValue"] = 1;
//end of Filters settings


	$tdatacarscars["Price"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "Price";
//	Date Listed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date Listed";
	$fdata["GoodName"] = "Date_Listed";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","Date_Listed");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Date Listed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.`Date Listed`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacarscars["Date Listed"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "Date Listed";
//	Phone #
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Phone #";
	$fdata["GoodName"] = "Phone__";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","Phone__");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Phone #";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.`Phone #`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdatacarscars["Phone #"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "Phone #";
//	UserID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UserID";
	$fdata["GoodName"] = "UserID";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","UserID");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UserID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.UserID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdatacarscars["UserID"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "UserID";
//	descr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "descr";
	$fdata["GoodName"] = "descr";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","descr");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "descr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.descr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 200;
			$edata["nCols"] = 400;

	
	
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


	$tdatacarscars["descr"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "descr";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","color");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.color";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "carsbcolor";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "color";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacarscars["color"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "color";
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","category");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.category";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "carscategory";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "category";

	

	
	$edata["LookupOrderBy"] = "category";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacarscars["category"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "category";
//	zipcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "zipcode";
	$fdata["GoodName"] = "zipcode";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","zipcode");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "zipcode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.zipcode";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacarscars["zipcode"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "zipcode";
//	features
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "features";
	$fdata["GoodName"] = "features";
	$fdata["ownerTable"] = "carscars";
	$fdata["Label"] = GetFieldLabel("carscars","features");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "features";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carscars.features";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 200;
			$edata["nCols"] = 400;

	
	
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


	$tdatacarscars["features"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "features";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carscars","logo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "logo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "logo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 40;
	$vdata["ImageHeight"] = 0;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
	
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


	$tdatacarscars["logo"] = $fdata;
		$tdatacarscars[".searchableFields"][] = "logo";


$tables_data["carscars"]=&$tdatacarscars;
$field_labels["carscars"] = &$fieldLabelscarscars;
$fieldToolTips["carscars"] = &$fieldToolTipscarscars;
$placeHolders["carscars"] = &$placeHolderscarscars;
$page_titles["carscars"] = &$pageTitlescarscars;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carscars"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carscars"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_carscars()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "carscars.id,  carscars.Make,  carscars.Model,  carscars.YearOfMake,  carscars.Picture,  carscars.Horsepower,  carscars.EPACity,  carscars.EPAHighway,  carscars.Price,  carscars.`Date Listed`,  carscars.`Phone #`,  carscars.UserID,  carscars.descr,  carscars.color,  carscars.category,  carscars.zipcode,  carscars.features,  logo";
$proto0["m_strFrom"] = "FROM carscars  INNER JOIN carsmake ON carscars.Make = carsmake.id";
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
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto6["m_sql"] = "carscars.id";
$proto6["m_srcTableName"] = "carscars";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto8["m_sql"] = "carscars.Make";
$proto8["m_srcTableName"] = "carscars";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Model",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto10["m_sql"] = "carscars.Model";
$proto10["m_srcTableName"] = "carscars";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "YearOfMake",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto12["m_sql"] = "carscars.YearOfMake";
$proto12["m_srcTableName"] = "carscars";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Picture",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto14["m_sql"] = "carscars.Picture";
$proto14["m_srcTableName"] = "carscars";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Horsepower",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto16["m_sql"] = "carscars.Horsepower";
$proto16["m_srcTableName"] = "carscars";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EPACity",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto18["m_sql"] = "carscars.EPACity";
$proto18["m_srcTableName"] = "carscars";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EPAHighway",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto20["m_sql"] = "carscars.EPAHighway";
$proto20["m_srcTableName"] = "carscars";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto22["m_sql"] = "carscars.Price";
$proto22["m_srcTableName"] = "carscars";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Date Listed",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto24["m_sql"] = "carscars.`Date Listed`";
$proto24["m_srcTableName"] = "carscars";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone #",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto26["m_sql"] = "carscars.`Phone #`";
$proto26["m_srcTableName"] = "carscars";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UserID",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto28["m_sql"] = "carscars.UserID";
$proto28["m_srcTableName"] = "carscars";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "descr",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto30["m_sql"] = "carscars.descr";
$proto30["m_srcTableName"] = "carscars";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto32["m_sql"] = "carscars.color";
$proto32["m_srcTableName"] = "carscars";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto34["m_sql"] = "carscars.category";
$proto34["m_srcTableName"] = "carscars";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "zipcode",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto36["m_sql"] = "carscars.zipcode";
$proto36["m_srcTableName"] = "carscars";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "features",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto38["m_sql"] = "carscars.features";
$proto38["m_srcTableName"] = "carscars";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "logo"
));

$proto40["m_sql"] = "logo";
$proto40["m_srcTableName"] = "carscars";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "carscars";
$proto43["m_srcTableName"] = "carscars";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "category";
$proto43["m_columns"][] = "color";
$proto43["m_columns"][] = "Date Listed";
$proto43["m_columns"][] = "descr";
$proto43["m_columns"][] = "EPACity";
$proto43["m_columns"][] = "EPAHighway";
$proto43["m_columns"][] = "features";
$proto43["m_columns"][] = "Horsepower";
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "Make";
$proto43["m_columns"][] = "Model";
$proto43["m_columns"][] = "Phone #";
$proto43["m_columns"][] = "Picture";
$proto43["m_columns"][] = "Price";
$proto43["m_columns"][] = "UserID";
$proto43["m_columns"][] = "YearOfMake";
$proto43["m_columns"][] = "zipcode";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "carscars";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "carscars";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "carsmake";
$proto47["m_srcTableName"] = "carscars";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "make";
$proto47["m_columns"][] = "logo";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "INNER JOIN carsmake ON carscars.Make = carsmake.id";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "carscars";
$proto48=array();
$proto48["m_sql"] = "carscars.Make = carsmake.id";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Make",
	"m_strTable" => "carscars",
	"m_srcTableName" => "carscars"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= carsmake.id";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="carscars";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carscars = createSqlQuery_carscars();


	
		;

																		

$tdatacarscars[".sqlquery"] = $queryData_carscars;



include_once(getabspath("include/carscars_events.php"));
$tableEvents["carscars"] = new eventclass_carscars;
$tdatacarscars[".hasEvents"] = true;

?>