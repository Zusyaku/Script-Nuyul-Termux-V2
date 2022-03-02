<?php
error_reporting(0);
//autor,title,ref,yt,server,api
const 
a = [
"iewil",
"lemeclaim",
"https://bit.ly/36P4aqE",
"https://youtu.be/ovod6LUnSEE",
"https://pastebin.com/raw/RZxwy6dr",
"http://ip-api.com/json"
],
n = "\n",
//versi
v = "1.0",
//Warna
b = "\033[1;34m",
c = "\033[1;36m",
d = "\033[0m",
h = "\033[1;32m",
k = "\033[1;33m",
m = "\033[1;31m",
p = "\033[1;37m",
u = "\033[1;35m",
hp = "\033[1;7m",
mp = "\033[101m\033[1;37m",
mm = "\033[101m\033[1;31m",
ht = "https://lemeclaim.xyz";
//class modul
function a($u, $h = 0, $p = 0, $x = 0){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $u);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($ch, CURLOPT_COOKIE,TRUE);
	//curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
	//curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
	if($p){
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
	}
	if($h){
		curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
	}if($x){
		curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
		curl_setopt($ch, CURLOPT_PROXY, $x);
	}
	curl_setopt($ch, CURLOPT_HEADER, true);
	$r = curl_exec($ch);
	$c = curl_getinfo($ch);
	if(!$c) return "Curl Error : ".curl_error($ch); else{
		$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		curl_close($ch);
		return array($hd,$bd);
	}
}
function b($i=0){
	if(!$i){
		c();
	}
	$s = file_get_contents(a[4]);
	$t = e($s,'#'.a[1].':','|',1);
	if($t == "on"){
		$st = w("Online","h");
	}elseif($status == "off" or $status == null){
		$st = w("Offline","m");
	}
	$z = trim(strtolower(a[1]));
	return p.' Day:'.date("l").'    Date:'.date("d/M/Y").'    Time:'.date("H:i").n.l().
h." ╔═╗┬ ┬┌┐┌┌─┐┌┬┐┬┌─┐┌┐┌   ╔═╗┌─┐┌┬┐┬┬ ┬ ┬   ╦╔╦╗".n.
k." ╠╣ │ │││││   │ ││ ││││───╠╣ ├─┤│││││ └┬┘───║ ║║".n.
p." ╚  └─┘┘└┘└─┘ ┴ ┴└─┘┘└┘   ╚  ┴ ┴┴ ┴┴┴─┘┴    ╩═╩╝".n.l().
b.' Script    '.p.': '.k.$z.' '.c.v.'          '.$st.n.n.
m.'『』'.h.'Creator'.p.':'.u.' iewil'.n.m.'『』'.h.'Youtube'.p.': '.k.'youtube.com/c/iewil'.n.
m.'『』'.h.'support'.p.': '.k.'All-Team-Function & All-Member'.n.
m.'『』'.h.'D_TRX  '.p.': '.k.'TK67fkL9EpcoCqP2kxonwMmmwyQ5pJmm'.n.
m.'『』'.h.'NOTE   '.p.': '.m.'THIS SCRIPT FREE NOT FOR SALE'.n.l().h."Regist here".k.": ".p.a[2].n.n;
}
function c(){
	return system('clear');
}
function d($m){
	$s = str_split($m);
	foreach($s as $t){
		echo $t;
		usleep(70000);
	}
}
function e($a,$b,$c,$d){
	return explode($c,explode($b,$a)[$d])[0];
}
function g(){
	$a = w("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".w("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".w("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".w("Family-Team-Function-INDO","b")."\n";
	print d($a);
}
function i(){
	$s = file_get_contents(a[4]);
	$t = e($s,'#'.a[1].':','|',1);
	if($t == "on"){
		print b();
	}elseif($status == "off" or $status == null){
		print b();
		g();exit;
	}
}
function t(){
	$t = json_decode(file_get_contents(a[5]),1)["timezone"];
	if($t){
		date_default_timezone_set($t);
	}
}
function x(){
	error_reporting(0);
	if(strpos(b(1),"iewil") == ""){
		c();
		echo 'Warning: Undefined variable $a on line 3'.n;
		exit;
	}
}
function l(){
	$l = 50;
	return p.str_repeat('─',$l).n;
}
function s($n){
	if(file_exists($n)){
		$d = file_get_contents($n);
	}else{
		$d = readline(w("Input ".$n,"m").w(" > ","k").h.n);
		echo n;
		file_put_contents($n,$d);
	}
	return $d;
}
function w($s,$c){
	if($c == "r"){
		$w = ['h','k','b','u','m'];
		$c = $w[array_rand($w)];
	}
	$w = ['h'=>h,'k'=>k,'b'=>b,'u'=>u,'m'=>m,'p'=>p,'c'=>c];
	return $w[$c].$s.d;
}
//class bot
function head(){
	$c = s('Cookie');$u = s('User_Agent');
	return [
	"cookie: ".$c,
	"user-agent: ".$u
	];
}
function dash(){
	$url = ht."/home.php";
	return a($url,head())[1];
}
function claim($c){
	$url = ht."/home.php?".$c;
	return a($url,head())[1];
}
function balance(){
	$url = ht."/account.php";
	return a($url,head())[1];
}
function withdraw($coin){
	$url = ht."/account.php";
	$data = $coin."=withdraw";
	return a($url,head(),$data)[1];
}
function checkBalance(){
	$r = balance();
	$info = explode('<tr>',$r);
	
	foreach($info as $a => $b){
		if($a == 0 || $a == 1)continue;
		$coin = explode('</td>',explode('<td>',$b)[1])[0];
			$bal = explode('</td>',explode('<td>',$b)[2])[0];
		if($a % 3 == 2 || $a % 3 == 0){
			echo k.substr($coin,0,3).m." : ".h.substr($bal,0,9).u." | ";
		}else{
			echo k.substr($coin,0,3).m." : ".h.substr($bal,0,9)."\n";
		}
	}
	echo "\n";
}

t();i();
cookie:x();
s('Cookie');
s('User_Agent');
system("termux-open-url ".a[3]);
print b();

if(preg_match("/Login Now!/",dash())){
	unlink("Cookie");goto cookie;
}

checkBalance();
print l();
menu:
echo m."1 >".p." AutoClaim\n";
echo m."2 >".p." Withdraw\n";
echo m."3 >".p." Update Cookie\n";
$pil = readline(h."Input Number ".m."> ".p);
print l();

if($pil==1){
	goto autoclaim;
}elseif($pil==2){
	goto withdraw;
}elseif($pil==3){
	unlink("Cookie");goto cookie;
}else{
	echo m."Bad Number\n".p;print l();goto menu;
}
withdraw:
checkBalance();
print l();
$r = balance();
preg_match_all("#<input value='withdraw' type='submit' name='(.*?)'>#i",$r,$info);
foreach($info[1] as $a => $x){
	$b = strtoupper($x);
	$a +=1;
	if($a % 4 == 3 || $a % 4 == 1 || $a % 4 == 2){
		if(strlen($b) == 3){
			$s = " ";
		}else{
			$s = "";
		}
		if(strlen($a) == 1){
			echo c.$a.m."  > ".k.$b.$s.u." | ";
		}else{
			echo c.$a.m." > ".k.$b.$s.u." | ";
		}
	}else{
		if(strlen($b) == 3){
			$s = " ";
		}else{
			$s = "";
		}
		if(strlen($a) == 1){
			echo c.$a.m."  > ".k.$b.$s."\n";
		}else{
			echo c.$a.m." > ".k.$b.$s."\n";
		}
	}
}
echo c."99".m." > ".k."Back\n";
$w = readline(u.'Input number '.p.'> ');
print l();
if($w == 99){
	goto menu;
}
$coin = $info[1][$w-1];
$wd = withdraw($coin);
$err = explode(' funds',explode('<div class=\"alert alert-danger\">',$wd)[1])[0];
$ss = explode('"',explode('toastr["success"]("',$wd)[1])[0];
if($err){
	echo m.$err."\n";
	print l();
	goto withdraw;
}elseif($ss){
	echo h.$ss."\n";
	print l();
	goto withdraw;
}else{
	echo k."Something wrong\n";
	print l(); 
	goto menu;
}

autoclaim:
$r = dash();
$con = explode('<input type="checkbox" id="',$r);
for($i=1;$i<count($con);$i++){
	$coin[]=explode('"',$con[$i])[0];
}
foreach($coin as $a => $b){
	$a +=1;
	if($a % 4 == 3 || $a % 4 == 1 || $a % 4 == 2){
		if(strlen($b) == 3){
			$s = " ";
		}else{
			$s = "";
		}
		if(strlen($a) == 1){
			echo c.$a.m."  > ".k.$b.$s.u." | ";
		}else{
			echo c.$a.m." > ".k.$b.$s.u." | ";
		}
	}else{
		if(strlen($b) == 3){
			$s = " ";
		}else{
			$s = "";
		}
		if(strlen($a) == 1){
			echo c.$a.m."  > ".k.$b.$s."\n";
		}else{
			echo c.$a.m." > ".k.$b.$s."\n";
		}
	}
}
echo "\n";
$isi = readline('Input number '.p.'> ');
print l();
$isi = explode(',', $isi);
foreach ($coin as $a=>$b){ 
$a += 1;
if (in_array($a, $isi)) $x[$coin[$a-1]] = "1";
else $x[$coin[$a-1]] = "0";
}
$x["redirect"] = "1";
$c = http_build_query($x);

while(true){
	tmr(60);
	$r = claim($c);
	$limit = explode(';',explode('var count = ',$r)[1])[0];
	if($limit == ""){
		echo "Do the Shortlink to continue\n";
		goto menu;
	}else{
		$timr=time()+$limit;
		$res=$timr-time();
		echo c."Limit : ".u.date('H:i:s',$res)."\n";
	}
	if(preg_match("/success/",$r)){
		echo c."Info  : ".h."Ammount sent to your balance\n";
		checkBalance();
		print l();
	}
}

function tmr($tmr){
	$timr=time()+$tmr;
	while(true){
		echo "\r                       \r";
		$res=$timr-time();
		if($res < 1){break;}
		echo w(date('i:s',$res),"r");sleep(1);
	}
}

