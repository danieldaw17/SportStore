<?php

	$soapServer = new SoapServer("http://localhost/WebServices/wsdl/activeManagement.wsdl");

	function defuse($productId) {
		return redirect("defuse/$productId");
	}
	$soapServer->AddFunction("defuse");
	$soapServer->handle();
 ?>
