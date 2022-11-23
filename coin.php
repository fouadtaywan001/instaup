<DOCTYOE html>
<html>
<head><meta name="viewport" content="width=device-width">
<title>Team Deb</title>

<style type='text/css'>body{height: auto;width: auto;color: #00FF00;font-family:Bree Serif;text-align:center;padding:10px;margin-top:2%;background-color:#262626;color:#1aefca;letter-spacing:1.5px;}hr{border:0;height:2px;text-align: center;background-image:linear-gradient(to right,rgba(0,0,0,0),rgba(0,255,0,1),rgba(0,0,0,0));}h1{color:#1aefca;}form{margin:2% auto;padding:5px;max-width:580px;text-align:center;}.text{font-size:16px;color:#00FF00;outline:0;border-radius:5px;background-color: #262626;position:relative;font-family:Bree Serif;text-align:center;padding:8px 15px;height:30px;border:solid 1px #00FF00;margin-bottom:15px;box-shadow:10px 10px 20px rgba(0,0,0,0.1);width:90%;}.text:hover{border:solid 1px #FF0000;}.submit{font-size:16px;color:#00FF00;position:relative;background:#262626;outline:0;border-radius:5px;font-family:Bree Serif;text-align:center;padding:8px 15px;height:45px;border:solid 1px #00FF00;margin-bottom:10%;box-shadow:10px 10px 20px rgba(0,0,0,0.1);width:50%;}.submit:hover{background:#262626;color:#FF0000;border:solid 1px #FF0000;}h3{color:#00FF00;padding:5px 0;}strong{color:orange;}marquee{color:#00FF00;font-size: 20px;text-align: center;font-weight:bold;}balance{color:#00FF00;font-size: 20px;text-align: center;font-weight:bold;}gzp{color:#00FF00;font-size: 20px;text-align: center;font-weight:bold;margin-top:10%;}#loader { border: 12px solid #00FF00; border-radius: 50%; border-top: 12px solid #595959; width: 100px; height: 100px;text-align: center;animation: spin 1s linear infinite; } @keyframes spin { 100% { transform: rotate(360deg); } } .center { position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; }a{text-decoration:none;color:#00FF00;}a:hover{color:#FF0000;}::placeholder { color: #80FF80; font-size:16px;}audio{ display:none;}</style>

</head>
<body>
     <?php
error_reporting(0);
echo "<font color='white' size='5'><bold><hr class='hr-19'>INSTA-UP COIN CHECKER<hr class='hr-19'><bold>";
if(isset($_GET['submit'])){
	#header('refresh: 2');
	$uid=$_GET['oid'];
  //  $uidx='8227104482';

// echo $uid= explode('",', explode('profilePage_',json_decode(file_get_contents("https://www.instagram.com/$unamex/?__a=1"),1)['logging_page_id'])[1])[0];

  function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }



  $x16=rando(16);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$url1='https://instaup.marsapi.com/get_likes/user/coins';


$name=''.$fname.''.$lname.''.$no.'';
$data0='market=EnglishWebPayment&user_id='.$uid.'&iad=de7d6788fcf061b1341cf0661af36fe35ec72647&user_name='.$name;

$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$headers1=['agent:Xiaomi:29:M2007J20CI',
'access:e57e7e635b7b637d2bb736aeabdfab2e',
'cnt:in',
'versionName:17.4.1',
'version:96',
'pkg:f2c6d7a5b030a1542f7eb589d5013340',
'enMarket:EnglishWebPayment',
'market:PlayStore',
'uid:'.$uid,
'api_key: ABCXYZ123TEST',
'crc:2125015323/24038908',
"Nagent:0/02:00:00:00:00:00/48/45578ac73e6721f4/0/de7d6788fcf061b1341cf0661af36fe35ec72647",
'dsl:fa8274bf',
'aid:de7d6788fcf061b1341cf0661af36fe35ec72647',
'special-user:0',
'Host:instaup.marsapi.com',
'Connection:Keep-Alive',
'Accept-Encoding:gzip',
'cookie:  token=gXcuokehRMHd3NLbYV6AD9zZSwCsWyOE5K1xpBat4UIGQF80lPJ7rnji2vfmqT50682519079',];


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
	   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	$c= curl_exec ($ch);
	
	curl_close ($ch);
/*
    $json1=json_decode($output1,true);
  $c=$json1['coins'];
if($c>200){
      $url0="https://instaup.marsapi.com/get_likes/order/follow";




$idx=$uid+3423;

$d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';




$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');





$dx=urlencode($dx);
 
$ll='https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a';

 $data0='gift=0&order_count=150&user_id='.$uid.'&tokenV2='.$tkv.'&start_value=145108&media_url=%7B%22media_url%22%3A%22https%3A%2F%2Fwww.instagram.com%2F'.$ll.'%22%2C%22user_name%22%3A%'.$fname.'%22%7D&order_id='.$uidx;
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $c= curl_exec ($ch);
 curl_close ($ch);
   $c=json_decode($c,1)['message'];
}
*/
echo "<div class='success'><center>
<font color='white'><hr>$c<hr></font></center></div>";

//  sleep(1);
 // echo "<script>window.location.href='https://t.me/technical_deb/';</script>";
	
}
	
	if(!isset($_GET['submit'])){
echo"<form action='' method='get'>

<input type='text' name='oid'  class='text' placeholder='Enter insta-up id' required><br><br>";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
?>