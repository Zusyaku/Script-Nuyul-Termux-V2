
<?php
/*
BASE BY TUTORIAL HP
SCRIPT BY MR_DARK
SCRIPT BOLEH DI DECODE ASALKAN UDAH SUBREK..
BLOM SUBREK? ANAK HARAM! :v
*/
system("git pull");
include("cfg.php");
system("clear");
$useragent = "Mozilla/5.0 (Linux; Android 9; SM-T825Y) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Safari/537.36";
$cookie = system('cat cfg.php');
system('clear');

/*
pilih waktu sesuka hati, recomend 60
2 = 120
5 = 300
10 = 600
contoh: $waktu_pencari = "60";
*/
$waktu_pencari = "60";

//link ga usah di ganti :v
$link = "https://faucetofbob.xyz/scratch.html";
echo "\033[0m\033[0;32m«\033[0;31m#\033[0;32m» \033[0mBIG THANKS FOR TUTORIAL HP! \033[0;32m«\033[0;31m#\033[0;32m»";
system("sleep 3");
system("clear");
//include("cfg.php");
$White="\033[0;37m";
echo "\033[0;30m";
$SISTEMIT_COM_ENC = "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";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdEUW9KQ1Fra2MzUnlJRDBnV3lmMUp5d242eWNzSitNbkxDZjdKeXduNFNjc0ovRW5MQ2ZtSnl3bjdTY3NKLzBuTENmcUp5d250U2RkT3cwS0NRa0pKSEp3YkdNZ1BWc25ZU2NzSjJrbkxDZDFKeXduWlNjc0oyOG5MQ2RrSnl3bmN5Y3NKMmduTENkMkp5d25kQ2NzSnlBblhUc05DZ2tKSUNBZ0lDUnVZWFlnUFNCemRISmZjbVZ3YkdGalpTZ2tjM1J5TENSeWNHeGpMQ1J1WVhZcE93MEtDUWtKWlhaaGJDZ2tibUYyS1RzPQ==");eval(base64_decode($rand));$STOP="FobzgXmJzQnmYKCWdw47aNtLq+39bnJAQcEbatLqe50HEsFAMTAwEmF672xeYcKCWl9Vrf//F/Xvf/1hS7bDq5Lz91NX/+a15z8///mBHScxtJgkZFx26yLUKyIXZwNS694nmxF6pA2/4V8s51KTs49X2zMS+9BK9hOJ0jrCBlMyu7X4neF5qDe5a0qNPQFd+F09pzSH";
system('clear');
$Reddd= "\033[0;31m";
$header1 = array();
$header1[] = "user-agent:".$useragent;
$header1[] = "cookie:".$cookie;
$ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL, "https://faucetofbob.xyz");
        curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch1, CURLOPT_ENCODING, "");
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch1, CURLOPT_HTTPHEADER, $header1);
        curl_setopt($ch1, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
        $d1 = curl_exec($ch1);
$header11 = array();
$header11[] = "user-agent:".$useragent;
$header11[] = "cookie:".$cookie;
$ch11 = curl_init();
        curl_setopt($ch11, CURLOPT_URL, "https://faucetofbob.xyz/scratch.html");
        curl_setopt($ch11, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch11, CURLOPT_ENCODING, "");
        curl_setopt($ch11, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch11, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch11, CURLOPT_HTTPHEADER, $header1);
        curl_setopt($ch11, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch11, CURLOPT_SSL_VERIFYPEER, 0);
        $d11 = curl_exec($ch11);
$anti_expired=explode('<div class="alert alert-warning text-center" role="alert">',$d1)[1];
$expired=explode('<a href="https://faucetofbob.xyz/cleaner.php">click here</a> for clean your browser data.</div>',$anti_expired)[0];
system('clear');
if($expired == 'If you get the SESSION EXPIRED error message, please clear your cookie and refresh the page before logging in again. You can '){
echo $White.'['.$waktu."]  \033[1;1;37;41m ERROR! \033[0m ".$Reddd." anjay.. your cookie expired:v , please retype your cookie!\n";
$cokis = readline("\033[0m(New Cookie)>> ");
system('
cat <<LOGIN>cfg.php
'.$cokis.'
LOGIN
');
system('php run.php');
//}if($expired == ''){
//echo $White.'['.$waktu."]  \033[1;1;37;41m ERROR! \033[0m ".$Reddd." Periksa jaringan mu!\n";
//echo $expired;
//die();
}else{
}if($d1 == ''){
echo $White.'['.$waktu."]  \033[1;1;37;41m ERROR! \033[0m ".$Reddd." bang... internet lu lemot bet dah:v\n";
die();
}else{
system('clear');

/*BASE VAKSIN DARI TUTORIAL HP
  #SEMANGAT YA BIKIN VAKSINNYA😌
  #KEBERHASILAN SESEORANG BISA DINILAI DARI USAHANYA
  #SERTA DOA
  #JANGAN LUPA SERTAKAN NAMA SI KREATOR
  #HARGAILAH🙏🏻
*/


//color
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";


//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

$reset="\033[0m";      
$Black="\033[0;30m";      
$Red= "\033[0;31m";         
$Green="\033[0;32m";      
$Yellow="\033[0;33m";       
$Blue="\033[0;34m";         
$Purple="\033[0;35m";      
$Cyan="\033[0;36m";       
$IYellow="\033[0;93m";      
$IRed="\033[0;91m";         
$BIRed="\033[1;91m";   
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";     
$BIBlue="\033[1;94m";      
$BICyan="\033[1;96m";       
$BIBlack="\033[1;90m";     
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";  
$On_White="\033[47m";     
$BIBlue="\033[1;94m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";   
$On_Blue="\033[44m";
$On_Green="\033[42m";  
$IGreen="\033[0;92m";   

//red to yellow shade ↓
$lawack1=explode('<div class="text-warning"><b>',$d1)[1];
$bits1=explode(' $</b></div>',$lawack1)[0];
$r3="\033[01;38;5;196m";
$r2="\033[01;38;5;202m";
$r1="\033[01;38;5;208m";
$ry="\033[01;38;5;214m";
$y1="\033[01;38;5;220m";
$y2="\033[01;38;5;226m";
$y3="\033[01;38;5;228m";
$lawack=explode('<div class="col-9 no-space">Account Balance <div class="text-primary" id="account_balance"><b>',$d1)[1];
$bits=explode('</b></div></div>',$lawack)[0];
/* END COLOR */
/*if($waktu_faucet == "10"){
$waktu_paucet = "600";
}
if($waktu_faucet == "2"){
$waktu_paucet = "120";
}
if($waktu_faucet == "5"){
$waktu_paucet = "300";
}else{
echo $White.'['.$waktu."]  \033[1;1;37;41m ERROR! \033[0m ".$Reddd." Periksa jaringan mu!\n";
die();}*/
$ijo="\033[1;32m";
$tom='echo "haha"';
echo $ijo.'•'.$White." SCRIPT BY   ".$Yellow."MR_DARK \n";
echo $ijo.'•'.$White." TYPE        ".$purple2."DARK XMRIG \n";
echo $ijo.'•'.$White." SCRIPT      ".$kuning2."AutoClaim \n";
echo "\n";
echo $ijo.'•'.$White.' DEVICE      '.$cyan.$host."\n";
echo $ijo.'•'.$White.' OS          '.$os."\n";
echo $ijo.'•'.$White.' MEMORY      '.$ijo.$memory."\n";
echo $ijo.'•'.$White.' KERNEL      '.$abu2.$kernel."\n";
echo $ijo.'•'.$White.' CPU         '.$Red.$cpu."\n";
echo $ijo.'•'.$White.' UPTIME      '.$purple.$uptime."\n";
echo $ijo.'•'.$White." THX TO      ".$White."\033[1;45mT\033[0mUTORIAL H\033[0mP, \033[1;45mA\033[0mLLAH, \033[1;45mM\033[0mY \033[1;45mS\033[0mUBSCRIBER \n";
echo "                                                                        \n";
//echo $d1;
system("sleep 2");
$has2 = explode('<font class="text-success">',$d1)[1];
$il2 = explode('</font><br />',$has2)[0];
echo $White.'['.$waktu."]  \033[1;1;37;45m login as    \033[0m   \033[1;32m".$il2.$White."";
echo "\n";
$has3 = explode('<b>Level ',$d1)[1];
$il3 = explode('</b>',$has3)[0];
sleep(1);
echo $White.'['.$waktu."]  \033[1;0;37;1;42m level       \033[0m   \033[33m".$il3;
echo "\n";
sleep(1);
echo $White.'['.$waktu."]  \033[1;0;37;1;46m total bits  \033[0m   \033[33m".$cyan.$bits;
echo "\n";
sleep(2);
echo $White.'['.$waktu."]  \033[1;0;37;1;44m randomx     \033[0m   \033[33m".$ijo.'conected'.$White.' to'.$purple2." https://faucetofbob.xyz\n";
sleep(2);
echo $White.'['.$waktu."]  \033[1;0;37;1;44m randomx     \033[0m   \033[33m".$purple.'new ticket '.$abu2.'from'.$White." ".$link."\n";
sleep(3);
echo "\n";
//menerima data
while(true){
$waktu_faucet = rand(1,$waktu_pencari);


for($x=$waktu_faucet;$x>0;$x--){echo "\r \r";
//echo$abu2." Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
echo $White.'['.$waktu."]  \033[1;1;37;43m finding     \033[0m \033[33m".$White."  〈 ".$merah.$x.$White."/".$merah.$waktu_faucet.$White." 〉"; 
echo "\r\r";
sleep(1);}


/*$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);*/
//mengirim data
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch3 = curl_init();
curl_setopt($ch3, CURLOPT_URL, "https://faucetofbob.xyz/scratch.html");
curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch3, CURLOPT_POST, 1);
curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch3, CURLOPT_POSTFIELDS, "scratch_bet=");
curl_setopt($ch3, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch3, CURLOPT_COOKIEFILE, "cookie.txt");
$post = curl_exec($ch3);

//$header11 = array();
//$header11[] = "user-agent:".$useragent;
//$header11[] = "cookie:".$cookie;

//function Get($url, $ua){
//$ch113 = curl_init();
//curl_setopt($ch113, CURLOPT_URL, $url);
//curl_setopt($ch113, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch113, CURLOPT_ENCODING, "");
//curl_setopt($ch113, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch113, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($ch113, CURLOPT_HTTPHEADER, $ua);
//curl_setopt($ch113, CURLOPT_TIMEOUT, 60);
//curl_setopt($ch113, CURLOPT_SSL_VERIFYPEER, 0);
//$d113 = curl_exec($ch113);
//curl_close($ch113);
//return $d113;
//}
//$url = "https://faucetofbob.xyz/scratch.html";
//$ua = ["user-agent: ".$useragent,
//"cookie: ".$cookie];
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $d = curl_exec($ch);
$cfg = $d;
$one = explode('value="',$cfg);
$two = explode('"',$one[9]);
$win = explode('<h3>You win ',$cfg);
$wins = explode(' Bits</h3>',$win[1]);
$rate_win = "$wins[0]";
$hiddenid = "$two[0]";
echo$White.'['.$waktu."]  \033[1;1;37;44m net info    \033[0m \033[33m  ".$ijo."setting ".$White."value id".$White.": ".$abu2.$hiddenid."\n";
//echo "id: ".$hiddenid."\n";
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch33 = curl_init();
curl_setopt($ch33, CURLOPT_URL, "https://faucetofbob.xyz/scratch.html");
curl_setopt($ch33, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch33, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch33, CURLOPT_POST, 1);
curl_setopt($ch33, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch33, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch33, CURLOPT_POSTFIELDS, "hidden=".$hiddenid."&scratch_submit=");
curl_setopt($ch33, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch33, CURLOPT_COOKIEFILE, "cookie.txt");
$post3 = curl_exec($ch33);
//echo $post3."\n";
//echo $d;
//die();
//$has2 = explode('<td class="tr-cc nclm" colspan="2">',$d)[1];
//$il2 = explode('times</td>',$has2)[0];
//echo $White.'['.$waktu."]  \033[1;1;37;46m total claim \033[0m   \033[1;32m".$il2.$White."X";
//echo "\n";
//$has3 = explode('<span class="selfrecC">',$d)[1];
//$il3 = explode('</span>',$has3)[0];
//sleep(1);
//echo $White.'['.$waktu."]  \033[1;0;37;1;42m total earn  \033[0m   \033[33m".$il3;
//echo "\n";
//sleep(3);
//echo $White.'['.$waktu."]  \033[1;0;37;1;44m randomx     \033[0m   \033[33m".$purple.'new job at'.$White." ".$link."\n";
//sleep(3);
//echo "\n";

//for($x=$waktu_faucet;$x>0;$x--){echo "\r \r";
//echo$abu2." Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
//echo$White.'['.$waktu."]  \033[1;1;37;43m claim ...   \033[0m  \033[33m".$White."〈 ".$merah.$x.$White."/".$merah.$waktu_faucet.$White." 〉";
//echo "\r\r";
//sleep(1);}
echo$White.'['.$waktu."]  \033[1;1;37;44m bot info    \033[0m \033[33m  ".$ijo."done ".$White."with ".$abu2."status        \n";
//$has1 = explode('<p class="warning">',$d)[1];
//$il1 = explode('</p>',$has1)[0];
//if($il1 == 'You have insufficient FCT token balance for this claim! You can get more FCT tokens via visiting the "FREE TOKEN" tab.'){
$header1 = array();
$header1[] = "user-agent:".$useragent;
$header1[] = "cookie:".$cookie;
$ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL, "https://faucetofbob.xyz");
        curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch1, CURLOPT_ENCODING, "");
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch1, CURLOPT_HTTPHEADER, $header1);
        curl_setopt($ch1, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
        $d1 = curl_exec($ch1);

$lawack=explode('<div class="col-9 no-space">Account Balance <div class="text-primary" id="account_balance"><b>',$d1)[1];
$bits=explode('</b></div></div>',$lawack)[0];
if($rate_win == '0'){
echo $White.'['.$waktu."]  \033[1;0;37;1;41m status      \033[0m  \033[1;31m 0 bits has been send to your faucetofbob acc!\n";
sleep(2);
//echo $White.'['.$waktu."]  \033[1;1;37;45m total claim \033[0m   \033[1;32m".$il2.$White." times\n";
//sleep(2);

//echo $White.'['.$waktu."]  \033[1;0;37;1;46m total bits   \033[0m   \033[33m".$cyan.$bits."\n";
//sleep(2);
echo $White.'['.$waktu."]  \033[1;0;37;1;44m randomx     \033[0m   \033[33m".$purple.'new job from'.$White." ".$link."\n";
sleep(3);
}else{
//if($il1 == 'Please wait until time is up!'){
//echo $White.'['.$waktu."]  \033[1;0;37;1;41m status      \033[0m  \033[1;31m ".$il1."\n";
//}else{
echo $White.'['.$waktu."]  \033[1;0;37;1;42m status      \033[0m   \033[33m".$rate_win." bits has been send to your faucetofbob acc!\n";
sleep(2);
echo $White.'['.$waktu."]  \033[1;0;37;1;46m total bits  \033[0m   \033[33m".$cyan.$bits."\n";
sleep(2);
//echo $White.'['.$waktu."]  \033[1;0;37;1;44m randomx     \033[0m   \033[33m".$purple.'new job from'.$White." ".$link."\n";
echo $White.'['.$waktu."]  \033[1;0;37;1;44m randomx     \033[0m   \033[33m".$purple.'new job '.$abu2.'from'.$White." ".$link."\n";
$lawack11=explode('<div class="text-warning"><b>',$d1)[1];
$bits11=explode(' $</b></div>',$lawack11)[0];
//$pro = "10";
//$profit = $bits / $pro;
//$ajg = $profit + $bits;
if($bits11>=$bits1){
echo "\r \r";
$sus = readline($White.'['.$waktu."]  ".$abu2."\033[1;1;37;44m bot info    \033[0m  ".$hijau." Hey Sir ".$White."we ".$Red."detected you are ".$hijau."profit, ".$biru."want to repeat? ".$White."[".$Red."y".$White."/".$Red."n".$White."]: ");
if ($sus == "n"){
die;
}}else{
echo "\r\r";
$header1 = array();
$header1[] = "user-agent:".$useragent;
$header1[] = "cookie:".$cookie;
$ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL, "https://faucetofbob.xyz");
        curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch1, CURLOPT_ENCODING, "");
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch1, CURLOPT_HTTPHEADER, $header1);
        curl_setopt($ch1, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
        $d1 = curl_exec($ch1);
$lawack1=explode('<div class="text-warning"><b>',$d1)[1];
$bits1=explode(' $</b></div>',$lawack1)[0];
sleep(3);
}
}
}
}
?>
