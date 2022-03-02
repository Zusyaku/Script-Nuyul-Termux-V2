<?php
system("clear");
$zz = json_decode(file_get_contents("http://ip-api.com/json"))->timezone;
date_default_timezone_set($zz);
banner();
login();
function login(){
system("rm -rf user");
system("mkdir user");
$ua = array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; Infinix X657C Build/QP1A.190711.020)");
$ulogin = "http://ritechnews.com/api/login";
$dlogin = "password=XXX&get_login=any&email=XXX%40gmail.com&";
$login = curl($ulogin,$ua,"post",$dlogin);
$js=json_decode($login,true);
$ball = $js[0]["points"];
$dd2 = fopen("user/ballance","w");
 fwrite($dd2, $ball);
 fclose($dd2);
$dd2 = fopen("user/log.json","w");
 fwrite($dd2, $login);
 fclose($dd2);
$scratch = $js[0]["scratch_count"];
$spin = $js[0]["spin_count"];
$email = $js[0]["email"];
$captcha = $js[0]["captcha_count"];
echo "\033[1;36mEmail \033[1;37m: \033[1;32m$email
\033[1;36mPoint \033[1;37m: \033[1;32m$ball
\033[1;36mSpin \033[1;37m: \033[1;32m$spin
\033[1;36mScratch \033[1;37m: \033[1;32m$scratch
\033[1;36mcaptcha \033[1;37m: \033[1;32m$captcha\n";
return spin();
}

function captcha(){
echo "\033[1;36mStart captcha...\n";
$ua = array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; Infinix X657C Build/QP1A.190711.020)");
$url = "http://ritechnews.com/api/update_points";
$urll= "";
$file = file_get_contents("user/log.json");
$js = json_decode($file,true);
$id = $js[0]["id"];
$spin_count =$js[0]["captcha_count"];
$date = date("d-m-y");
for ($x=$spin_count;$x>0;$x--){
$cokk = array("15","18","20","30");
$ball = file_get_contents("user/ballance");
$cok = $cokk[rand(0,3)];
$take = $ball+$cok;
$data = "number=".$x."&user_id=".$id."&scratch=captcha&update_point=any&new_point=".$take."&";
$end = curl($url,$ua,"post",$data);
$cek = strpos($end,"Points Updated");
if($cek){
$dd2 = fopen("user/ballance","w");
 fwrite($dd2, $take);
 fclose($dd2);
$time = date("H:i:s");
echo "\033[0;36m$x\033[0;37m[\033[0;36m$time\033[0;37m]\033[0;31mcaptcha updated\033[0;37m|\033[0;31mballance \033[0;37m: \033[1;32m$take\n";
sleep(5);



}
}

}

function scratch(){
echo "\033[1;36mStart scratch...\n";
$ua = array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; Infinix X657C Build/QP1A.190711.020)");
$url = "http://ritechnews.com/api/update_points";
$urll= "";
$file = file_get_contents("user/log.json");
$js = json_decode($file,true);
$id = $js[0]["id"];
$spin_count =$js[0]["scratch_count"];
$date = date("d-m-y");
for ($x=$spin_count;$x>0;$x--){
$cokk = array("15","18","20","30");
$ball = file_get_contents("user/ballance");
$cok = $cokk[rand(0,3)];
$take = $ball+$cok;
$data = "number=".$x."&user_id=".$id."&scratch=scratch&update_point=any&new_point=".$take."&";
$end = curl($url,$ua,"post",$data);
$cek = strpos($end,"Points Updated");
if($cek){
$dd2 = fopen("user/ballance","w");
 fwrite($dd2, $take);
 fclose($dd2);
$time = date("H:i:s");
echo "\033[0;36m$x\033[0;37m[\033[0;36m$time\033[0;37m]\033[0;31mscratch updated\033[0;37m|\033[0;31mballance \033[0;37m: \033[1;32m$take\n";
sleep(5);



}
}
return captcha();
}
function spin(){
echo "\033[1;36mStart spin...\n";
$ua = array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; Infinix X657C Build/QP1A.190711.020)");
$url = "http://ritechnews.com/api/update_points";
$urll= "";
$file = file_get_contents("user/log.json");
$js = json_decode($file,true);
$id = $js[0]["id"];
$spin_count =$js[0]["spin_count"];
$date = date("d-m-y");
for ($x=$spin_count;$x>0;$x--){
$cokk = array("15","18","20","30");
$ball = file_get_contents("user/ballance");
$cok = $cokk[rand(0,3)];
$take = $ball+$cok;
$data = "number=".$x."&user_id=".$id."&scratch=spin&update_point=any&new_point=".$take."&";
$end = curl($url,$ua,"post",$data);
$cek = strpos($end,"Points Updated");
if($cek){
$dd2 = fopen("user/ballance","w");
 fwrite($dd2, $take);
 fclose($dd2);
$time = date("H:i:s");
echo "\033[0;36m$x\033[0;37m[\033[0;36m$time\033[0;37m]\033[0;31mSpin updated\033[0;37m|\033[0;31mballance \033[0;37m: \033[1;32m$take\n";
sleep(5);



}
}
return scratch();
}
function curl($url, $headers, $mode="get", $data=0)
        {
        if ($mode == "get" || $mode == "Get" || $mode == "GET")
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
}
        elseif ($mode == "post" || $mode == "Post" || $mode == "POST")
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
}
        else
{
$result = "Not define";
}
        return $result;
        }
function banner(){
$sc_name = "Faya reward";
$sc_version = "1.0";
$banner =
 "\033[1;37m┌\033[1;37m───────────────\033[1;35m•\033[1;32m◥\033[1;33mೋೋ\033[1;32m◤\033[1;35m•\033[1;37m───────────────\033[1;37m┐
\033[1;37m│\033[1;36m╦╔═╦ ╦╔═╗═╗ ╦  ╔═╗╦ ╦╔═╗╔╗╔╔╗╔╔═╗╦  \033[1;37m│
\033[1;37m│\033[1;32m╠╩╗╠═╣╚═╗╔╩╦╝  ║  ╠═╣╠═╣║║║║║║║╣ ║  \033[1;37m│
\033[1;37m│\033[1;36m╩ ╩╩ ╩╚═╝╩ ╚═  ╚═╝╩ ╩╩ ╩╝╚╝╝╚╝╚═╝╩═╝\033[1;37m│
\033[1;37m├\033[1;37m────────────────────────────────────\033[1;37m┘
\033[1;37m│              \033[1;34m[\033[1;33mINFO\033[1;34m]
\033[1;37m│\033[1;31m[\033[1;37mScript : \033[1;32m$sc_name\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mScript By : \033[1;32mAga katoroik\033[0;31m[\033[1;32mKhsx\033[0;31m]\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mChannel : \033[1;32mKhsx channel\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mScript Version : \033[1;32m$sc_version\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mDate : \033[1;32m".date("Y-m-d")."\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mTelegram : \033[1;32m@OwlCamp\033[1;37m\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mSupport : \033[1;32mAll-Team-Function-INDO\033[1;37m\033[1;31m]
\033[1;37m│           \033[1;32mYour selft\033[1;37m\033[1;31m]
\033[1;37m└\033[1;37m────────────────────────────────────┘\n";

echo $banner;}
?>
