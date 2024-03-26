<?php
function DisplayMasterTableInfo_users($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "users";
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

	if($detailtable == "album")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("users","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "foto")
	{
		$keysAssoc["user_id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("user_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("users","user_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["user_id"]));
	
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
	$xt->assign("username_mastervalue", $viewControls->showDBValue("username", $data, $keylink));
	$format = $settings->getViewFormat("username");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("username")))
		$class = ' rnr-field-number';
		
	$xt->assign("username_class", $class); // add class for field header as field value
	$xt->assign("password_mastervalue", $viewControls->showDBValue("password", $data, $keylink));
	$format = $settings->getViewFormat("password");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("password")))
		$class = ' rnr-field-number';
		
	$xt->assign("password_class", $class); // add class for field header as field value
	$xt->assign("email_mastervalue", $viewControls->showDBValue("email", $data, $keylink));
	$format = $settings->getViewFormat("email");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("email")))
		$class = ' rnr-field-number';
		
	$xt->assign("email_class", $class); // add class for field header as field value
	$xt->assign("nama_lengkap_mastervalue", $viewControls->showDBValue("nama_lengkap", $data, $keylink));
	$format = $settings->getViewFormat("nama_lengkap");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nama_lengkap")))
		$class = ' rnr-field-number';
		
	$xt->assign("nama_lengkap_class", $class); // add class for field header as field value
	$xt->assign("alamat_mastervalue", $viewControls->showDBValue("alamat", $data, $keylink));
	$format = $settings->getViewFormat("alamat");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("alamat")))
		$class = ' rnr-field-number';
		
	$xt->assign("alamat_class", $class); // add class for field header as field value

	$layout = GetPageLayout("users", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("users", "masterlist"));
}

?>