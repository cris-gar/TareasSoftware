<?php
require_once("lib/nusoap.php");
$wsdl = "http://informatica.utem.cl:8011/dirdoc-auth/ws/auth?wsdl";
$client = new nusoap_client($wsdl, 'wsdl');
$rut = array('rut' => $_POST['user']);
$pass=array('password'=> hash('sha256', $_POST['pass']));

$response = $client->call('autenticar', $rut, $pass);
echo "<pre>";
print_r($response);
echo "</pre>";
?>