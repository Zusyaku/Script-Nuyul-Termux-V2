<?php

$wallet=file_get_contents("wallet.txt");
$line="wallet.txt";

define("abu","\033[1;30m");
define("hijau","\033[1;32m");
define("putih","\033[1;37m");
define("kuning","\033[1;33m");
define("merah","\033[1;31m");
$color=[abu,hijau,putih,kuning,merah];

foreach($color as $ne){
echo $ne;
}
system("clear");
echo putih,"\n                             d8b,";
echo putih,"\n                            `8P8\n";

echo putih,"\n    88bd8b,d88b    d888b8b   d88    d8888b    88bd88b";
echo putih,"\n   88P'`?8P'?8b  d8P' ?88   ?88   d8P' ?88   88P'  `";
echo putih,"\n  d88  d88  88P  88b  ,88b   88b  88b  d88  d88";
echo putih,"\n d88' d88'  88b  `?88P'`88b  `88b `?8888P' d88'";
echo putih,"\n                             )88";
echo putih,"\n FAUCET MILLIONARE v1.0      ,88P";
echo putih,"\n                          `?888P\n";

echo hijau,"\n creator      ".putih,": KETUA KOCHENK 1.0\n";
echo hijau,"\n join grup    ".putih,": t.me/panggilmajor\n";
echo hijau,"\n total address".putih,": ".count(file($line))-"1"."\n";
echo kuning,"\n ============================================\n\n";


function ex($a,$ak,$i,$r){
$t=explode($a,$r);
$z=explode($ak,$t[$i]);
return $z[0];
}
error_reporting(0);
$jml=count(file($line));
while(true){
$jumlah=1;
do{

$data=shell_exec('curl --silent --data "t99fc=empty&address='.explode(PHP_EOL, $wallet)[$jumlah].'&t99fid=5&r=DNHFNXqA6d1igWE6U7WSHcsqXLn4f1NQ6v" https://faucetmillionare.org/');
$msgS=ex('"message message-success">'.PHP_EOL.'                ','were accumulated in your address: <a',1,$data);
$msgE=ex('"message message-error">','</div>',1,$data);
$msgE=str_replace(':','',$msgE);
$msgT=ex('data-seconds="','">',1,$data);
if($msgS<=null){
echo putih,"\n [".merah,"!".putih,"]msg-error: ".merah,$msgE."\n";
}else{
echo putih,"\n [".hijau,"#".putih,"]msg-success: ".hijau,$msgS.putih,explode(PHP_EOL, $wallet)[$jumlah]."\n";
$timr=time()+$msgT;
while (true):
echo "\r                       \r";
$res = $timr - time();
if ($res < 1){
break;
}
echo "\033[0;33m [=]wait \033[1;37m" . date('i:s', $res);
sleep(1);
endwhile;
}
$jumlah++;
}while($jumlah <= count(file($line)));
}

