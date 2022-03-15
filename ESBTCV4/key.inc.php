<?php
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","4838328282883882",0,"4838328282883882");
	return $n;
}
?>
