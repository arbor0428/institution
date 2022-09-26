<?
//제이쿼리 로드함수를 이용해 페이지가 로딩된 경우
if($_GET['jQueryLoad']){
	include "../module/class/class.DbCon.php";
	include "../module/class/class.Util.php";


	//항목별 검색
	$reqUrl = "http://plus.kipris.or.kr/kipo-api/kipi/patUtiModInfoSearchSevice/getWordSearch?";		//요청주소

	//입력값
	$param = Array();

	$param['word'] = urlencode($search_word);		//단어
	$param['year'] = $search_year;						//연차(당해년도 기준으로 최근 년차 (0 ~ 10)

	if(!$pageNo)	$pageNo = 1;

	$param['numOfRows'] = "30";			//1페이지 출력건수
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
?>
<style>
.grayLine{background:#fff;}
.grayLine:hover{background:#f8f8f8;cursor:pointer;}
.apiData{display:none;}
</style>

<script>
$(document).ready(function(){
	$("#loading").delay("200").fadeOut();

	var offset = $("#apiWap").offset();
	$('html, body').animate({scrollTop : offset.top - 250}, 400);
});

function apiData(appNum){
	$("#multiBox").css({"width":"90%","max-width":"900px"});
	$('#multiFrame').html("<iframe src='sub02_data.php?appNum="+appNum+"' style='width:100%; height:500px;' frameborder='0' scrolling='auto'></iframe>");
	$('.multiBox_open').click();
}
</script>
<?
}
?>

		<div class="mb_scroll m_45">
			<div class="tbl_basic">
				<table>
					<thead>
						<tr>
							<th>출원번호</th>
							<th>출원인</th>
							<th>발명의명칭</th>
							<th>출원일자</th>
							<th>등록상태</th>
						</tr>
					</thead>
					<tbody>
					<?
						if(!$_GET['jQueryLoad']){
					?>
						<tr>
							<td colspan='5' height='100'>검색조건을 입력해 주세요.</td>
						</tr>
					<?
						}else{
							$header = $xml->header;
							$successYN = $header->successYN;	//호출 성공 유무

							if($successYN == 'Y'){
								$count = $xml->count;
								$totalCount = $count->totalCount;	//총 데이터 수

								$arrList = Array('applicantName','applicationDate','applicationNumber','astrtCont','bigDrawing','drawing','inventionTitle','ipcNumber','openDate','openNumber','publicationDate','publicationNumber','registerDate','registerNumber','registerStatus');

								if($totalCount > 0){
									foreach($xml->body as $body){
										$items = $xml->body->items;

										foreach($items->item as $item){

											$applicantName = $item->applicantName;				//출원인
											$applicationDate = $item->applicationDate;			//출원일자
											$applicationNumber = $item->applicationNumber;	//출원번호
											$astrtCont = $item->astrtCont;							//초록
											$bigDrawing = $item->bigDrawing;						//큰이미지경로
											$drawing = $item->drawing;								//이미지경로
											$inventionTitle = $item->inventionTitle;					//발명의명칭(한글)
											$ipcNumber = $item->ipcNumber;						//IPC번호
											$openDate = $item->openDate;							//공개일자
											$openNumber = $item->openNumber;					//공개번호
											$publicationDate = $item->publicationDate;			//공고일자
											$publicationNumber = $item->publicationNumber;	//공고번호
											$registerDate = $item->registerDate;						//등록일자
											$registerNumber = $item->registerNumber;				//등록번호
											$registerStatus = $item->registerStatus;					//등록상태

											if($applicationDate)	$applicationDate = date('Y.m.d',strtotime($applicationDate));
					?>

						<tr class='grayLine' onclick="apiData('<?=$applicationNumber?>')">
							<td><?=$applicationNumber?></td>
							<td><?=$applicantName?></td>
							<td><?=$inventionTitle?></td>
							<td><?=$applicationDate?></td>
							<td><?=$registerStatus?></td>
						</tr>

						<div id='app_<?=$applicationNumber?>' class='apiData'>
						<?
							foreach($arrList as $v){
						?>
							<span class='<?=$v?>'><?=${$v}?></span>
						<?
							}
						?>
						</div>



					<?
										}
									}
								}else{
									echo "<tr><td colspan='5' height='100'>검색결과가 없습니다.</td></tr>";
								}


							}else{
								echo "<tr><td colspan='5' height='100'>검색실패 (잠시후 다시 시도해 주세요.)</td></tr>";
							}
						}
					?>
					</tbody>
				</table>
			</div>
		</div>


<?
if($totalCount){
	$record_count = $param['numOfRows'];		//한 페이지에 출력되는 레코드수
	$link_count = 10;										//한 페이지에 출력되는 페이지 링크수

	if(!$record_start)	$record_start = 0;

	$current_page = ($record_start / $record_count) + 1;

	$group = floor($record_start / ($record_count * $link_count));

	$total_record = $totalCount;

	$total_page = (int)($total_record / $record_count);

	if($total_record % $record_count){
		$total_page++;
	}

	include 'sub02_pageNum.php';
}
?>