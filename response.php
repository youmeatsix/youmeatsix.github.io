<?php
    //echo $_POST['begin'] . ', ' . $_POST['end'];
	
	$aRes = array('data' => '2013/03/09', 'rate' => '3');

	require_once('Services_JSON.php');
	$oJson = new Services_JSON();
	echo $oJson->encode($aRes);
		
?>