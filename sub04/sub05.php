<?
	include '../header.php';
	$topTxt01='강북청년마루';
	$side_menu=5;	
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
			<img src="/images/sub/sub0405_top.jpg" style="max-width:100%;" alt="상단이미지">
		</div>

		<div class="pt_box m-20">
			<div class="box_inner">
				강북청년창업마루는 창업실험실, 커뮤니티방, 프로그램실, 교육장, 스튜디오 등으로 꾸며져있고, 지하 1층과 지상 4,5층은 '창업지원센터'으로 지상 1~3층은 서울청년센터 '강북오랑'으로 운영됩니다.
				서울청년센터 '강북오랑'에서는 청년지원정보 제공, 청년커뮤니티 운영지원, 청년 공간 활성화를 위한 프로그램 운영 등 지역 내 청년 맞춤형 서비스를 제공하며,
				'창업지원센터'는 입주기업 모집·관리, 창업교육 및 컨설팅 등 창업지원프로그램을 운영하여 창업기반이 부족한 청년들의 창업을 지원합니다.
			</div>
		</div>

		<a href="https://youth.seoul.go.kr/site/orang/center/CT00013/intro" target="_blank" class="siteLinked" title="강북오랑 바로가기">홈페이지 바로가기 <img src="/images/icon_exit.png" alt="바로가기"></a>
	</div>
</div>



<?
	include '../footer.php';
?>

