<?php
	if (isset($_POST['productId'])) {
		$soapClient = new SoapClient('http://localhost.sportstore/WebServices/activeManagement/wsdl/activeManagement.wsdl');
		$productId = (int)$_POST['productId'];
		$soapClient->active($productId);
	}
?>
