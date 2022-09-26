<?
	include '../header.php';
	$topTxt01='인사말';
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
				<p class="visualSub_txt">KUIACF Introduction</p>
				산학협력단 소개					
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
			<span>산학협력단 소개</span>
			<strong><?=$topTxt01?></strong>
		</div>



		<div class="greeting_img">
			<span class="bg_txt">산업체와의 긴밀한 협조관계를 바탕으로<br>산업체가 수요하는 전문인력과 기술을 제공합니다.</span>
		</div>

		<div class="f18 lh15 m_60">
			그 동안 우리나라의 대학들은 진리탐구라는 대학 본연의 사명을 통하여 교육, 연구, 봉사의 역할을 수행하여 왔습니다.<br>
			하지만 산업사회에서 정보사회로 진화하고 있는 현재의 사회는 대학이 선도적인 기능을 보다 적극적으로 수행할 것을 요구하고 있습니다.
			특히 산업체와의 긴밀한 협조관계를 바탕으로 산업체가 수요하는 전문인력과 기술을 제공하는 역할을 강조하고 있습니다.<br><br>
			광운대학교 산학협력단은 이러한 사회적 요구에 부응하여 기술개발을 선도하고 전문 인력을 양성하기 위하여 2004년 2월에 국내에서 최초로 법인으로 설립되었습니다.
			광운대학교가 1934년에 설립된 조선무선강습소를 바탕으로 전자공학의 시대를 선도하였듯이 광운대학교 산학협력단은 지식정보사회를 선도해 나갈 것입니다.<br><br>
			광운대학교 산학협력단이 발전하여 이러한 비전이 실현될 수 있도록 계속 격려해 주시기 바랍니다.<br><br>
			감사합니다.
		</div>
	</div>
	
</div>



<?
	include '../footer.php';
?>

