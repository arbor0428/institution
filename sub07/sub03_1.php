<?
$famArr01 = Array();

$famArr01["고용노동부"] = "http://www.molab.go.kr";
$famArr01["공정거래위원회"] = "http://ftc.go.kr";
$famArr01["관세청"] = "http://www.customs.go.kr";
$famArr01["교육부"] = "http://www.mest.go.kr";
$famArr01["국가과학기술지식정보서비스"] = "http://www.ntis.go.kr";
$famArr01["국립국어원"] = "http://www.korean.go.kr";
$famArr01["국립암센터"] = "http://ncc.re.kr";
$famArr01["국립환경과학원"] = "http://www.nier.go.kr";
$famArr01["국무조정실 국무총리비서실"] = "http://pmo.go.kr";
$famArr01["국토교통부"] = "http://www.mltm.go.kr";
$famArr01["금융위원회"] = "http://www.fsc.go.kr";
$famArr01["기획재정부"] = "http://www.mosf.go.kr";
$famArr01["농림수산식품기술기획평가원"] = "http://www.ipet.re.kr";
$famArr01["농림축산식품부"] = "http://www.maf.go.kr/main.jsp";
$famArr01["농촌진흥청"] = "http://www.rda.go.kr";
$famArr01["대검찰청"] = "http://www.spo.go.kr";
$famArr01["대학알리미"] = "http://www.academyinfo.go.kr/";
$famArr01["문화재청"] = "http://www.cha.go.kr";
$famArr01["문화체육관광부"] = "	http://www.mct.go.kr";
$famArr01["법무부"] = "http://www.moj.go.kr";
$famArr01["법제처"] = "http://www.moleg.go.kr";
$famArr01["보건복지부"] = "http://www.mw.go.kr";
$famArr01["산림청"] = "	http://www.forest.go.kr";
$famArr01["산업안전보건연구원"] = "http://oshri.kosha.or.kr";
$famArr01["산업통상자원부"] = "http://www.mke.go.kr";
$famArr01["수도권매립지관리공사"] = "http://www.slc.or.kr";
$famArr01["식품의약품안전처"] = "http://www.kfda.go.kr";
$famArr01["안전보건공단"] = "http://www.kosha.or.kr";
$famArr01["안전행정부"] = "http://www.mopas.go.kr";
$famArr01["에너지관리공단"] = "http://www.kemco.or.kr/";
$famArr01["여성가족부"] = "http://www.mogef.go.kr";
$famArr01["외교부"] = "http://www.mofat.go.kr";
$famArr01["전자입찰 사이트(ebiz4u)"] = "http://www.ebiz4u.co.kr";
$famArr01["정보통신산업진흥원"] = "http://www.iita.re.kr";
$famArr01["조달청"] = "http://www.pps.go.kr";
$famArr01["중소기업기술정보진흥원"] = "http://www.tipa.or.kr/";
$famArr01["중소기업청"] = "http://www.smba.go.kr";
$famArr01["질병관리본부"] = "http://www.cdc.go.kr";
$famArr01["통계청"] = "http://kostat.go.kr";
$famArr01["통일부"] = "http://www.unikorea.go.kr";
$famArr01["특허청"] = "http://www.kipo.go.kr";
$famArr01["한국건설기술연구원"] = "http://www.kict.re.kr";
$famArr01["한국과학기술기획평가원"] = "http://www.kistep.re.kr";
$famArr01["한국과학창의재단"] = "	http://www.kofac.re.kr";
$famArr01["한국교육학술정보원"] = "http://www.keris.or.kr";
$famArr01["한국교통과학기술진흥원"] = "http://www.kictep.re.kr";
$famArr01["한국농어촌공사"] = "http://www.kict.re.kr";
$famArr01["한국방송통신전파진흥원"] = "http://www.korpa.or.kr";
$famArr01["한국보건산업진흥원"] = "http://www.khidi.or.kr";
$famArr01["한국산업기술진흥원"] = "http://www.kiat.re.kr";
$famArr01["한국산업기술평가관리원"] = "http://www.keit.re.kr";
$famArr01["한국에너지기술평가원"] = "http://www.ketep.re.kr";
$famArr01["한국연구재단"] = "http://www.nrf.re.kr";
$famArr01["한국인터넷진흥원"] = "http://www.kisa.or.kr";
$famArr01["한국전력공사"] = "http://www.kepco.co.kr";
$famArr01["한국정보화진흥원"] = "http://www.nia.or.kr";
$famArr01["한국철도공사"] = "	http://www.korail.go.kr";
$famArr01["한국콘텐츠진흥원"] = "http://www.kocca.kr";
$famArr01["한국토지주택공사"] = "http://www.lh.or.kr";
$famArr01["한국해양수산개발원"] = "http://www.kmi.re.kr";
$famArr01["한국환경공단"] = "https://www.keco.or.kr";
$famArr01["한국환경산업기술원"] = "http://www.keiti.re.kr";
$famArr01["해양경찰청"] = "http://www.kcg.go.kr";
$famArr01["행정중심복합도시건설청"] = "http://www.macc.go.kr";
$famArr01["환경부"] = "http://me.go.kr";
$famArr01["한국과학기술연구원"] = "http://www.kist.re.kr";

ksort($famArr01);	//키값 정렬
?>

<ul class="siteBtnWrap dp_wrap dp_f">
<?
	$disNum = 0;

	foreach($famArr01 as $k => $v){
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