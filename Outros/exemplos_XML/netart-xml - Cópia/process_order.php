<?php
/* NetArt XML Cart - www.netartmedia.net/xml-cart
 * Copyright 2013-2017 NetArt Media
 * http://www.netartmedia.net
 *
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0 */ 
 
if(isset($_REQUEST["proceed"]))
{
	//Loading the config.xml file
	if(file_exists("../config.xml"))
	{
		$config_file="../config.xml";
	}
	else
	if(file_exists("../netart-xml-cart/config.xml"))
	{
		$config_file="../netart-xml-cart/config.xml";
	}
	else
	{
		die("No config.xml file found");
	}
	
	//Initializing the config settings
	$xml_config = simplexml_load_file($config_file);
	
	//Sending an email with the order details to the notification email
	mail
	(
		$xml_config->configuration->notification_email,
		"New Order",
		"Ordered items: ".stripslashes($_REQUEST["products_list"])."\n\n".
		"Total value: ".$xml_config->configuration->currency_symbol.$_REQUEST["products_value"]
	);
	
	//Creating the PayPal payment link
	$paypal_link = "https://www.paypal.com/cgi-bin/webscr?";
	$paypal_link .= "cmd=_xclick&";
	$paypal_link .= "business=".($xml_config->configuration->paypal_account)."&";
	$paypal_link .= "currency_code=".($xml_config->configuration->currency_code)."&";
	$paypal_link .= "item_name=".urlencode($_REQUEST["products_list"])."&";
	$paypal_link .= "amount=".$_REQUEST["products_value"];
	
	//Redirecting the customer to PayPal to complete his payment
?>
	<script>
	parent.document.location.href="<?php echo $paypal_link;?>";
	</script>
<?php
}
?>