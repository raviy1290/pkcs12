<?php
// sample example for cert file validation with password

$certs = array();
$file_location = "FILE_LOC";
$file_name = "FILE_NAME";

$cert_pwd = "PASSWORD";
$pkcs12 = file_get_contents( $file_location. "/". $file_name ); 

openssl_pkcs12_read( $pkcs12, $certs, $cert_pwd );

if(!empty( $certs ){
  // valid cert and password
}else{
	// invalid
} 

?>
