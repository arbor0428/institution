<?
	include '../header.php';
	$topTxt01='광운창업지원센터';
	$side_menu=1;	
?>

<!--------------서브 비주얼영역---------------------->
<div class="sub_visual">
	<div class="content_box">
		<div class="visualRight_txt_con">
			<h5>KNU Industry-Academic Collaboration Foundation</h5>
			<p>광운대학교 변화의 시작 산학협력단에서 출발합니다.</p>
		</div>
		<div class="visualTxt_con_bg">
			<h2 class="visual_tit">
				<p class="visualSub_txt">Start-up support</p>
				창업지원
			</h2>
		</div>
	</div>
	<div class="subTop_imgs"></div><!--서브상단 bg이미지-->
</div>




<!----------------컨텐츠영역--------------------------->


<div class="content_box dp_sb">
	<?
		include 'sideMenu.php';
	?>

	<div class="content_area">
		<h2 class="page_title"><?=$topTxt01?></h2>
		<div class="page_location">
			<a href="/" class="home">HOME</a>
			<span>창업지원</span>
			<strong><?=$topTxt01?></strong>
		</div>

		<div class="txtC">
			<img src="/images/sub/sub0401_top.jpg" style="max-width:100%;" alt="상단이미지">
		</div>

		<div class="pt_box m-20">
			<div class="box_inner">
				광운대학교 창업지원센터는 서울동북부 지역의 창업지원사업 육성을 위해 1999년도에 창업보육센터로 처음 설립되었습니다.<br>
				광운창업지원센터는 광운대학교 특성화 분야(ICT, 에너지바이오, 문화콘텐츠)를 바탕으로 한 ICT융합 스타트업의 보육과 다양한 지원 프로그램의 제공을 통해 21C를 선도하는 글로벌 창업인재를 육성하고 있으며 서울창업디딤터, SNK-VITAMIN 센터, SNK-Startup Station, 융합디자인씽킹랩, 메이커스페이스 등 다양한 창업공간을 보유한 서울동북부 지역창업거점기관으로서의 역할을 수행하고 있습니다.
			</div>
		</div>

		<a href="https://startup.kw.ac.kr/" target="_blank" class="siteLinked" title="광운창업지원센터 바로가기">홈페이지 바로가기 <img src="/images/icon_exit.png" alt="바로가기"></a>
	</div>
</div>



<?
	include '../footer.php';
?>

