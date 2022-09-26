<?
	include '../header.php';
	$topTxt01='FAQ';
	$side_menu=5;	

	$table_id = 'table_1661098137';

	if(!$table_id){
		Msg::backMsg('접근오류입니다.');
	}
	
	if(!$type)	$type = 'list';

	//게시판 환경설정
	include $boardRoot."config.php";
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
				<p class="visualSub_txt">Community</p>
				커뮤니티
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
			<span>커뮤니티</span>
			<strong><?=$topTxt01?></strong>
		</div>
		<!--
		아래 처럼 항목(분류) 나눌수 있는지 확인필요 (산학협력, 연구지원만 필요함)<br>
		내용 입력하는 란 textarea말고 에디터로 넣을 수 있는지 확인필요<br>
		https://iacf.kw.ac.kr/iFaq<br><br><br>
		-->

		<?
			
			if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){
			/*
				echo $type.'<br>';
				echo$write_file.'<br>';
				echo$list_file.'<br>';
				echo$view_file.'<br>';
			*/
			}
			switch($type){
				case 'write' :
				case 'edit' :
									include $boardRoot.$write_file;
									break;

				case 'list' :
									include $boardRoot.'query.php';	//게시판 내용 쿼리
									include $boardRoot.$list_file;	//게시판 리스트
									include $boardRoot.'pageNum.php';	//게시판 페이지번호
									break;

				case 'view' :
									include $boardRoot.$view_file;
									break;

				case 're_write' :
				case 're_edit' :
									include $boardRoot.'re_write.php';
									break;

				case 're_view' :
									include $boardRoot.'re_view.php';
									break;
			}
		?>
	</div>
</div>



<?
	include '../footer.php';
?>

