<?
	include '../header.php';
	$topTxt01='서울창업디딤터';
	$side_menu=4;	
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
			<img src="/images/sub/sub0404_top.jpg" style="max-width:100%;" alt="상단이미지">
		</div>

		<div class="pt_box m-20">
			<div class="box_inner">
				서울 동북부 지역의 건전한 창업 생태계 구축을 위해 상상력과 아이디어를 가진 (예비)창업자들의 성장을 지원합니다.<br>
				2014년 5월, 창업지원 인프라가 부족한 서울 동북부 지역의 창업 활성화를 목표로 개소한 서울창업디딤터(구.아스피린센터)는
				서울 동북부 지역의 창업 거점 역할을 수행하며 초기 창업기업의 발굴과 육성에 힘쓰고 있는 서울시 산하 창업보육센터입니다.<br><br>

				 창업에 관심 있는 일반시민과 창업자를 대상으로 체계화된 교육 및 멘토링 프로그램을 제공하고 있으며
				잠재력 있는 (예비)창업자 및 창업기업을 선발하여 각 기업에 부합하는 맞춤형 엑셀러레이팅 프로그램을 운영하여
				초기 창업기업이 스케일업 기업으로 성장할 수 있도록 지원하고 있습니다.
			</div>
		</div>

		<a href="http://didimteo.or.kr/" target="_blank" class="siteLinked" title="서울창업디딤터 바로가기">홈페이지 바로가기 <img src="/images/icon_exit.png" alt="바로가기"></a>
	</div>
</div>



<?
	include '../footer.php';
?>

