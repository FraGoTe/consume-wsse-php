<?php

include_once './Classes/WSSEAuthClass.php';
include_once './Classes/Proceso.php';
include_once './Classes/ObtenerCantidadMatriculas.php';

$user = '';
$pass = '';

$wsdlUrl = '';

$options = array(
    'soap_version' => SOAP_1_1,
    'exceptions' => true,
    'trace' => 1
);

$objObtCantMatr = new \ObtenerCantidadMatriculas();
$objProceso = new \Proceso();

$objProceso->setANEXO();
$objProceso->setCOD_MOD();
$objProceso->setCOD_UGEL();
$objProceso->setDNI();
$objProceso->setID_ANIO();
$objProceso->setID_AREA();
$objProceso->setID_GRADO();
$objProceso->setID_NIVEL();
$objProceso->setID_SESSION();

$objObtCantMatr->setProceso($objProceso);

$wsseHeader = new \WsseAuthHeader($user, $pass);

$soapClient = new \SoapClient($wsdlUrl);
$soapClient->__setSoapHeaders($wsseHeader);

try {
    $rs = $soapClient->ObtenerCantidadMatriculas($objObtCantMatr);
    var_dump($rs);
} catch (SoapFault $e) {
    var_dump($e->getMessage());
}
