<?
	include '../header.php';
	$topTxt01='광운창작소';
	$side_menu=2;	
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
			<img src="/images/sub/sub0402_top.jpg" style="max-width:100%;" alt="상단이미지">
		</div>

		<div class="pt_box m-20">
			<div class="box_inner">
				광운대학교 메이커스페이스 '광운창작소'는 첨단기술이 접목되는 메이커스페이스, 창업을 지원하는 메이커스페이스, 이웃과 함께하는 메이커 스페이스를 목표로 설립되었으며,
				광운창작소는 아날로그와 디지털미디어가 공존할 수 있는 하이브리드형 메이커 스페이스 공간으로 4차 산업혁명 시대에 필요한 융합 메이커스 플랫폼입니다.
				VR/AR 기술이 접목된 미디어 영상제작, IoT 기술이 접목된 생활소품 제작 등 일상생활 속 4차 산업혁명을 체험할 수 있는 교육프로그램을 운영하며 동북권 지역 창업활성화 및 메이커 문화 확산을 주도하는 메이커스페이스가 되겠습니다.
			</div>
		</div>

		<a href="https://startup.kw.ac.kr/creation/intro.php" target="_blank" class="siteLinked" title="광운창작소 바로가기">홈페이지 바로가기 <img src="/images/icon_exit.png" alt="바로가기"></a>
	</div>
</div>



<?
	include '../footer.php';
?>

