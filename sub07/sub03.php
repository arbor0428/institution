<?
	include '../header.php';
	$topTxt01='관련사이트';
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
				<p class="visualSub_txt">Reference room</p>
				자료실
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
			<span>자료실</span>
			<strong><?=$topTxt01?></strong>
		</div>


		
<!-- 		샘플사이트처럼 내부기관 /외부기관 구분 및 검색창 필요<br>
		샘플사이트 : https://research.yonsei.ac.kr/research/service/site01.do<br><br>
		
		기존사이트에서 내부기관과 주요 기관만 유지~~~!!<br>
		기존사이트: https://iacf.kw.ac.kr/iSite -->

<script>
function famSearch(){
	$('#loading').show();
	$('#tab01').load('sub03_1.php?jQueryLoad=1',$('#frm_fam').serialize());
	$('#tab02').load('sub03_2.php?jQueryLoad=1',$('#frm_fam').serialize());
}
</script>

		<div class="searchWrap m_45 dp_f">
			<div class="inputWrap dp_f dp_c">
			<form name='frm_fam' id='frm_fam' method='post'>
				<input type='text' style='display:none;'>
				<input type="text" name="famTxt" id="famTxt" placeholder="기관명을 입력해 주세요" onkeypress="if(event.keyCode==13){famSearch();}">
			</form>
				<a class="searchBtn" href="javascript:famSearch();" title="검색">검색</a>

			</div>
		</div>

		<div class="tabs">
            <div class="tabButton_outer">
                <ul class="tab_list col_3">
                    <li><a href="#tab01">주요정부기관</a></li>
                    <li><a href="#tab02">내부기관</a></li>
                </ul>
            </div>

            <div class="tabToggle_outer">
                <div class="tab_location">
                    <a href="#" class="active_tab">
                        <span>주요정부기관</span>
                        <span class="right_line"></span>
                    </a>
                    <ul class="tab_list" style="display: none;">
						<li><a href="#tab01">주요정부기관</a></li>
						<li><a href="#tab02">내부기관</a></li>
                    </ul>
                </div>
            </div>

            <div id="tab01" class="tab_contents">
                <?
					//주요정부기관
					include './sub03_1.php';
				?>
            </div>
            <div id="tab02" class="tab_contents">
				<?
					//내부기관
					include './sub03_2.php';
				?>
            </div>
        </div>
	</div>
</div>



<style>
	.tab_list.col_3 li {width: 50%;}
	.tab_contents {padding: 40px 0 0 0;}
</style>

<script>
	$(".tab_list li").click(function() {
		let txtchang = $(this).text();
		$(".active_tab").text(txtchang);
	});
</script>


<?
	include '../footer.php';
?>

