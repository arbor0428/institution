<?
	include '../header.php';

	$topTxt01='지식재산권 현황';
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
				<p class="visualSub_txt">Patent business</p>
				특허사업화
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
			<span>특허사업화</span>
			<strong><?=$topTxt01?></strong>
		</div>

		<?
			//검색
			include 'sub02_search.php';
		?>

		<div id='apiWap'>		
		<?
			//키프리스 API 호출결과
			include 'sub02_list.php';
		?>
		</div>
	</div>
</div>



<?
	include '../footer.php';
?>

