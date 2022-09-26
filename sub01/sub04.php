<?
	include '../header.php';
	$topTxt01='조직도';
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

		<div class="txtC m_60">
			<img src="/images/sub/kw_organ.png" alt="광운대산학협력단 조직도">
		</div>
	</div>
	
</div>



<?
	include '../footer.php';
?>

