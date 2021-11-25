<?php 

include('functions.php'); /*Funciones*/

/*vars*/
//@$type = base64_decode($_GET["type"]);
@$type='TVNCI';
$code_abi = "";
$name_abi = "";
$country_abi = "";
$phone_abi = "";
$cellular_abi = "";
$email_abi = "";
$type_client = "";

/*vars*/
//MEX	'1206756', '2020-02-27 13:30:01', '2', '1', 'CI', '26357703', NULL, 'CARRASCO CARBAJAL REYNA DENISE', 'Directo', 'Estado de México', '19184303', 'MORALES HERNANDEZ, ROMANA ELIZABETH', 'carrasco.den@gmail.com', '7224069833', '7224069833', '1', '1', '0', '1', '0', '0', '1', '0', '0', 'riKNKz5GJKPgS16hR/sGYg==', '2021-09-21 14:04:13', '1001', '1'


//COL '2021-09-28 08:32:10', '1', 'CI', '40901503', 'CARIBBEAN LEGAL ADVISERS', 'Directo', '', '12658803', '', 'gusalonso@yahoo.com', '', '3173788870'

//PER '2019-05-03 22:50:01', '3', 'CI', '22718303', 'LAULE GUTIERREZ YESSICA MARIEXCE', 'Directo', 'LIMA', '12484903', 'BUCHHOLTZ DELGADO DE BABATSIAS KARLA', 'laule.yessica@gmail.com', '973107729', '973107729'

//ECU '1188557', '2019-04-29 11:40:01', '4', '1', 'CI', '22608303', NULL, 'JIMENA AUGUSTA PERALTA LOPEZ', 'Directo', 'PICHINCHA', '9614103', 'MIRANDA CALDERON  VICTOR XAVIER', 'jimenaperaltal@hotmail.com', '593981378838', '593981378838', '1', '1', '0', '1', '0', '0', '1', '0', '0', 'ZeTE3tWxGkLcEAvUtbBInA==', '2021-11-05 23:55:51', 'SIERRA', '1'


//PAN '2019-04-30 07:40:01', '5', 'CI', '22634903', 'CUCALON MARTHA', 'Directo', 'Panamá', '3278603', 'DELGADO GONZALEZ  ANDRES AQUILES', 'mcucalon25@gmail.com', '66765096', '66765096'

//GTM '2018-12-06 13:55:01', '6', 'CI', '21068103', 'CASTILLO JIMENEZ MILDRED DEL MILAGRO', 'Directo', 'Guatemala', '5705303', 'RODAS JULIO CESAR', 'mildredcasjim@hotmail.com', '54522996', '54522996'


//SLV '2019-08-20 00:00:00', '7', 'CI', '18480803', 'SIMAN SIRI  MARIA TERESA', 'Directo', 'San Salvador', '16939803', 'NEGOCIO CON VITALIDAD SLV', 'mtsiman@gmail.com', '(503)7730 0313', ''


//CRI '2019-03-06 20:00:01', '8', 'CI', '22148503', 'RODRIGUEZ QUESADA ZULLY MA', 'Directo', 'San Jose', '12128803', 'Paniagua Arguello  Sianie', 'zully_13@hotmail.com', '87147603', '87147603'


//CHL '12261790', '2020-09-16 19:21:14', '10', '1', 'CI', '31499703', NULL, 'ZARATE GOMEZ YOLANDA ADRIANA', 'Directo', 'Ciudad de México', '22928303', 'DE LA VEGA MORELL  MARIA AMPARO', 'yolanda-zarate@hotmail.com', '5549432509', '5549432509', '1', '1', '0', '1', '0', '0', '1', '0', '1', 'k7E1wPGg5cfX6qNZpRBV4w==', '2021-09-21 14:16:01', NULL, '1'


if($type == "TVNCI")
{

	/*Ingreso como Asesor*/
	/*$code_abi = base64_decode($_GET["sap_code"]);
	$email_abi = base64_decode($_GET["email"]);
	$country_abi = $_GET["country"];*/
	$code_abi='26357703';
	$email_abi='carrasco.den@gmail.com';
	$country_abi='2';
	$type_client = "ab";

	/*consultar asesor*/
	list($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query) = Search_ab($code_abi);
	/*consultar asesor*/

	$name_abi = $name_abi_query;
	$phone_abi = $phone_abi_query;
	$cellular_abi = $cellular_abi_query;

}
elseif($type == "TVNCLUB")
{
	/*Ingreso como Club*/
	$code_abi = base64_decode($_GET["sap_code"]);
	$email_abi = base64_decode($_GET["email"]);
	$type_client = "cb";

	/*consultar club*/
	list($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query) = Search_ab($code_abi);
	/*consultar club*/

	$country_abi = $country_abi_query;
	$name_abi = $name_abi_query;
	$phone_abi = $phone_abi_query;
	$cellular_abi = $cellular_abi_query;
}
elseif($type == "TVNCLIENT" || $type == "TVPCLIENT")
{
	/*Ingreso como Cliente pero no por TVP*/
	$email_abi = base64_decode($_GET["email"]);
	$type_client = "cl";

	/*consultar cliente*/
	list($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query) = Search_client($email_abi);
	/*consultar cliente*/

	$code_abi = $code_abi_query;
	$name_abi = $name_abi_query;
	$country_abi = $country_abi_query;
	$phone_abi = $phone_abi_query;
	$cellular_abi = $cellular_abi_query;
}

if($code_abi != "")
{
	session_name("armatuentorno");
	session_start();

	$_SESSION["code"] = $code_abi;
	$_SESSION["name"] = $name_abi;
	$_SESSION["country"] = $country_abi;
	$_SESSION["phone"] = $phone_abi;
	$_SESSION["cellular"] = $cellular_abi;
	$_SESSION["email"] = $email_abi;
	$_SESSION["kit"] = 0;
	$_SESSION["type"] = $type_client;
	$_SESSION["discount"] = 0;
	$_SESSION["environment"] = "kitchen";
	$_SESSION["rule_environment"] = 0;
	$_SESSION["view_option"] = 0;
	$_SESSION["money"] = Type_money($country_abi);
	$_SESSION['products-ae'] = array();
	$_SESSION['products_checkout'] = array();

	header("location: index.php");
	exit;
}
echo "no entro a ninguno";
//header ("Location: " . $_SERVER['HTTP_REFERER']);
exit;

?>