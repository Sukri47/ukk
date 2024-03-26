<?php
function DisplayMasterTableInfo_album($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "album";
	$xt->eventsObject = getEventObject($tName);
	
	include_once('classes/listpage.php');
	include_once('classes/listpage_simple.php');
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "foto")
	{
		$keysAssoc["album_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("album_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("album","album_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["album_id"]));
	
	$xt->assign("album_id_mastervalue", $viewControls->showDBValue("album_id", $data, $keylink));
	$format = $settings->getViewFormat("album_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("album_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("album_id_class", $class); // add class for field header as field value
	$xt->assign("nama_album_mastervalue", $viewControls->showDBValue("nama_album", $data, $keylink));
	$format = $settings->getViewFormat("nama_album");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nama_album")))
		$class = ' rnr-field-number';
		
	$xt->assign("nama_album_class", $class); // add class for field header as field value
	$xt->assign("deskripsi_mastervalue", $viewControls->showDBValue("deskripsi", $data, $keylink));
	$format = $settings->getViewFormat("deskripsi");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("deskripsi")))
		$class = ' rnr-field-number';
		
	$xt->assign("deskripsi_class", $class); // add class for field header as field value
	$xt->assign("tanggaldibuat_mastervalue", $viewControls->showDBValue("tanggaldibuat", $data, $keylink));
	$format = $settings->getViewFormat("tanggaldibuat");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("tanggaldibuat")))
		$class = ' rnr-field-number';
		
	$xt->assign("tanggaldibuat_class", $class); // add class for field header as field value
	$xt->assign("user_id_mastervalue", $viewControls->showDBValue("user_id", $data, $keylink));
	$format = $settings->getViewFormat("user_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("user_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("user_id_class", $class); // add class for field header as field value

	$layout = GetPageLayout("album", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("album", "masterlist"));
}

?>