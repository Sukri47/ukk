<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafoto = array();	
	$tdatafoto[".truncateText"] = true;
	$tdatafoto[".NumberOfChars"] = 80; 
	$tdatafoto[".ShortName"] = "foto";
	$tdatafoto[".OwnerID"] = "";
	$tdatafoto[".OriginalTable"] = "foto";

//	field labels
$fieldLabelsfoto = array();
$fieldToolTipsfoto = array();
$pageTitlesfoto = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfoto["English"] = array();
	$fieldToolTipsfoto["English"] = array();
	$pageTitlesfoto["English"] = array();
	$fieldLabelsfoto["English"]["foto_id"] = "FOTO ID";
	$fieldToolTipsfoto["English"]["foto_id"] = "";
	$fieldLabelsfoto["English"]["judul_foto"] = "JUDUL FOTO";
	$fieldToolTipsfoto["English"]["judul_foto"] = "";
	$fieldLabelsfoto["English"]["deskripsi"] = "DESKRIPSI";
	$fieldToolTipsfoto["English"]["deskripsi"] = "";
	$fieldLabelsfoto["English"]["tanggalunggah"] = "TANGGAL UNGGAH";
	$fieldToolTipsfoto["English"]["tanggalunggah"] = "";
	$fieldLabelsfoto["English"]["gambar"] = "GAMBAR";
	$fieldToolTipsfoto["English"]["gambar"] = "";
	$fieldLabelsfoto["English"]["album_id"] = "NAMA ALBUM";
	$fieldToolTipsfoto["English"]["album_id"] = "";
	$fieldLabelsfoto["English"]["user_id"] = "USER";
	$fieldToolTipsfoto["English"]["user_id"] = "";
	if (count($fieldToolTipsfoto["English"]))
		$tdatafoto[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfoto[""] = array();
	$fieldToolTipsfoto[""] = array();
	$pageTitlesfoto[""] = array();
	if (count($fieldToolTipsfoto[""]))
		$tdatafoto[".isUseToolTips"] = true;
}
	
	
	$tdatafoto[".NCSearch"] = true;



$tdatafoto[".shortTableName"] = "foto";
$tdatafoto[".nSecOptions"] = 0;
$tdatafoto[".recsPerRowList"] = 1;
$tdatafoto[".recsPerRowPrint"] = 1;
$tdatafoto[".mainTableOwnerID"] = "";
$tdatafoto[".moveNext"] = 1;
$tdatafoto[".entityType"] = 0;

$tdatafoto[".strOriginalTableName"] = "foto";




$tdatafoto[".showAddInPopup"] = false;

$tdatafoto[".showEditInPopup"] = false;

$tdatafoto[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafoto[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafoto[".fieldsForRegister"] = array();
	
$tdatafoto[".listAjax"] = false;

	$tdatafoto[".audit"] = false;

	$tdatafoto[".locking"] = false;

$tdatafoto[".edit"] = true;
$tdatafoto[".afterEditAction"] = 1;
$tdatafoto[".closePopupAfterEdit"] = 1;
$tdatafoto[".afterEditActionDetTable"] = "";

$tdatafoto[".add"] = true;
$tdatafoto[".afterAddAction"] = 1;
$tdatafoto[".closePopupAfterAdd"] = 1;
$tdatafoto[".afterAddActionDetTable"] = "";

$tdatafoto[".list"] = true;

$tdatafoto[".view"] = true;




$tdatafoto[".delete"] = true;

$tdatafoto[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafoto[".searchSaving"] = false;
//

$tdatafoto[".showSearchPanel"] = true;
		$tdatafoto[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafoto[".isUseAjaxSuggest"] = false;
else 
	$tdatafoto[".isUseAjaxSuggest"] = true;

$tdatafoto[".rowHighlite"] = true;



$tdatafoto[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafoto[".isUseTimeForSearch"] = false;





$tdatafoto[".allSearchFields"] = array();
$tdatafoto[".filterFields"] = array();
$tdatafoto[".requiredSearchFields"] = array();

$tdatafoto[".allSearchFields"][] = "foto_id";
	$tdatafoto[".allSearchFields"][] = "judul_foto";
	$tdatafoto[".allSearchFields"][] = "deskripsi";
	$tdatafoto[".allSearchFields"][] = "tanggalunggah";
	$tdatafoto[".allSearchFields"][] = "gambar";
	$tdatafoto[".allSearchFields"][] = "album_id";
	$tdatafoto[".allSearchFields"][] = "user_id";
	

$tdatafoto[".googleLikeFields"] = array();
$tdatafoto[".googleLikeFields"][] = "foto_id";
$tdatafoto[".googleLikeFields"][] = "judul_foto";
$tdatafoto[".googleLikeFields"][] = "deskripsi";
$tdatafoto[".googleLikeFields"][] = "tanggalunggah";
$tdatafoto[".googleLikeFields"][] = "gambar";
$tdatafoto[".googleLikeFields"][] = "album_id";
$tdatafoto[".googleLikeFields"][] = "user_id";


$tdatafoto[".advSearchFields"] = array();
$tdatafoto[".advSearchFields"][] = "foto_id";
$tdatafoto[".advSearchFields"][] = "judul_foto";
$tdatafoto[".advSearchFields"][] = "deskripsi";
$tdatafoto[".advSearchFields"][] = "tanggalunggah";
$tdatafoto[".advSearchFields"][] = "gambar";
$tdatafoto[".advSearchFields"][] = "album_id";
$tdatafoto[".advSearchFields"][] = "user_id";

$tdatafoto[".tableType"] = "list";

$tdatafoto[".printerPageOrientation"] = 0;
$tdatafoto[".nPrinterPageScale"] = 100;

$tdatafoto[".nPrinterSplitRecords"] = 40;

$tdatafoto[".nPrinterPDFSplitRecords"] = 40;



$tdatafoto[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatafoto[".pageSize"] = 20;

$tdatafoto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafoto[".strOrderBy"] = $tstrOrderBy;

$tdatafoto[".orderindexes"] = array();

$tdatafoto[".sqlHead"] = "SELECT foto_id,  	judul_foto,  	deskripsi,  	tanggalunggah,  	gambar,  	album_id,  	user_id";
$tdatafoto[".sqlFrom"] = "FROM foto";
$tdatafoto[".sqlWhereExpr"] = "";
$tdatafoto[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafoto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafoto[".arrGroupsPerPage"] = $arrGPP;

$tdatafoto[".highlightSearchResults"] = true;

$tableKeysfoto = array();
$tableKeysfoto[] = "foto_id";
$tdatafoto[".Keys"] = $tableKeysfoto;

$tdatafoto[".listFields"] = array();
$tdatafoto[".listFields"][] = "foto_id";
$tdatafoto[".listFields"][] = "judul_foto";
$tdatafoto[".listFields"][] = "deskripsi";
$tdatafoto[".listFields"][] = "tanggalunggah";
$tdatafoto[".listFields"][] = "gambar";
$tdatafoto[".listFields"][] = "album_id";
$tdatafoto[".listFields"][] = "user_id";

$tdatafoto[".hideMobileList"] = array();


$tdatafoto[".viewFields"] = array();
$tdatafoto[".viewFields"][] = "foto_id";
$tdatafoto[".viewFields"][] = "judul_foto";
$tdatafoto[".viewFields"][] = "deskripsi";
$tdatafoto[".viewFields"][] = "tanggalunggah";
$tdatafoto[".viewFields"][] = "gambar";
$tdatafoto[".viewFields"][] = "album_id";
$tdatafoto[".viewFields"][] = "user_id";

$tdatafoto[".addFields"] = array();
$tdatafoto[".addFields"][] = "judul_foto";
$tdatafoto[".addFields"][] = "deskripsi";
$tdatafoto[".addFields"][] = "tanggalunggah";
$tdatafoto[".addFields"][] = "gambar";
$tdatafoto[".addFields"][] = "album_id";
$tdatafoto[".addFields"][] = "user_id";

$tdatafoto[".masterListFields"] = array();
$tdatafoto[".masterListFields"][] = "foto_id";
$tdatafoto[".masterListFields"][] = "judul_foto";
$tdatafoto[".masterListFields"][] = "deskripsi";
$tdatafoto[".masterListFields"][] = "tanggalunggah";
$tdatafoto[".masterListFields"][] = "gambar";
$tdatafoto[".masterListFields"][] = "album_id";
$tdatafoto[".masterListFields"][] = "user_id";

$tdatafoto[".inlineAddFields"] = array();

$tdatafoto[".editFields"] = array();
$tdatafoto[".editFields"][] = "judul_foto";
$tdatafoto[".editFields"][] = "deskripsi";
$tdatafoto[".editFields"][] = "tanggalunggah";
$tdatafoto[".editFields"][] = "gambar";
$tdatafoto[".editFields"][] = "album_id";
$tdatafoto[".editFields"][] = "user_id";

$tdatafoto[".inlineEditFields"] = array();

$tdatafoto[".exportFields"] = array();

$tdatafoto[".importFields"] = array();

$tdatafoto[".printFields"] = array();

//	foto_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "foto_id";
	$fdata["GoodName"] = "foto_id";
	$fdata["ownerTable"] = "foto";
	$fdata["Label"] = GetFieldLabel("foto","foto_id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "foto_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto_id";
	
		
		
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

	

	
	$tdatafoto["foto_id"] = $fdata;
//	judul_foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "judul_foto";
	$fdata["GoodName"] = "judul_foto";
	$fdata["ownerTable"] = "foto";
	$fdata["Label"] = GetFieldLabel("foto","judul_foto"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "judul_foto"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "judul_foto";
	
		
		
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

	

	
	$tdatafoto["judul_foto"] = $fdata;
//	deskripsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "deskripsi";
	$fdata["GoodName"] = "deskripsi";
	$fdata["ownerTable"] = "foto";
	$fdata["Label"] = GetFieldLabel("foto","deskripsi"); 
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

	

	
	$tdatafoto["deskripsi"] = $fdata;
//	tanggalunggah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tanggalunggah";
	$fdata["GoodName"] = "tanggalunggah";
	$fdata["ownerTable"] = "foto";
	$fdata["Label"] = GetFieldLabel("foto","tanggalunggah"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tanggalunggah"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggalunggah";
	
		
		
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

	

	
	$tdatafoto["tanggalunggah"] = $fdata;
//	gambar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "gambar";
	$fdata["GoodName"] = "gambar";
	$fdata["ownerTable"] = "foto";
	$fdata["Label"] = GetFieldLabel("foto","gambar"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "gambar"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gambar";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;	
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatafoto["gambar"] = $fdata;
//	album_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "album_id";
	$fdata["GoodName"] = "album_id";
	$fdata["ownerTable"] = "foto";
	$fdata["Label"] = GetFieldLabel("foto","album_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "album";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"user_id", 'lookupF'=>"user_id");
	$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "album_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nama_album";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		
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

	

	
	$tdatafoto["album_id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "foto";
	$fdata["Label"] = GetFieldLabel("foto","user_id"); 
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

	

	
	$tdatafoto["user_id"] = $fdata;

	
$tables_data["foto"]=&$tdatafoto;
$field_labels["foto"] = &$fieldLabelsfoto;
$fieldToolTips["foto"] = &$fieldToolTipsfoto;
$page_titles["foto"] = &$pageTitlesfoto;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["foto"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["foto"] = array();


	
				$strOriginalDetailsTable="album";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="album";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "album";
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
					$masterTablesData["foto"][0] = $masterParams;	
				$masterTablesData["foto"][0]["masterKeys"] = array();
	$masterTablesData["foto"][0]["masterKeys"][]="album_id";
				$masterTablesData["foto"][0]["detailKeys"] = array();
	$masterTablesData["foto"][0]["detailKeys"][]="album_id";
		
	
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
					$masterTablesData["foto"][1] = $masterParams;	
				$masterTablesData["foto"][1]["masterKeys"] = array();
	$masterTablesData["foto"][1]["masterKeys"][]="user_id";
				$masterTablesData["foto"][1]["detailKeys"] = array();
	$masterTablesData["foto"][1]["detailKeys"][]="user_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_foto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "foto_id,  	judul_foto,  	deskripsi,  	tanggalunggah,  	gambar,  	album_id,  	user_id";
$proto0["m_strFrom"] = "FROM foto";
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
	"m_strName" => "foto_id",
	"m_strTable" => "foto",
	"m_srcTableName" => "foto"
));

$proto5["m_sql"] = "foto_id";
$proto5["m_srcTableName"] = "foto";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "judul_foto",
	"m_strTable" => "foto",
	"m_srcTableName" => "foto"
));

$proto7["m_sql"] = "judul_foto";
$proto7["m_srcTableName"] = "foto";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "deskripsi",
	"m_strTable" => "foto",
	"m_srcTableName" => "foto"
));

$proto9["m_sql"] = "deskripsi";
$proto9["m_srcTableName"] = "foto";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggalunggah",
	"m_strTable" => "foto",
	"m_srcTableName" => "foto"
));

$proto11["m_sql"] = "tanggalunggah";
$proto11["m_srcTableName"] = "foto";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "gambar",
	"m_strTable" => "foto",
	"m_srcTableName" => "foto"
));

$proto13["m_sql"] = "gambar";
$proto13["m_srcTableName"] = "foto";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "album_id",
	"m_strTable" => "foto",
	"m_srcTableName" => "foto"
));

$proto15["m_sql"] = "album_id";
$proto15["m_srcTableName"] = "foto";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "foto",
	"m_srcTableName" => "foto"
));

$proto17["m_sql"] = "user_id";
$proto17["m_srcTableName"] = "foto";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "foto";
$proto20["m_srcTableName"] = "foto";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "foto_id";
$proto20["m_columns"][] = "judul_foto";
$proto20["m_columns"][] = "deskripsi";
$proto20["m_columns"][] = "tanggalunggah";
$proto20["m_columns"][] = "gambar";
$proto20["m_columns"][] = "album_id";
$proto20["m_columns"][] = "user_id";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "foto";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "foto";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="foto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_foto = createSqlQuery_foto();


	
							
	
$tdatafoto[".sqlquery"] = $queryData_foto;

$tableEvents["foto"] = new eventsBase;
$tdatafoto[".hasEvents"] = false;

?>