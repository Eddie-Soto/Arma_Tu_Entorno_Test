<?php

include('conexion.php');
/*require_once('plugins/encrypt/Crypt.class.php'); //Libreria para encriptar la variable
$key_secret = "13sIS4$2013*?1nF3mPN1KK3N";*/

//Abi
$created_abi_query = "";
$country_abi_query = "";
$type_abi_query = "";
$code_abi_query = "";
$name_abi_query = "";
$range_abi_query = "";
$state_abi_query = "";
$code_sponsor_abi_query = "";
$name_sponsor_abi_query = "";
$email_abi_query = "";
$phone_abi_query = "";
$cellular_abi_query = "";
//Abi

//Office
$name_office_query = "";
$address_office_query = "";
$phone_office_query = "";
$city_office_query = "";
$email_office_query = "";
$identification_office_query = "";
//Office

//Date
function Current_date()
{
	date_default_timezone_set("America/Bogota");

	$date = date("Y-m-d");
	$hour = date("H:i:s");
	return $date . " " . $hour;
}
//Date

//Reducir texto
function Reduce_text($texto, $limite=100){
	$texto = trim($texto);
	$texto = strip_tags($texto);
	$tamano = strlen($texto);
	$resultado = '';
	if($tamano <= $limite){
		return $texto;
	}else{
		$texto = substr($texto, 0, $limite);
		$palabras = explode(' ', $texto);
		$resultado = implode(' ', $palabras);
		$resultado .= '...';
	}
	return $resultado;
}
//Reducir texto

//Search abi
function Search_ab($code)
{
	$conn = connect_mk();
	$sql = mysqli_query($conn, "SELECT DISTINCT creacion, pais, tipo, codigo, nombre, rango, estado, codigop, nombrep, correo, telefono, celular from control_ci_test where codigo = '$code' and estatus = 1 and b1 = 1") or die("0");
	disconnect($conn);
	$row = mysqli_fetch_row($sql);
	if($row > 0)
	{
		global $created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query;

		$created_abi_query = substr($row[0], 0, 10) . " 00:00:00";
		$country_abi_query = $row[1];
		$type_abi_query = $row[2];
		$code_abi_query = $row[3];
		$name_abi_query = $row[4];
		$range_abi_query = $row[5];
		$state_abi_query = $row[6];
		$code_sponsor_abi_query = $row[7];
		$name_sponsor_abi_query = $row[8];
		$email_abi_query = $row[9];
		$phone_abi_query = $row[10];
		$cellular_abi_query = $row[11];

		return array($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query);
	}
	else
	{
		return 0;
	}
}

//Search club
function Search_club($email)
{
	$conn = connect_mk();
	$sql = mysqli_query($conn, "SELECT DISTINCT creacion, pais, tipo, codigo, nombre, rango, estado, codigop, nombrep, correo, telefono, celular from control_ci_test where correo = '$email' and b2 = 1 and tipo = 'CLUB' and estatus = 0") or die("0");
	disconnect($conn);
	$row = mysqli_fetch_row($sql);
	if($row > 0)
	{
		global $created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query;

		$created_abi_query = substr($row[0], 0, 10) . " 00:00:00";
		$country_abi_query = $row[1];
		$type_abi_query = $row[2];
		$code_abi_query = $row[3];
		$name_abi_query = $row[4];
		$range_abi_query = $row[5];
		$state_abi_query = $row[6];
		$code_sponsor_abi_query = $row[7];
		$name_sponsor_abi_query = $row[8];
		$email_abi_query = $row[9];
		$phone_abi_query = $row[10];
		$cellular_abi_query = $row[11];

		return array($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query);
	}
	else
	{
		return 0;
	}
}

//Search client
function Search_client($email)
{
	$conn = connect_new_tv_test();
	$sql = mysqli_query($conn, "SELECT created_at, country_id, '', sap_code_sponsor, concat(name, ' ', last_name), '', state, '', '', email, phone, cell_phone from users where email = '$email' and client_type = 'CLIENTE' and status = 1 ") or die("0");
	disconnect($conn);
	$row = mysqli_fetch_row($sql);
	if($row > 0)
	{
		global $created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query;

		$created_abi_query = substr($row[0], 0, 10) . " 00:00:00";
		$country_abi_query = $row[1];
		$type_abi_query = $row[2];
		$code_abi_query = $row[3];
		$name_abi_query = $row[4];
		$range_abi_query = $row[5];
		$state_abi_query = $row[6];
		$code_sponsor_abi_query = $row[7];
		$name_sponsor_abi_query = $row[8];
		$email_abi_query = $row[9];
		$phone_abi_query = $row[10];
		$cellular_abi_query = $row[11];

		return array($created_abi_query, $country_abi_query, $type_abi_query, $code_abi_query, $name_abi_query, $range_abi_query, $state_abi_query, $code_sponsor_abi_query, $name_sponsor_abi_query, $email_abi_query, $phone_abi_query, $cellular_abi_query);
	}
	else
	{
		return 0;
	}
}
//Search client

//Money type
function Type_money($country)
{
	if($country == 8)
	{
		return "???";
	}
	elseif($country == 3)
	{
		return "S/";
	}
	else
	{
		return "$";
	}
}
//Money type
$var_KENKO_SEAT_KING = 0;
$var_KENKO_SEAT_REGULAR = 0;


//littlesteps
function Valite_littlesteps_environment_one()
{
	
	
	$var_POWERBAND_VERDE = 0;
	$var_POWERBAND_ROJO = 0;
	$var_POWERBAND_LIMA = 0;
	$var_POWERBAND_NEGRO19 = 0;
	$var_POWERBAND_NEGRO22 = 0;
	$var_POWERBAND_AMARILLO = 0;
	$var_POWERBAND_AMARILLO22 = 0;
	$var_POWERBAND_MORADA = 0;
	$var_POWERBAND_LIMA_PAN = 0;

	$counter = 0;
	$quantity_counter = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail, $brand_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "PROMO")
		    {
		    	
		    	if($product_detail == "19300"){ $var_POWERBAND_VERDE++; }
		    	if($product_detail == "19303"){ $var_POWERBAND_ROJO++; }
		    	if($product_detail == "19306"){ $var_POWERBAND_LIMA++; }
		    	if($product_detail == "19980"){ $var_POWERBAND_NEGRO19++; }
		    	if($product_detail == "19981"){ $var_POWERBAND_NEGRO22++; }
		    	if($product_detail == "19982"){ $var_POWERBAND_AMARILLO++; }
		    	if($product_detail == "19312"){ $var_POWERBAND_MORADA++; }
		    	if($product_detail == "19307"){ $var_POWERBAND_LIMA_PAN++; }
		    	if($product_detail == "19983"){ $var_POWERBAND_AMARILLO22++; }

		    	$total_powerbands=0;
		    	$total_powerbands = $var_POWERBAND_VERDE+$var_POWERBAND_ROJO+$var_POWERBAND_LIMA+$var_POWERBAND_NEGRO19+$var_POWERBAND_NEGRO22+$var_POWERBAND_AMARILLO+$var_POWERBAND_MORADA + $var_POWERBAND_LIMA_PAN + $var_POWERBAND_AMARILLO22;

		    	if($brand_detail == 6 || $brand_detail == 9 )
			{
				$counter = $counter + 1 + ($quantity_detail - 1);
				$quantity_counter = $quantity_counter + 1 + ($quantity_detail - 1);
			}		   
		    
			}
		}
	}
	$regalo=0;
	if ($quantity_counter >= 5 and $quantity_counter <=9) {
		$regalo=1;
	}elseif ($quantity_counter >=10 and $quantity_counter<=14 ) {
		$regalo=2;
	}elseif ($quantity_counter >=15 and $quantity_counter<=19 ) {
		$regalo=3;
	}elseif ($quantity_counter >=20 and $quantity_counter<=24 ) {
		$regalo=4;
	}elseif ($quantity_counter >=25 and $quantity_counter<=29 ) {
		$regalo=5;
	}elseif ($quantity_counter >=30 and $quantity_counter<=34 ) {
		$regalo=6;
	}elseif ($quantity_counter >=35 and $quantity_counter<=39 ) {
		$regalo=7;
	}elseif ($quantity_counter >=40 and $quantity_counter<=44 ) {
		$regalo=8;
	}elseif ($quantity_counter >=45 and $quantity_counter<=49 ) {
		$regalo=9;
	}elseif ($quantity_counter >=50 and $quantity_counter<=54 ) {
		$regalo=10;
	}elseif ($quantity_counter >=55 and $quantity_counter<=59 ) {
		$regalo=11;
	}elseif ($quantity_counter >=60 and $quantity_counter<=64 ) {
		$regalo=12;
	}elseif ($quantity_counter >=65 and $quantity_counter<=69 ) {
		$regalo=13;
	}elseif ($quantity_counter >=70 and $quantity_counter<=74 ) {
		$regalo=14;
	}elseif ($quantity_counter >=75 and $quantity_counter<=79 ) {
		$regalo=15;
	}elseif ($quantity_counter >=80 and $quantity_counter<=84 ) {
		$regalo=16;
	}elseif ($quantity_counter >=85 and $quantity_counter<=89 ) {
		$regalo=17;
	}elseif ($quantity_counter >=90 and $quantity_counter<=94 ) {
		$regalo=18;
	}elseif ($quantity_counter >=95 and $quantity_counter<=99 ) {
		$regalo=19;
	}elseif ($quantity_counter >=100 and $quantity_counter<=104 ) {
		$regalo=20;
	}elseif ($quantity_counter >= 105 and $quantity_counter <=109) {
		$regalo=21;
	}elseif ($quantity_counter >=110 and $quantity_counter<=114 ) {
		$regalo=22;
	}elseif ($quantity_counter >=115 and $quantity_counter<=19 ) {
		$regalo=23;
	}elseif ($quantity_counter >=120 and $quantity_counter<=124 ) {
		$regalo=24;
	}elseif ($quantity_counter >=125 and $quantity_counter<=129 ) {
		$regalo=25;
	}elseif ($quantity_counter >=130 and $quantity_counter<=134 ) {
		$regalo=26;
	}elseif ($quantity_counter >=135 and $quantity_counter<=139 ) {
		$regalo=27;
	}elseif ($quantity_counter >=140 and $quantity_counter<=144 ) {
		$regalo=28;
	}elseif ($quantity_counter >=145 and $quantity_counter<=149 ) {
		$regalo=29;
	}elseif ($quantity_counter >=150 and $quantity_counter<=154 ) {
		$regalo=30;
	}elseif ($quantity_counter >=155 and $quantity_counter<=159 ) {
		$regalo=31;
	}elseif ($quantity_counter >=160 and $quantity_counter<=164 ) {
		$regalo=32;
	}elseif ($quantity_counter >=165 and $quantity_counter<=169 ) {
		$regalo=33;
	}elseif ($quantity_counter >=170 and $quantity_counter<=174 ) {
		$regalo=34;
	}elseif ($quantity_counter >=175 and $quantity_counter<=179 ) {
		$regalo=35;
	}elseif ($quantity_counter >=180 and $quantity_counter<=184 ) {
		$regalo=36;
	}elseif ($quantity_counter >=185 and $quantity_counter<=189 ) {
		$regalo=37;
	}elseif ($quantity_counter >=190 and $quantity_counter<=194 ) {
		$regalo=38;
	}elseif ($quantity_counter >=195 and $quantity_counter<=199 ) {
		$regalo=39;
	}elseif ($quantity_counter >=200 and $quantity_counter<=204 ) {
		$regalo=40;
	}else{
		$regalo=0;
	}

	$_SESSION['regalo'] = $regalo;

	if($counter >= 5)
	{
		
		$_SESSION['products-ae']['19309']="19309-".$regalo."---";
		return 1;

	}
	else
	{
		
		unset($_SESSION['products-ae']['19309']);
		return 0;
		
	}
}

//Escolar
function Valite_escolar_environment_one()
{
	
	
	$var_KENKO_SEAT = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "ESCOLAR")
		    {
		    	
		    	if($group_detail == "KENKOLIGHT"){ $var_KENKOLIGHT++; }
		    	if($group_detail == "KENKO SEAT"){ $var_KENKO_SEAT++; }
		    	if($product_detail == "1281"){ $var_KENKO_SEAT_KING++; }
		    	if($product_detail == "1280"){ $var_KENKO_SEAT_REGULAR++; }
		    }
		}
	}

	if($var_KENKOLIGHT >= 1 || $var_KENKO_SEAT >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}




function Valite_escolar_environment_two()
{	
	$var_KENKO_AIR = 0;
	$var_BOTELLA_DEPORTIVA = 0;
	$var_SPIRAL = 0;
	$var_KENKOGROUND = 0;
	$var_KENKO_SEAT = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "ESCOLAR")
		    {
		    	if($group_detail == "KENKO AIR"){ $var_KENKO_AIR++; }
		    	if($group_detail == "KENKOLIGHT"){ $var_KENKOLIGHT++; }
		    	if($group_detail == "BOTELLA DEPORTIVA"){ $var_BOTELLA_DEPORTIVA++; }
		    	if($group_detail == "KENKO FASHION SPIRAL"){ $var_SPIRAL++; }
		    	if($group_detail == "TRAVEL"){ $var_KENKOGROUND++; }
		    	if($product_detail == "1281"){ $var_KENKO_SEAT_KING++; }
		    	if($product_detail == "1280"){ $var_KENKO_SEAT_REGULAR++; }
		    	if($group_detail == "KENKO SEAT"){ $var_KENKO_SEAT++; }
		    }
		}
	}


	if ($var_KENKO_SEAT_REGULAR >= 1 and $var_KENKO_SEAT_KING >= 1) {
		return 1;
	}elseif ($var_KENKOLIGHT >= 1 and $var_KENKO_SEAT >= 1) {
		return 1;
	}
	elseif($var_BOTELLA_DEPORTIVA >= 1 || $var_SPIRAL >= 1 || $var_KENKOGROUND >= 1 || $var_KENKO_AIR >= 1  )
	{
		return 1;
	}
	else
	{
		return 0;
	}
}

/*
function Valite_escolar_environment_three()
{
	$var_KENKO_SEAT_REGULAR = 0;
	$var_KENKO_SEAT_KING = 0;


	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);
		
		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "ESCOLAR")
		    {
		    	if($product_detail == "1281"){ $var_KENKO_SEAT_KING++; }
		    	if($product_detail == "1280"){ $var_KENKO_SEAT_KIREGULAR++; }
		    }
		}
	}

	if($var_KENKO_SEAT_KING >= 1 || $var_KENKO_SEAT_KIREGULAR >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}

}
//Validate environment ESCOLAR three
*/

//Escolar

//Validate environment room one
function Valite_room_environment_one()
{
	$var_KENKO_FIT = 0;
	$var_COLCHON = 0;
	$var_ALMOHADA = 0;
	$var_EDREDON = 0;
	

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "HABITACION")
		    {
		    	if($group_detail == "EDREDON"){ $var_EDREDON++; }
		    	if($group_detail == "KENKO FIT"){ $var_KENKO_FIT++; }
		    	if($group_detail == "COLCHON"){ $var_COLCHON++; }
		    	//if($group_detail == "ALMOHADA"){ $var_ALMOHADA++; }
		    	
		    	
		    }
		}
	}

	$total = $var_KENKO_FIT + $var_COLCHON + $var_EDREDON + $var_ALMOHADA;
	
	if($total > 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment room one
$var_EDREDON_PET = 0;
//Validate environment room two
function Valite_room_environment_two()
{
	$var_EDREDON = 0;
	$var_ALMOHADA = 0;
	$var_HAGU = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "HABITACION")
		    {
		    	if($group_detail == "EDREDON"){ $var_EDREDON++; }
		    	if($group_detail == "ALMOHADA"){ $var_ALMOHADA++; }
		    	if($group_detail == "PET PAD"){ $var_EDREDON_PET++; }
		    	if($product_detail == "1312"){ $var_ALMOHADA++; }
		    	if($product_detail == "1256"){ $var_HAGU++; }
		    }
		}
	}

	if($var_EDREDON >= 1 || $var_ALMOHADA >= 1 || $var_EDREDON_PET >= 1 || $var_HAGU >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment room two

//Validate environment room three
function Valite_room_environment_three()
{
	$var_EDREDON = 0;
	$var_KENKO_AIR = 0;
	$var_ALMOHADA = 0;
	$var_KENKOLIGHT = 0;
	$var_DUCHA = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "HABITACION")
		    {
		    	if($group_detail == "EDREDON"){ $var_EDREDON++; }
		    	if($group_detail == "KENKO AIR"){ $var_KENKO_AIR++; }
		    	if($group_detail == "KENKOLIGHT"){ $var_KENKOLIGHT++; }
		    	if($group_detail == "DUCHA"){ $var_DUCHA++; }
		    	if($group_detail == "ALMOHADA"){ $var_ALMOHADA++; }
		    }
		}
	}

	if($var_KENKO_AIR >= 1)
	{
		if($var_EDREDON >= 1)
		{
			return 1;
		}
		else
		{
			if($var_EDREDON >= 1 || $var_ALMOHADA >= 1 || $var_KENKOLIGHT >= 1 || $var_DUCHA >= 1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}
	else
	{
		if($var_EDREDON >= 1)
		{
			if($var_KENKO_AIR >= 1 || $var_ALMOHADA >= 1 || $var_KENKOLIGHT >= 1 || $var_DUCHA >= 1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		else
		{
			if($var_EDREDON >= 1 || $var_KENKO_AIR >= 1 || $var_ALMOHADA >= 1 || $var_KENKOLIGHT >= 1 || $var_DUCHA >= 1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}

}
//Validate environment room three

//Validate environment kitchen one
function Valite_kitchen_environment_one()
{
	$var_SISTEMA_DE_AGUA = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "COCINA")
		    {
		    	if($group_detail == "SISTEMA DE AGUA"){ $var_SISTEMA_DE_AGUA++; }
		    }
		}
	}

	if($var_SISTEMA_DE_AGUA >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment kitchen one

//Validate environment kitchen two
function Valite_kitchen_environment_two()
{
	$var_OPTIMIZER = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "COCINA")
		    {
		    	if($group_detail == "OPTIMIZER"){ $var_OPTIMIZER++; }
		    }
		}
	}

	if($var_OPTIMIZER >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment kitchen two

//Validate environment office two
function Valite_office_environment_two()
{
	$var_KENKOLIGHT = 0;
	$var_KENKO_AIR = 0;
	$var_KENKO_SEAT = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "OFICINA")
		    {
		    	if($group_detail == "KENKOLIGHT"){ $var_KENKOLIGHT++; }
		    	if($group_detail == "KENKO AIR"){ $var_KENKO_AIR++; }
		    	if($group_detail == "KENKO SEAT"){ $var_KENKO_SEAT++; }
		    }
		}
	}

	if($var_KENKOLIGHT >= 1 || $var_KENKO_AIR >= 1 || $var_KENKO_SEAT >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment office two

//Validate environment office three
function Valite_office_environment_three()
{
	$var_SISTEMA_DE_AGUA = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "OFICINA")
		    {
		    	if($group_detail == "SISTEMA DE AGUA"){ $var_SISTEMA_DE_AGUA++; }
		    }
		}
	}

	if($var_SISTEMA_DE_AGUA >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment office three

//Validate environment living room one
function Valite_living_room_environment_one()
{
	$var_KENKO_AIR = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "SALA")
		    {
		    	if($group_detail == "KENKO AIR"){ $var_KENKO_AIR++; }
		    }
		}
	}

	if($var_KENKO_AIR >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment living room one

//Validate environment living room two
function Valite_living_room_environment_two()
{
	$var_KENKOLIGHT = 0;
	$var_KENKO_SEAT = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail) = explode('-', $products);

		$valor_array = explode(',', str_replace(" ", "", $environment_detail));
		foreach($valor_array as $llave => $value)
		{
		    if($value == "SALA")
		    {
		    	if($group_detail == "KENKOLIGHT"){ $var_KENKOLIGHT++; }
		    	if($group_detail == "KENKO SEAT"){ $var_KENKO_SEAT++; }
		    }
		}
	}

	if($var_KENKOLIGHT >= 1 || $var_KENKO_SEAT >= 1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment living room two

//Validate environment personal one
function Valite_personal_environment_one()
{
	$var_two = 0;
	$var_three = 0;
	$var_four = 0;
	$var_five = 0;
	$var_sex = 0;
	$var_seven = 0;
	$var_eight = 0;
	$var_nine = 0;
	$var_EDREDON_PET= 0;
	$var_HAGU= 0;
	$var_teen = 0;

	$counter = 0;
	$quantity_counter = 0;


	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail, $brand_detail) = explode('-', $products);

		if($group_detail  == "REPUESTO" || $group_detail == "")
	    {}
	    else
	    {
			/*if($brand_detail == 6){ $var_sex = 1; }*/
			if($brand_detail == 7){ $var_seven = 1; }
			if($brand_detail == 8){ $var_eight = 1; }
			if($brand_detail == 9){ $var_nine = 1; }
			if($brand_detail == 10){ $var_teen = 1; }
			if($brand_detail == 2 && ($group_detail == "ANTIFAZ" || $group_detail == "TRAVEL")){ $var_two = 1; }
			if($brand_detail == 3 && $group_detail == "BOTELLA DEPORTIVA"){ $var_three = 1; }
			if($product_detail == "1290"){ $var_EDREDON_PET++; }
			if($product_detail == "1256 "){ $var_HAGU++; }

			if(($brand_detail == 6 || $brand_detail == 7 || $brand_detail == 8 || $brand_detail == 9 || $brand_detail == 10) || $group_detail == "ANTIFAZ" || $group_detail == "TRAVEL" || $group_detail == "BOTELLA DEPORTIVA" || $product_detail == "1290" || $product_detail == "1256")
			{
				$counter = $counter + 1 + ($quantity_detail - 1);
			}
	    }
	}

	$sum = $var_two + $var_three + $var_four + $var_five + $var_sex + $var_seven + $var_eight + $var_nine + $var_teen + $var_EDREDON_PET + $var_HAGU;

	if($counter >= 5)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment office one

//Validate environment nutrition one
function Valite_nutrition_environment_one()
{
	$counter = 0;

	foreach($_SESSION['products-ae'] as $posicion => $products)
	{
		list($product_detail, $quantity_detail, $environment_detail, $group_detail, $brand_detail) = explode('-', $products);

		if($group_detail  == "REPUESTO" || $group_detail == "")
	    {}
	    else
	    {
			if($brand_detail == 6)
			{
				$counter = $counter + 1 + ($quantity_detail - 1);
			}
	    }
	}

	if($counter >= 3)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//Validate environment nutrition one

//Validate room environment
function Valite_environment()
{
	//Valite_littlesteps_environment_one
	//littlesteps
	if($_SESSION['environment'] == "STEPS")
	{
		$one = Valite_littlesteps_environment_one();
		
		$total = $one;
		
		if($total == 1)
		{
			return $_SESSION['rule_environment'] = 2;
		}
		else
		{
			return $_SESSION['rule_environment'] = 0;
		}
	}

	if($_SESSION['environment'] == "room")
	{
		$one = Valite_room_environment_one();
		$two = Valite_room_environment_two();

		$total = $one + $two;
		if($total >= 2)
		{
			return $_SESSION['rule_environment'] = 1;
		}
		else
		{
			return $_SESSION['rule_environment'] = 0;
		}
	}
	if($_SESSION['environment'] == "escolar")
	{
		$one = Valite_escolar_environment_one();
		$two = Valite_escolar_environment_two();

		$total = $one + $two;
		if($total >= 2)
		{
			return $_SESSION['rule_environment'] = 1;
		}
		else
		{
			return $_SESSION['rule_environment'] = 0;
		}
	}
	if($_SESSION['environment'] == "kitchen")
	{
		$one = Valite_kitchen_environment_one();
		$two = Valite_kitchen_environment_two();

		$total = $one + $two;
		if($total == 2)
		{
			return $_SESSION['rule_environment'] = 1;
		}
		else
		{
			return $_SESSION['rule_environment'] = 0;
		}
	}
	if($_SESSION['environment'] == "personal")
	{
		$one = Valite_personal_environment_one();

		$total = $one;
		if($total == 1)
		{
			return $_SESSION['rule_environment'] = 1;
		}
		else
		{
			return $_SESSION['rule_environment'] = 0;
		}
	}
	if($_SESSION['environment'] == "nutrition")
	{
		$one = Valite_nutrition_environment_one();

		$total = $one;
		if($total == 1)
		{
			return $_SESSION['rule_environment'] = 1;
		}
		else
		{
			return $_SESSION['rule_environment'] = 0;
		}
	}
	if($_SESSION['environment'] == "office")
	{
		$two = Valite_office_environment_two();
		$three = Valite_office_environment_three();

		$total = $two + $three;
		if($total >= 2)
		{
			return $_SESSION['rule_environment'] = 1;
		}
		else
		{
			return $_SESSION['rule_environment'] = 0;
		}
	}
	if($_SESSION['environment'] == "living-room")
	{
		$one = Valite_living_room_environment_one();
		$two = Valite_living_room_environment_two();

		$total = $one + $two;
		if($total == 2)
		{
			return $_SESSION['rule_environment'] = 1;
		}
		else
		{
			return $_SESSION['rule_environment'] = 0;
		}
	}
}

function Valite_environment_bar()
{


//littlesteps
	if($_SESSION['environment'] == "STEPS")
	{

		$one = Valite_littlesteps_environment_one();

		$total = $one;
		if($total == 1)
		{
			return 100;
		}
		
	}
	if($_SESSION['environment'] == "escolar")
	{

		//littlesteps

		$one = Valite_escolar_environment_one();
		$two = Valite_escolar_environment_two();
		

		$total = $one + $two;
		if($total == 0)
		{
			return 5;
		}
		else if($total == 1)
		{
			return 40;
		}
		else if($total >= 2)
		{
			return 80;
		}
	}
	if($_SESSION['environment'] == "room")
	{
		$one = Valite_room_environment_one();
		$two = Valite_room_environment_two();
		$three = Valite_room_environment_three();

		$total = $one + $two + $three;
		if($total == 0)
		{
			return 5;
		}
		else if($total == 1)
		{
			return 40;
		}
		else if($total >= 2)
		{
			return 80;
		}
	}
	if($_SESSION['environment'] == "kitchen")
	{
		$one = Valite_kitchen_environment_one();
		$two = Valite_kitchen_environment_two();

		$total = $one + $two;
		if($total == 0)
		{
			return 5;
		}
		else if($total == 1)
		{
			return 80;
		}
	}
	if($_SESSION['environment'] == "personal")
	{
		$one = Valite_personal_environment_one();

		$total = $one;
		if($total == 0)
		{
			return 5;
		}
	}
	if($_SESSION['environment'] == "nutrition")
	{
		$one = Valite_nutrition_environment_one();

		$total = $one;
		if($total == 0)
		{
			return 5;
		}
	}
	if($_SESSION['environment'] == "office")
	{
		$two = Valite_office_environment_two();
		$three = Valite_office_environment_three();

		$total = $two + $three;
		if($total == 0)
		{
			return 5;
		}
		else if($total == 1)
		{
			return 50;
		}
		else if($total >= 2)
		{
			return 80;
		}
	}
	if($_SESSION['environment'] == "living-room")
	{
		$one = Valite_living_room_environment_one();
		$two = Valite_living_room_environment_two();

		$total = $one + $two;
		if($total == 0)
		{
			return 5;
		}
		else if($total == 1)
		{
			return 80;
		}
	}
}

?>