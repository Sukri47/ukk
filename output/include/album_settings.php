<?php
require_once(getabspath("classes/cipherer.php"));




$tdataalbum = array();	
	$tdataalbum[".truncateText"] = true;
	$tdataalbum[".NumberOfChars"] = 80; 
	$tdataalbum[".ShortName"] = "album";
	$tdataalbum[".OwnerID"] = "";
	$tdataalbum[".OriginalTable"] = "album";

//	field labels
$fieldLabelsalbum = array();
$fieldToolTipsalbum = array();
$pageTitlesalbum = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsalbum["English"] = array();
	$fieldToolTipsalbum["English"] = array();
	$pageTitlesalbum["English"] = array();
	$fieldLabelsalbum["English"]["album_id"] = "ALBUM ID";
	$fieldToolTipsalbum["English"]["album_id"] = "";
	$fieldLabelsalbum["English"]["nama_album"] = "NAMA ALBUM";
	$fieldToolTipsalbum["English"]["nama_album"] = "";
	$fieldLabelsalbum["English"]["deskripsi"] = "DESKRIPSI";
	$fieldToolTipsalbum["English"]["deskripsi"] = "";
	$fieldLabelsalbum["English"]["tanggaldibuat"] = "TANGGAL DI BUAT";
	$fieldToolTipsalbum["English"]["tanggaldibuat"] = "";
	$fieldLabelsalbum["English"]["user_id"] = "USER";
	$fieldToolTipsalbum["English"]["user_id"] = "";
	if (count($fieldToolTipsalbum["English"]))
		$tdataalbum[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsalbum[""] = array();
	$fieldToolTipsalbum[""] = array();
	$pageTitlesalbum[""] = array();
	if (count($fieldToolTipsalbum[""]))
		$tdataalbum[".isUseToolTips"] = true;
}
	
	
	$tdataalbum[".NCSearch"] = true;



$tdataalbum[".shortTableName"] = "album";
$tdataalbum[".nSecOptions"] = 0;
$tdataalbum[".recsPerRowList"] = 1;
$tdataalbum[".recsPerRowPrint"] = 1;
$tdataalbum[".mainTableOwnerID"] = "";
$tdataalbum[".moveNext"] = 1;
$tdataalbum[".entityType"] = 0;

$tdataalbum[".strOriginalTableName"] = "album";




$tdataalbum[".showAddInPopup"] = false;

$tdataalbum[".showEditInPopup"] = false;

$tdataalbum[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataalbum[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataalbum[".fieldsForRegister"] = array();
	
$tdataalbum[".listAjax"] = false;

	$tdataalbum[".audit"] = false;

	$tdataalbum[".locking"] = false;

$tdataalbum[".edit"] = true;
$tdataalbum[".afterEditAction"] = 1;
$tdataalbum[".closePopupAfterEdit"] = 1;
$tdataalbum[".afterEditActionDetTable"] = "";

$tdataalbum[".add"] = true;
$tdataalbum[".afterAddAction"] = 1;
$tdataalbum[".closePopupAfterAdd"] = 1;
$tdataalbum[".afterAddActionDetTable"] = "";

$tdataalbum[".list"] = true;

$tdataalbum[".view"] = true;




$tdataalbum[".delete"] = true;

$tdataalbum[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataalbum[".searchSaving"] = false;
//

$tdataalbum[".showSearchPanel"] = true;
		$tdataalbum[".flexibleSearch"] = true;		

if (isMobile())
	$tdataalbum[".isUseAjaxSuggest"] = false;
else 
	$tdataalbum[".isUseAjaxSuggest"] = true;

$tdataalbum[".rowHighlite"] = true;



$tdataalbum[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalbum[".isUseTimeForSearch"] = false;





$tdataalbum[".allSearchFields"] = array();
$tdataalbum[".filterFields"] = array();
$tdataalbum[".requiredSearchFields"] = array();

$tdataalbum[".allSearchFields"][] = "album_id";
	$tdataalbum[".allSearchFields"][] = "nama_album";
	$tdataalbum[".allSearchFields"][] = "deskripsi";
	$tdataalbum[".allSearchFields"][] = "tanggaldibuat";
	$tdataalbum[".allSearchFields"][] = "user_id";
	

$tdataalbum[".googleLikeFields"] = array();
$tdataalbum[".googleLikeFields"][] = "album_id";
$tdataalbum[".googleLikeFields"][] = "nama_album";
$tdataalbum[".googleLikeFields"][] = "deskripsi";
$tdataalbum[".googleLikeFields"][] = "tanggaldibuat";
$tdataalbum[".googleLikeFields"][] = "user_id";


$tdataalbum[".advSearchFields"] = array();
$tdataalbum[".advSearchFields"][] = "album_id";
$tdataalbum[".advSearchFields"][] = "nama_album";
$tdataalbum[".advSearchFields"][] = "deskripsi";
$tdataalbum[".advSearchFields"][] = "tanggaldibuat";
$tdataalbum[".advSearchFields"][] = "user_id";

$tdataalbum[".tableType"] = "list";

$tdataalbum[".printerPageOrientation"] = 0;
$tdataalbum[".nPrinterPageScale"] = 100;

$tdataalbum[".nPrinterSplitRecords"] = 40;

$tdataalbum[".nPrinterPDFSplitRecords"] = 40;



$tdataalbum[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataalbum[".pageSize"] = 20;

$tdataalbum[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataalbum[".strOrderBy"] = $tstrOrderBy;

$tdataalbum[".orderindexes"] = array();

$tdataalbum[".sqlHead"] = "SELECT album_id,  	nama_album,  	deskripsi,  	tanggaldibuat,  	user_id";
$tdataalbum[".sqlFrom"] = "FROM album";
$tdataalbum[".sqlWhereExpr"] = "";
$tdataalbum[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalbum[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalbum[".arrGroupsPerPage"] = $arrGPP;

$tdataalbum[".highlightSearchResults"] = true;

$tableKeysalbum = array();
$tableKeysalbum[] = "album_id";
$tdataalbum[".Keys"] = $tableKeysalbum;

$tdataalbum[".listFields"] = array();
$tdataalbum[".listFields"][] = "album_id";
$tdataalbum[".listFields"][] = "nama_album";
$tdataalbum[".listFields"][] = "deskripsi";
$tdataalbum[".listFields"][] = "tanggaldibuat";
$tdataalbum[".listFields"][] = "user_id";

$tdataalbum[".hideMobileList"] = array();


$tdataalbum[".viewFields"] = array();
$tdataalbum[".viewFields"][] = "album_id";
$tdataalbum[".viewFields"][] = "nama_album";
$tdataalbum[".viewFields"][] = "deskripsi";
$tdataalbum[".viewFields"][] = "tanggaldibuat";
$tdataalbum[".viewFields"][] = "user_id";

$tdataalbum[".addFields"] = array();
$tdataalbum[".addFields"][] = "nama_album";
$tdataalbum[".addFields"][] = "deskripsi";
$tdataalbum[".addFields"][] = "tanggaldibuat";
$tdataalbum[".addFields"][] = "user_id";

$tdataalbum[".masterListFields"] = array();
$tdataalbum[".masterListFields"][] = "album_id";
$tdataalbum[".masterListFields"][] = "nama_album";
$tdataalbum[".masterListFields"][] = "deskripsi";
$tdataalbum[".masterListFields"][] = "tanggaldibuat";
$tdataalbum[".masterListFields"][] = "user_id";

$tdataalbum[".inlineAddFields"] = array();

$tdataalbum[".editFields"] = array();
$tdataalbum[".editFields"][] = "nama_album";
$tdataalbum[".editFields"][] = "deskripsi";
$tdataalbum[".editFields"][] = "tanggaldibuat";
$tdataalbum[".editFields"][] = "user_id";

$tdataalbum[".inlineEditFields"] = array();

$tdataalbum[".exportFields"] = array();

$tdataalbum[".importFields"] = array();

$tdataalbum[".printFields"] = array();

//	album_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "album_id";
	$fdata["GoodName"] = "album_id";
	$fdata["ownerTable"] = "album";
	$fdata["Label"] = GetFieldLabel("album","album_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "album_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "album_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataalbum["album_id"] = $fdata;
//	nama_album
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama_album";
	$fdata["GoodName"] = "nama_album";
	$fdata["ownerTable"] = "album";
	$fdata["Label"] = GetFieldLabel("album","nama_album"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nama_album"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama_album";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataalbum["nama_album"] = $fdata;
//	deskripsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "deskripsi";
	$fdata["GoodName"] = "deskripsi";
	$fdata["ownerTable"] = "album";
	$fdata["Label"] = GetFieldLabel("album","deskripsi"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "deskripsi"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deskripsi";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataalbum["deskripsi"] = $fdata;
//	tanggaldibuat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tanggaldibuat";
	$fdata["GoodName"] = "tanggaldibuat";
	$fdata["ownerTable"] = "album";
	$fdata["Label"] = GetFieldLabel("album","tanggaldibuat"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tanggaldibuat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggaldibuat";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataalbum["tanggaldibuat"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "album";
	$fdata["Label"] = GetFieldLabel("album","user_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "user_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nama_lengkap";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataalbum["user_id"] = $fdata;

	
$tables_data["album"]=&$tdataalbum;
$field_labels["album"] = &$fieldLabelsalbum;
$fieldToolTips["album"] = &$fieldToolTipsalbum;
$page_titles["album"] = &$pageTitlesalbum;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["album"] = array();
//	foto
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="foto";
		$detailsParam["dOriginalTable"] = "foto";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "foto";
	$detailsParam["dCaptionTable"] = GetTableCaption("foto");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["album"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["album"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["album"][$dIndex]["masterKeys"][]="album_id";

				$detailsTablesData["album"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["album"][$dIndex]["detailKeys"][]="album_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["album"] = array();


	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["album"][0] = $masterParams;	
				$masterTablesData["album"][0]["masterKeys"] = array();
	$masterTablesData["album"][0]["masterKeys"][]="user_id";
				$masterTablesData["album"][0]["detailKeys"] = array();
	$masterTablesData["album"][0]["detailKeys"][]="user_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_album()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "album_id,  	nama_album,  	deskripsi,  	tanggaldibuat,  	user_id";
$proto0["m_strFrom"] = "FROM album";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "album_id",
	"m_strTable" => "album",
	"m_srcTableName" => "album"
));

$proto5["m_sql"] = "album_id";
$proto5["m_srcTableName"] = "album";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nama_album",
	"m_strTable" => "album",
	"m_srcTableName" => "album"
));

$proto7["m_sql"] = "nama_album";
$proto7["m_srcTableName"] = "album";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "deskripsi",
	"m_strTable" => "album",
	"m_srcTableName" => "album"
));

$proto9["m_sql"] = "deskripsi";
$proto9["m_srcTableName"] = "album";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggaldibuat",
	"m_strTable" => "album",
	"m_srcTableName" => "album"
));

$proto11["m_sql"] = "tanggaldibuat";
$proto11["m_srcTableName"] = "album";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "album",
	"m_srcTableName" => "album"
));

$proto13["m_sql"] = "user_id";
$proto13["m_srcTableName"] = "album";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "album";
$proto16["m_srcTableName"] = "album";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "album_id";
$proto16["m_columns"][] = "nama_album";
$proto16["m_columns"][] = "deskripsi";
$proto16["m_columns"][] = "tanggaldibuat";
$proto16["m_columns"][] = "user_id";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "album";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "album";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="album";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_album = createSqlQuery_album();


	
					
	
$tdataalbum[".sqlquery"] = $queryData_album;

$tableEvents["album"] = new eventsBase;
$tdataalbum[".hasEvents"] = false;

?>