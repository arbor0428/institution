<?
//항목별 검색
$reqUrl = "http://plus.kipris.or.kr/kipo-api/kipi/patUtiModInfoSearchSevice/getWordSearch?";		//요청주소

//입력값
$param = Array();

$param['word'] = urlencode($_POST['search_word']);		//단어
$param['year'] = $_POST['search_year'];						//연차(당해년도 기준으로 최근 년차 (0 ~ 10)

$pageNo = $_POST['pageNo'];
if(!$pageNo)	$pageNo = 1;

$param['numOfRows'] = "3";			//1페이지 출력건수
$param['pageNo'] = $pageNo;		//페이지번호
$param['ServiceKey'] = "kZvYT1G50UK4HXaan=VDndQmJc8yEdxfeZmpBXxXy/g=";		//인증키

$queryString = '';
$i = 0;
foreach($param as $k => $v){
	if($i > 0)		$queryString .= "&";
	$queryString .= $k."=".$v;
	$i++;
}


//호출
$xmlFile = $reqUrl.$queryString;

$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL,$xmlFile); //접속할 URL 주소
/*
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt ($ch, CURLOPT_SSLVERSION,1);
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $param); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
*/
curl_setopt ($ch, CURLOPT_TIMEOUT, 30);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$xml = simplexml_load_string($result);

curl_close($ch);

$json = json_encode($xml); // convert the XML string to JSON

echo $json;
?>