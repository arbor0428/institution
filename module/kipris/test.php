<?
//항목별 검색
$reqUrl = "http://plus.kipris.or.kr/kipo-api/kipi/patUtiModInfoSearchSevice/getWordSearch?";		//요청주소

//입력값
$param = Array();

$param['word'] = urlencode("남자검정반바지");				//단어
$param['year'] = "0";					//연차(당해년도 기준으로 최근 년차 (0 ~ 10)

$param['numOfRows'] = "3";		//출력건수
$param['pageNo'] = "1";				//페이지번호
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

//echo 'url : '.$xmlFile.'<br>';

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
$load_string = simplexml_load_string($result);

curl_close($ch);


$header = $load_string->header;
$successYN = $header->successYN;	//호출 성공 유무

if($successYN == 'Y'){
	$count = $load_string->count;
	$totalCount = $count->totalCount;	//총 데이터 수

	foreach($load_string->body as $body){
		$items = $load_string->body->items;

		foreach($items->item as $item){

			$applicantName = $item->applicantName;				//출원인
			$applicationDate = $item->applicationDate;			//출원일자
			$applicationNumber = $item->applicationNumber;	//출원번호
			$astrtCont = $item->astrtCont;							//초록
			$bigDrawing = $item->bigDrawing;						//큰이미지경로
			$drawing = $item->drawing;								//이미지경로
			$indexNo = $item->indexNo;								//일련번호
			$inventionTitle = $item->inventionTitle;					//발명의명칭(한글)
			$ipcNumber = $item->ipcNumber;						//IPC번호
			$openDate = $item->openDate;							//공개일자
			$openNumber = $item->openNumber;					//공개번호
			$publicationDate = $item->publicationDate;			//공고일자
			$publicationNumber = $item->publicationNumber;	//공고번호
			$registerDate = $item->registerDate;						//등록일자
			$registerNumber = $item->registerNumber;				//등록번호
			$registerStatus = $item->registerStatus;					//등록상태

			echo $applicantName.'<br>';


		}
	}

	echo 'totalCount : '.$totalCount.'<br>';
}

?>