<?php

function curl($url=0,$header=0,$data=0){
$curl=curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_HTTPHEADER => $header,
  CURLOPT_COOKIEJAR => "cookie.txt",
  CURLOPT_COOKIEFILE => "cookie.txt"
));
if($data){
curl_setopt_array($curl, array(
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => $data
 ));
}
return curl_exec($curl);
curl_close($curl);
}

function headers(){
$header=array();
$header[]="Host: mybtcads.com";
$header[]="accept: application/json, text/javascript, */*; q=0.01";
$header[]="content-type: application/x-www-form-urlencoded;";
$header[]="charset=UTF-8";
$header[]="x-requested-with: XMLHttpRequest";
$header[]="user-agent: Mozilla/5.0 (Linux; Android 10; ZenFone Max Pro M1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36";
$header[]="referer: https://mybtcads.com/login.php";
return $header;
}

function login(){
  global $email,$pw;
$url="https://mybtcads.com/inc/loginto.php";
$data=http_build_query(["mail"=>"$email","thepassword"=>"$pw"]);
return curl($url,headers(),$data);
}

function db(){
$url="https://mybtcads.com/dashboard.php";
return curl($url,headers());
}

function ptc1(){
$url="https://mybtcads.com/surfads.php";
return curl($url,headers());
}

function ptc2(){
  global $adc;
$url="https://mybtcads.com/surfm.php?adc={$adc}";
return curl($url,headers());
}

function ptc3(){
  global $adc;
$url="https://mybtcads.com/sfad.php?ad={$adc}";
return curl($url,headers());
}

function ptc4(){
  global $adc;
$url="https://mybtcads.com/inc/sf01credit.php";
$data="adid={$adc}";
return curl($url,headers(),$data);
}

function banner(){
echo str_repeat("~",70)."\n";
echo "÷ PHP Script MyBtcads [ Auto PTC Ads ]\n";
echo "÷ Created By @RealFXYT from Indonesia\n";
echo str_repeat("~",70)."\n";
}

// Data User
$email="xxxxxxxx@gmail.com";
$pw="xxxxxxxx";


// Execution function
system("clear");

banner();

$login=login();
if($login == '"1550"'){
echo "\rSuccessfully Login !\r";
sleep(1);
}else{
echo "Invalid Data User !\n";
exit;
}

$db=db();
$name=explode('</h3>',explode('<h3 class="page-title text-truncate text-dark font-weight-medium mb-1">',$db)[1])[0];
$balance=trim(explode('</h2>',explode('<h2 class="text-dark mb-1 font-weight-medium">',$db)[2])[0]);

if($name){
echo "÷ ".$name."         \n";
echo "÷ Balance : ".$balance." Satoshi\n";
echo str_repeat("~",70)."\n";
}

// Looping
while(true){

$ptc1=ptc1();
$adc=explode('">',explode('<a href="surfm.php?adc=',$ptc1)[1])[0];
$reward=trim(explode('</h3>',explode('<h3 class="mb-1 float-left text-danger font-weight-medium">',$ptc1)[1])[0]);
$timer=explode(' Sec</h4>',explode('<h4 class="mb-1 float-left mt-seconds text-secondary font-weight-normal">',$ptc1)[1])[0];

if($adc <= null){
echo "No PTC Available ! Please Comeback Tommorow\n";
exit;
}

$ptc2=ptc2();
$ptc3=ptc3();

for($time=$timer;$time>-1;$time--){
echo "\r".str_repeat(" ",30)." \r";
echo "\r Loading ".$time." Seconds\r";
sleep(1);
}

$ptc4=ptc4();
if($ptc4 == '"done"'){
$db=db();
$balance=trim(explode('</h2>',explode('<h2 class="text-dark mb-1 font-weight-medium">',$db)[2])[0]);
echo "√ Success Visit Ads ! Reward : ".$reward." Current Balance : ".$balance." Satoshi\n";
}else{
echo "Failed Visit Ads !\n";
}

}
