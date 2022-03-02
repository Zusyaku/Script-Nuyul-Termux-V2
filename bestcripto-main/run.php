<?php
error_reporting(0);
const
//autor,title,register,youtube,server,api
a = [
"iewil",
"bestcripto",
"https://bit.ly/3htIGBG",
"https://youtube.com/c/iewil",
"https://pastebin.com/raw/RZxwy6dr",
"http://ip-api.com/json",
"https://bestcripto.xyz"
],
b = "\033[1;34m",
c = "\033[1;36m",
d = "\033[0m",
e = "",
f = "",
g = "",
h = "\033[1;32m",
i = "",
j = "",
k = "\033[1;33m",
l = "",
m = "\033[1;31m",
n = "\n",
o = "",
p = "\033[1;37m",
q = "",
r = "https://company.shortminer.work/?r=TCtRPwDjCws2Vzb3ZgdBQ63NqU5E5QRt&rc=DGB",
s = "",
t = "",
u = "\033[1;35m",
v = "1.0",
w = "",
x = "",
y = "",
z = "",
hp = "\033[1;7m",
mp = "\033[101m\033[1;37m",
mm = "\033[101m\033[1;31m";
//CLASS MODUL
function a($u, $h = 0, $p = 0, $x = 0){//url,header,post,proxy
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
	}elseif($st == "off" or $st == null){
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
function f($a){
	return http_build_query($a);
}
function g(){
	$a = w("Script mati karena web update / scam!","m")."\nSupport Channel saya dengan cara\nSubscribe ".w("https://www.youtube.com/c/iewil","k")."\nkarena subscribe itu gratis :D\nUntuk mendapatkan info Script terbaru\nJoin grub via telegram ~> ".w("https://t.me/Iewil_G","c")."\nðŸ‡®ðŸ‡© ".w("Family-Team-Function-INDO","b")."\n";
	print d($a);
}
function j(){
	$s = file_get_contents(a[4]);
	$t = e($s,'#'.a[1].':','|',1);
	if($t == "on"){
		print b();
	}elseif($status == "off" or $status == null){
		print b();
		g();exit;
	}
}
function l(){
	$l = 50;
	return str_repeat('─',$l).n;
}
function m($img){
	$content=base64_encode(file_get_contents($img));
	$head=["content-type: application/json"];
	$data=json_encode(["requests"=>[["image"=>["content"=>$content],"features"=>[["type"=>"TEXT_DETECTION"]]]]]);
	$result=a("https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y",$head,$data)[1];
	$respon=strpos($result,'Enter the following:\n');
	if($respon){
		$respon=substr($result,$respon);
		$respon=str_replace('Enter the following:\n','',$respon);
		$respon= preg_replace("/[^a-zA-Z]/", "",str_replace('\n','',substr($respon,strpos($respon,'"'))));
	}
	if(strlen($respon) > 25){
	}else{
		return $respon;
	}
}
function n($img,$img2){
	$apikey = o();
	$respon = m($img);
	if($respon==""){
		system('convert '.$img.' -gravity North -chop x15 '.$img2.' 2>/dev/null');
		$hasil=json_decode(shell_exec('curl --silent -H "apikey:'.$apikey.'" --form "file=@'.$img2.'" --form "language=eng" --form "ocrengine=2" --form "isOverlayRequired=false" --form "iscreatesearchablepdf=false" https://api.ocr.space/Parse/Image'))->ParsedResults[0]->ParsedText;
		$respon = preg_replace("/[^a-zA-Z]/","", $hasil);
	}
	return $respon;
}
function o(){
	$a = "0123456789abcdef";
	$b = substr(str_shuffle($a), 0, 10);
	$c = $b."88957";
	return $c;
}
function p($url,$ref){
	$h = ["Host: api-secure.solvemedia.com","user-agent: ".s('User_Agent')];
	$arr = ["accept: */*","referer: ".$ref,"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];
	$r = a($url,array_merge($h,$arr))[1];
	$ca = explode('"',$r)[5];
	return $ca;
}
function q($ca,$ref){
	$h = ["Host: api-secure.solvemedia.com","user-agent: ".s('User_Agent')];
	$url = "https://api-secure.solvemedia.com/papi/media?c=".$ca.";w=300;h=150;fg=000000;bg=f8f8f8";
	$arr = ["accept: image/webp,image/apng,image/*,*/*;q=0.8","referer: ".$ref,"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];
	$r = a($url,array_merge($h,$arr))[1];
	return $r;
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
function t(){
	$t = json_decode(file_get_contents(a[5]),1)["timezone"];
	if($t){
		date_default_timezone_set($t);
	}
}
function w($s,$c){
	if($c == "r"){
		$w = ['h','k','b','u','m','c'];
		$c = $w[array_rand($w)];
	}
	$w = ['h'=>h,'k'=>k,'b'=>b,'u'=>u,'m'=>m,'p'=>p,'c'=>c];
	return $w[$c].$s.d;
}
function x(){
	error_reporting(0);
	if(strpos(b(1),"iewil") == ""){
		c();
		echo 'Warning: Undefined variable $a on line 115'.n;
		exit;
	}
}
function z($x,$y,$z){
	return ["+".$y."+".$z."+".$x,"+".$x."+".$y."+".$z,"+".$x."+".$z."+".$y,"+".$y."+".$x."+".$z,"+".$z."+".$y."+".$x,"+".$z."+".$x."+".$y];
}

//CLASS MODUL BOT
function h(){
	$u=s("User_Agent");
	$c=s("Cookie");
	return ["user-agent: ".$u,"cookie: ".$c];
}
function _gd(){
	$url = a[6]."/dashboard";
	$r = a($url,h())[1];
	$user = e($r,'<h5 class="font-size-15 text-truncate">',"</h5>",1);
	$bal = e($r,'<h4 class="mb-0">','</h4>',1);
	$en = e($r,'<h4 class="mb-0">','</h4>',2);
	return ["user"=>$user,"balance"=>$bal,"energy"=>$en];
}
function _gf(){
	$url = a[6]."/faucet";
	return a($url,h())[1];
}
function _pf($csrf,$token,$bot,$ca,$cap){
	$url = a[6]."/faucet/verify";
	$data = "antibotlinks=".$bot."&".f(["csrf_token_name"=>$csrf,"token"=>$token,"captcha"=>"solvemedia","g-recaptcha-response"=>"","adcopy_response"=>$cap,"adcopy_challenge"=>$ca]);
	return a($url,h(),$data)[1];
}
function gfirewall(){
	$url = a[6]."/firewall";
	return a($url,h())[1];
}
function pfirewall($data){
	$url = a[6]."/firewall/verify";
	return a($url,h(),f($data))[1];
}
function gptc(){
	$url = a[6]."/ptc";
	return a($url,h())[1];
}
function gview($id){
	$url = a[6]."/ptc/view/".$id;
	return a($url,h())[1];
}
function pview($id,$csrf,$token,$cap,$ca){
	$url = a[6]."/ptc/verify/".$id;
	$data = ["captcha"=>"solvemedia","adcopy_response"=>$cap,"adcopy_challenge"=>$ca,"g-recaptcha-response"=>"","csrf_token_name"=>$csrf,"token"=>$token];
	return a($url,h(),f($data))[1];
}
function gauto(){
	$url = a[6]."/auto";
	return a($url,h())[1];
}
function pauto($token){
	$url = a[6]."/auto/verify";
	$data = ["token"=>$token];
	return a($url,h(),f($data))[1];
}
function gwheel(){
	$url = a[6]."/wheel";
	return a($url,h())[1];
}
function pwheel($ca,$cap,$token,$bot){
	$url = a[6]."/wheel/verify";
	$data = f(["adcopy_challenge"=>$ca,"adcopy_response"=>$cap,"token"=>$token,"captcha"=>"solvemedia"])."&antibotlinks=".$bot;
	return json_decode(a($url,h(),$data)[1],1);
}
function gaciv(){
	$url = a[6]."/achievements";
	return a($url,h())[1];
}
function paciv($csrf,$id){
	$url = a[6]."/achievements/claim/".$id;
	$data = ["csrf_token_name"=>$csrf];
	return a($url,h(),f($data))[1];
}
function gwithdraw(){
	$url = a[6]."/dashboard";
	return a($url,h())[1];
}
function pwithdraw($csrf,$metod,$amm,$em){
	$url = a[6]."/dashboard/withdraw";
	$data= ["csrf_token_name"=>$csrf,"method"=>$metod,"amount"=>$amm,"wallet"=>$em];
	return a($url,h(),f($data))[1];
}
//CLASS BOT
t();j();
cookie:x();
s('Cookie');s('User_Agent');
$solv = S('Url_solvemedia');
$em = S('Withdraw_Wallet');
system("termux-open-url ".a[3]);
print b();

$r1 = _gd();
echo w("Username   ~> ","h").w($r1["user"],"k")."\n";
echo w("Balance    ~> ","h").w($r1["balance"],"k")."\n";
echo w("Energy     ~> ","h").w($r1["energy"],"k")."\n";
echo w("Wallet     ~> ","h").w($em,"k")."\n";
print l();

menu:
echo w("1 >","m")." Faucet\n";
echo w("2 >","m")." Visit Ptc\n";
echo w("3 >","m")." Auto Faucet\n";
echo w("4 >","m")." Whell of Fortune\n";
echo w("5 >","m")." Achievements\n";
echo w("6 >","m")." Withdraw\n";
echo w("7 >","m")." Update Cookie\n";
$pil=readline(w("Input Number ","h").w("> ","m"));
print l();
if($pil==1){goto faucet;
}elseif($pil==2){goto ptc;
}elseif($pil==3){goto auto;
}elseif($pil==4){goto wheel;
}elseif($pil==5){goto aciv;
}elseif($pil==6){goto withdraw;
}elseif($pil==7){unlink("Cookie");goto cookie;
}else{echo w("Bad Number\n","m").n;print l();goto menu;}

faucet:
while(true){
	echo w("check faucet","c");
	$r1 = _gf();
	if(preg_match('/Firewall/',$r1)){
		echo "\r                \r";
		echo m."Firewall detect ".p.$tipe.m.", pls Open web!";
		$r2 = gfirewall();
		$tipe = explode('"',explode('<input type="hidden" name="captchaType" value="',$r2)[1])[0];//recaptchav2
		$csrf = explode('"',explode('name="csrf_token_name" value="',$r2)[1])[0];
		sleep(5);
		echo "\r                                         \r";
		if($tipe=="solvemedia"){
			$ca = p($solv,a[6]);
			file_put_contents("img.png",q($ca,a[6]));
			$respon = n("img.png","im.png");
			if(file_exists("img.png")){unlink("img.png");}
			if(file_exists("im.png")){unlink("im.png");}
			$data = ["adcopy_response"=>$respon,"adcopy_challenge"=>$ca,"captchaType"=>"solvemedia","csrf_token_name"=>$csrf];
		}elseif($tipe=="recaptchav2" || $tipe=="hcaptcha"){
			goto faucet;
		}else{
			goto faucet;
		}
		$r3=pfirewall($data);
		if(_gd()["balance"] == ""){}else{
			echo w("Firewall ~> ","m").w($tipe,"p").w(" Success","h");
			echo "\n";
			sleep(5);
		}
		goto faucet;
	}
	$left = explode('/',explode('<p class="lh-1 mb-1 font-weight-bold">',$r1)[3])[0];
	echo "\r                \r";
		echo w("Trying Bypass ",'k');
		$csrf = explode('">',explode('_token_name" id="token" value="',$r1)[1])[0];
		$token = explode('">',explode('name="token" value="',$r1)[1])[0];
		$tmr = explode(';',explode('var wait = ',$r1)[1])[0];
		if($tmr){tmr($tmr);goto faucet;}
		$b = explode('rel=\"',$r1);
		$b1 = explode('\">',$b[1])[0];
		$b2 = explode('\">',$b[2])[0];
		$b3 = explode('\">',$b[3])[0];
		if($b3){
			$bot = z($b1,$b2,$b3);
			$ca = p($solv,a[6]);
			file_put_contents("fct.png",q($ca,a[6]));
			$cap = n("fct.png","fc.png");
		
			if(file_exists("fct.png")){unlink("fct.png");}
			if(file_exists("fc.png")){unlink("fc.png");}
			
			echo "\r                   \r";
			if($cap==""){goto faucet;}
			foreach($bot as $cok){
				echo $cok;
				$r2 = _pf($csrf,$token,$cok,$ca,$cap);
				$ss = explode("has",explode("Swal.fire('Good job!', '",$r2)[1])[0];
				if($ss){
					echo "\r            \r";
					echo w("Success    ~> ","h").w($ss,"k")."\n";
					echo w("Balance    ~> ","h").w(_gd()["balance"],"k")."\n";
					echo w("Claim Left ~> ","h").w(($left-1),"k")."\n";
					print l();goto faucet;
				}
				echo "\r            \r";
			}
			if($ss==""){
				echo w("Invalid Captcha","m");
				sleep(2);
				echo "\r                \r";
			}
		}
}
ptc:
echo w("1 >","m")." Manual\n";
echo w("2 >","m")." Bypass\n";
echo w("3 >","m")." Back\n";
$pol=readline(w("Input Number ","h").w("> ","m"));
print l();
if($pol==1){echo w("VISIT PTC MODE ","h").w(">","m").w(" MANUAL\n","b");
}elseif($pol==2){echo w("VISIT PTC MODE ","h").w(">","m").w(" BYPASS\n","b");
}elseif($pol==3){goto menu;
}else{echo w("Bad Number\n","m")."\n";print l();goto ptc;}
print l();
$nom = 1;
fie:
while(true){
	$r1 = _gf();
	if(preg_match('/Firewall/',$r1)){
		echo m."Firewall detect , pls Open web!";
		sleep(10);
		echo "\r                                         \r";
		goto fie;
	}
	$r2 = gptc();
	$id = explode("'",explode("/view/",$r2)[$nom])[0];
	$tot = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$r2)[1])[0];
	if($id){
		$r3 = gview($id);
		if($r3){
			$ads = explode('"',explode('<iframe id="ads" src="',$r3)[1])[0];
			if($id==$idtot){
			}else{
				echo w("Visit ","b").w($ads,"k")."\n";
			}
			$csrf = explode('">',explode('_token_name" value="',$r3)[1])[0];
			$token = explode('">',explode('name="token" value="',$r3)[1])[0];
			$tmr = explode(';',explode('var timer = ',$r3)[1])[0];
			if($tmr){tmr($tmr);}
			
			$ca = p($solv,a[6]);
			file_put_contents("ptc.png",q($ca,a[6]));
			if($pol == 1){
				system("termux-open ptc.png");
				$cap = readline(w('Input Captcha ','h').w('> ','m'));
			}else{
				$cap = n("ptc.png","pt.png");
			}
			if(file_exists("ptc.png")){unlink("ptc.png");}
			if(file_exists("pt.png")){unlink("pt.png");}
			
			$r4 = pview($id,$csrf,$token,$cap,$ca);
			$ss = explode("has",explode("Swal.fire('Good job!', '",$r4)[1])[0];
			$r5 = gptc();
			$asu = explode('</p>',explode('<p class="lh-1 mb-1 font-weight-bold">',$r5)[1])[0];
			if($tot==$asu){
				echo w("Invalid Captcha","m");
				if($pol==1){
					echo "\n";print l();
				}elseif($pol==2){
					sleep(2);
					echo "\r                \r";
				}
			}else{
				echo w("Success    ~> ","h").w($ss,"k")."\n";
				echo w("Balance    ~> ","h").w(_gd()["balance"],"k")."\n";
				echo w("Claim Left ~> ","h").w($asu,"k")."\n";
				print l();
			}
			$idtot=$id;
		}else{
			echo w("Link Error","m");
				if($pol==1){
					echo "\n";print l();
				}elseif($pol==2){
					sleep(2);
					echo "\r                \r";
				}
			$nom = $nom+1;
		}
	}else{
		echo w("Ptc habis\n","m");print l();
		goto menu;
	}
}

auto:
while(true){
	$r1=gauto();
	if(preg_match('/Firewall/',$r1)){
		echo m."Firewall detect , pls Open web!";
		sleep(10);
		echo "\r                                         \r";
		goto auto;
	}
	if(preg_match("/You don't have enough energy/",$r1)){
		echo w("You don't have enough energy","m")."\n";print l();goto menu;
	}
	$tmr=explode(',',explode('let timer = ',$r1)[1])[0];
	$token=explode('"',explode('name="token" value="',$r1)[1])[0];
	
	if($tmr){tmr($tmr);}
	$r2=pauto($token);
	$ss = explode("has",explode("Swal.fire('Good job!', '",$r2)[1])[0];
	if($ss){
		echo w("Success    ~> ","h").w($ss,"k")."\n";
		echo w("Balance    ~> ","h").w(_gd()["balance"],"k")."\n";
		echo w("Energy     ~> ","h").w(_gd()["energy"],"k")."\n";
		print l();
	}else{
		echo w("Invalid Token","m")."\n";
		print l();
	}
}
wheel:
while(true){
	$r = gwheel();
	if(preg_match('/Firewall/',$r)){
		echo m."Firewall detect , pls Open web!";
		sleep(10);
		echo "\r                                         \r";
		goto wheel;
	}
	$tm = e($r,'<b id="minute">','</b>',1);
	$ts = e($r,'<b id="second">','</b>',1);
	if($tm){
		$tmr = $tm*60;
		if($ts){
			tmr($tmr+$ts);
			goto wheel;
		}
		tmr($tmr);
		goto wheel;
	}else{
		if($ts){
			tmr($ts);
		}
	}
	
	$left = e($r,'<p class="lh-1 mb-1 font-weight-bold">','/',3);
		$token = e($r,'_token_name" id="token" value="','">',1);
		$b = explode('rel=\"',$r);
		$b1 = explode('\">',$b[1])[0];
		$b2 = explode('\">',$b[2])[0];
		$b3 = explode('\">',$b[3])[0];
		if($b3){
			$bot = z($b1,$b2,$b3);
			$ca = p($solv,a[6]);
			file_put_contents("whell.png",q($ca,a[6]));
			$cap = n("whell.png","wheel.png");
		
			if(file_exists("whell.png")){unlink("whell.png");}
			if(file_exists("wheel.png")){unlink("wheel.png");}
			
			echo "\r                   \r";
			if($cap==""){goto wheel;}
			foreach($bot as $cok){
				echo $cok;
				$r2 = pwheel($ca,$cap,$token,$cok);
				if($r2["status"]=="success"){
					echo "\r            \r";
					echo w("Success    ~> ","h").w($r2["reward"],"k")."\n";
					echo w("Balance    ~> ","h").w(_gd()["balance"],"k")."\n";
					echo w("Energy     ~> ","h").w(_gd()["energy"],"k")."\n";
					echo w("Claim Left ~> ","h").w(($left-1),"k")."\n";
					print l();goto wheel;
				}
				echo "\r            \r";
			}
			if($r2["status"]=="error"){
				echo w($r2["message"],"m");
				sleep(2);
				echo "\r                          \r";
			}
		}
}
aciv:
$r1=gaciv();
if(preg_match('/Firewall/',$r1)){
	echo m."Firewall detect , pls Open web!";
	sleep(10);
	echo "\r                                         \r";
	goto aciv;
}
$csrf=explode('"',explode('_token_name" value="',$r1)[1])[0];
$misi=explode('<tr>',$r1);
for($x=2;$x<count($misi);$x++){
	$y=$x-1;$var=24;$len=" ";
	$ms=explode('</td>',explode('<td>',$misi[$x])[1])[0];
	$mg=strlen($ms);
	if($mg>24){
		$ms = substr($ms,0,22);
		$mg=strlen($ms);
	}
	$varmg=$var-$mg;$spc=str_repeat($len,$varmg);
	$ex=explode('</div>',explode('aria-valuemax="100">',$misi[$x])[1])[0];
	echo w($y." > ","m").w($ms,"h").$spc."~> ".w($ex,"k")."\n";
}
echo w('Back > ','m').w('Main Menu','h')."\n";
$chuck=readline(w('Input ','h').'> ');
print l();
$check=strtoupper($chuck);
if($check=="BACK"){goto menu;}
$tot=count($misi)-2;
if($check == 0 or $check > $tot){
	echo w("serah lu ","m")."\n";Li();goto aciv;
}
$cuk=$check+1;
$tea=$misi[$cuk];
$ms=explode('</td>',explode('<td>',$tea)[1])[0];
$id=explode('"',explode('achievements/claim/',$tea)[1])[0];
$r2=paciv($csrf,$id);
$ss=explode('have',explode("'Good job!', '",$r2)[1])[0];
if($ss){
	$ss=str_replace("and","\n              ",$ss);
	echo w("Success    ","h")."~> ".$ss."\n";
}else{
	echo w("An Error","m")."\n";
}
print l();
goto aciv;

withdraw:
$r1=gwithdraw();
if(preg_match('/Firewall/',$r1)){
	echo m."Firewall detect , pls Open web!";
	sleep(10);
	echo "\r                                         \r";
	goto withdraw;
}
$csrf=explode('"',explode('_token_name" value="',$r1)[1])[0];

$rad=explode('<div class="card-radio">',$r1);
for($ri=1;$ri<count($rad);$ri++){
	$cur=explode('</span>',explode('<span>',$rad[$ri])[1])[0];
	echo w($ri." > ","m").w($cur,"k")."\n";
}
$me=readline(w('Input Number ','h').w('> ','m'));
print l();
$metod=explode("']",explode("currencies['",$rad[$me])[1])[0];
$amm=explode('"',explode('id="usdBalance" value="',$r1)[1])[0];

$r2=pwithdraw($csrf,$metod,$amm,$em);
$ss = explode("'",explode("Swal.fire('Good job!', '",$r2)[1])[0];
$wr=strip_tags(explode("'",explode("Swal.fire('Error!', '",$r2)[1])[0]);
if($ss){
	echo w($ss,"h")."\n";
}else{
	echo w($wr,"m")."\n";
}
print l();
goto menu;


function Tmr($tmr){$timr=time()+$tmr;while(true){echo "\r                       \r";$res=$timr-time(); if($res < 1){break;}echo w(date('i:s',$res),"r");sleep(1);}}