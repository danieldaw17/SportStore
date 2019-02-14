<?php
	if (isset($_POST['postId'])) {
		$soapClient = new SoapClient('http://localhost/WebServices/wsdl/activeManagement.wdsl', array('cache_wsdl' => WSDL_CACHE_NONE));
		$soapClient->defuse($_POST['postId']);
	}
?>
