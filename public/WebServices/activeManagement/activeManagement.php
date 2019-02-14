<?php
echo "llego aquói";
exit();
	$soapServer = new SoapServer("http://localhost.sportstore/WebServices/activeManagement/wsdl/activeManagement.wsdl");

	function active($productId) {
		//if ($operation=="defuse") {

			return redirect("/defuse/$productId");

		/*} else if ($operation=="activate")
			return redirect("activate/$productId");*/
	}
	$soapServer->AddFunction("active");
	$soapServer->handle();
 ?>
