<?
$famArr02 = Array();

$famArr02["광운대학교"] = "http://www.kw.ac.kr/";
$famArr02["광운대학교 웹메일시스템"] = "http://wmail.kw.ac.kr/";
$famArr02["광운대학교 종합정보시스템 u-Campus"] = "https://info.kw.ac.kr";
$famArr02["광운교원인사/연구지원시스템"] = "http://nkuris.kw.ac.kr";
$famArr02["광운신한카드관리시스템"] = "http://kw.rndcard.com";
$famArr02["광운대학교 중앙도서관"] = "http://kupis.kwangwoon.ac.kr";
$famArr02["광운대학교 자산관리시스템"] = "http://jasan.kw.ac.kr/";
$famArr02["광운공개강좌"] = "http://openclass.kw.ac.kr";
$famArr02["연촌재"] = "http://gosi.kw.ac.kr/";
$famArr02["대학발전기금"] = "http://fund.kw.ac.kr/index.jsp";
$famArr02["아이스링크"] = "http://icerink.kw.ac.kr/";
$famArr02["푸드코트"] = "http://foodcourt.kw.ac.kr/";
$famArr02["중소기업산학협력센터"] = "http://kutec.kw.ac.kr/";

ksort($famArr02);	//키값 정렬
?>

<ul class="siteBtnWrap dp_wrap dp_f">
<?
	$disNum = 0;

	foreach($famArr02 as $k => $v){
		if($k == "광운대학교 종합정보시스템 u-Campus")	$k = "광운대학교<br>종합정보시스템 u-Campus";

		$disChk = true;

		//검색어 확인
		if($_GET['famTxt']){
			$kTmp = str_replace(' ','',$k);
			$famTmp = str_replace(' ','',$_GET['famTxt']);

			if(strpos($kTmp,$famTmp) === false){
				$disChk = false;
			}
		}

		if($disChk){
			$disNum++;
?>
	<li><a class="dp_f dp_c" href="<?=$v?>" title="<?=$k?>" target="_blank"><?=$k?></a></li>
<?
		}
	}
?>
</ul>

<?
if($disNum == 0){
?>
<div style='width:100%;margin:80px 0;text-align:center;'>기관 정보가 없습니다.</div>
<?
}
?>

<?
if($_GET['jQueryLoad']){
?>
<script>
$(document).ready(function(){
	$("#loading").delay("200").fadeOut();
});
</script>
<?
}
?>