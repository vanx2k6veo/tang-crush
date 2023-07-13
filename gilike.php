 
exit();
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";

echo $van." TÀI KHOẢN : ".$trang.$username." \n";
echo $van." SỐ DƯ : ".$trang.$coin." \n";
echo $van." LƯU Ý : LỖI KHÔNG CHẠY LÀ DÍNH CAPTCHA NÊN AE VÀO LÀM TAY 1 JOB RỒI LẤY LẠI AUTHORIZATION NHÉ \n";
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
while(true){
//// nhận job 

$url_1 = "https://sv2.golike.net/api/advertising/publishers/tiktok/jobs?account_id=".$account_id."&data=null";
$tsm_1 = array(
"Host:sv2.golike.net",
"accept:application/json, text/plain, */*",
"authorization:".$authorization,
"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.130 Mobile Safari/537.36",
"content-type:application/json;charset=utf-8",
"origin:https://app.golike.net",
);
$home_1 = post_type($url_1,$tsm_1);

if ($home_1["success"]== 200 ){
	echo $van." NHẬN NHIỆM VỤ THÀNH CÔNG \r";
	$ads_id = $home_1["data"]["id"];
	$link = $home_1["data"]["link"];
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    	    @system('xdg-open '.$link);
    	} else {
        	@system('cmd /c start '.$link);
    	}

}else{
	$message = $home_1["message"];
	echo $van." TÌM NHIỆM VỤ THẤT BẠI : $message \n";
	exit;
}

for($m=$dl;$m>-1;$m--){
sleep(1);
echo $van." Đang Delay $m \r";
}
//// nhận 
$url_2 = "https://sv5.golike.net/api/advertising/publishers/tiktok/complete-jobs";
$tsm_2 = array(
"Host:sv5.golike.net",
"accept:application/json, text/plain, */*",
"authorization:".$authorization,
"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.130 Mobile Safari/537.36",
"content-type:application/json;charset=utf-8",
"origin:https://app.golike.net",
);
$data = '{"ads_id":'.$ads_id.',"account_id":'.$account_id.',"async":true,"data":null}';
$nhan_coin = post_type2($url_2, $tsm_2, $data);

if ($nhan_coin["success"]== 200 ){
	$type_2 = $nhan_coin["data"]["type"];
	$object_id = $nhan_coin["data"]["object_id"];
	$gio = date("H:i");
$tt = $tt+1;
echo "".$do." | ".$BBlue.$tt.$do." | ".$luc.$gio.$do." | ".$trang.$type_2.$do." | ".$vang.$object_id.$do." | ".$BBlue."SUCCESS ".$do."|\n";
}else{
	echo " NHẬN COIN THẤT BẠI \n";
}




}
function post_type2($url, $tsm, $data){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr2,true);
return $js;
}
function post_type($url, $tsm){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr2,true);
return $js;
}
