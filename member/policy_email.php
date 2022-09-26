<?
	include '../header.php';
	$topTxt01='이메일무단수집거부';
	$side_menu=3;	
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
				<p class="visualSub_txt">Site Info</p>
				사이트 안내
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
			<span>사이트 안내</span>
			<strong><?=$topTxt01?></strong>
		</div>

		<h4>제50조의2 (전자우편주소의 무단 수집행위 등 금지)</h4>
		<div class="pt_box">
			<div class="box_inner">
				1. 누구든지 전자우편주소의 수집을 거부하는 의가사 명시된 인터넷 홈페이지에서 자동으로 전자우편주소를 수집 하는 프로그램 그 밖의 기술적 장치를 이용하여 전자우편주소를 수집하여서는 아니된다.<br>
				2. 누구든지 제1항의 규정을 위반하여 수집된 전자우편주소를 판매·유통하여서는 아니된다.<br>
				3. 누구든지 제1항 및 제2항의 규정에 의하여 수집·판매 및 유통이 금지된 전자우편주소임을 알고 이를 정보 전송에 이용하여서는 아니된다.
			</div>
		</div>

		<h4 class="m-45">제65조의2 (벌칙) 다음 각호의 1에 해당하는 자는 1천만원 이하의 벌금에 처한다.</h4>
		<div class="pt_box">
			<div class="box_inner">
				1. 제50조제4항의 규정을 위반하여 기술적 조치를 한 자<br>
				2. 제50조제6항의 규정을 위반하여 영리목적의 광고성 정보를 전송한 자<br>
				3. 제50조의2의 규정을 위반하여 전자우편주소를 수집ㆍ판매ㆍ유통 또는 정보전송에 이용한 자.
			</div>
		</div>
	</div>
</div>



<?
	include '../footer.php';
?>

