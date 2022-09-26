<?
	include '../header.php';
	$topTxt01='교외연구지원';
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
				<p class="visualSub_txt">Research information</p>
				연구정보		
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
			<span>연구정보</span>
			<strong><?=$topTxt01?></strong>
		</div>

		<div class="tabs">
            <div class="tabButton_outer">
                <ul class="tab_list col_3">
                    <li><a href="#tab01">연구비 중앙관리</a></li>
                    <li><a href="#tab02">연구비 집행흐름도</a></li>
                    <li><a href="#tab03">연구비 카드</a></li>
                </ul>
            </div>

            <div class="tabToggle_outer">
                <div class="tab_location">
                    <a href="#" class="active_tab">
                        <span>연구비 중앙관리</span>
                        <span class="right_line"></span>
                    </a>
                    <ul class="tab_list" style="display: none;">
                        <li><a href="#tab01">연구비 중앙관리</a></li>
                        <li><a href="#tab02">연구비 집행흐름도</a></li>
                        <li><a href="#tab03">연구비 카드</a></li>
                    </ul>
                </div>
            </div>

            <div id="tab01" class="tab_contents">
                <?
					//연구비 중앙관리
					include './sub02_1.php';
				?>
            </div>
            <div id="tab02" class="tab_contents">
				<?
					//연구비 집행흐름도
					include './sub02_2.php';
				?>
            </div>
            <div id="tab03" class="tab_contents">
				<?
					//연구비 카드
					include './sub02_3.php';
				?>
            </div>
        </div>
	</div>
</div>

<script>
	$(".tab_list li").click(function() {
		let txtchang = $(this).text();
		$(".active_tab").text(txtchang);
	});
</script>

<?
	include '../footer.php';
?>

