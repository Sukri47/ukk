<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_album($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "album";
	$xt->eventsObject = getEventObject($tName);
	
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["pageType"] = PAGE_PRINT;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "foto" )
	{
		$keysAssoc["album_id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("album_id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("album_id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("album_id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("album","album_id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
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

	$layout = GetPageLayout("album", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("album", "masterprint"));
}

?>