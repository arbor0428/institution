<?
	include '../header.php';
	$topTxt01='윤리신문고';
	$side_menu=3;	

	$table_id = 'table_1661098010';

	if(!$table_id){
		Msg::backMsg('접근오류입니다.');
	}
	
	if(!$type)	$type = 'list';

	//게시판 환경설정
	include $boardRoot."config.php";

	$list_file = 'list0503.php';	//리스트파일
	$view_file = 'view0503.php';	//상세페이지
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

		<div class="pt_box m_24">
			<div class="box_inner">
				<p class="f24 bold">
					<span style="vertical-align:middle; display:inline-block; margin-right:1%;"><img src="/images/sub/sub0503_icons.png" alt="윤리신문고"></span>
					연구윤리관련<span class="c1">부정행위</span>에 대해 신고할 수 있습니다.
				</p>
				<p class="m-24">
					연구비 집행 및 연구 성과물(논문,저술 등)과 관련하여 발견하신 부정행위에 대해 신고해주시면 신속히 처리하도록하겠습니다. <span class="c1">연구부정행위신고센터에 접수된 내용은 절대 공개되지 않으며, 이에 대한 답변은 신고하신 분의 이메일로 전달됩니다.</span><br>정확한 사실에 기초한 내용을 기재해 주시기 바라며, 타인에 대한 욕설 근거없는 비판, 자신의 이익에 국한되는 사항, 본 사이트 운영 취지와 무관한 제보사항 등은 사전 동의 없이 삭제됩니다. 기타 일반적인 사항에 대한 답변이 필요할 경우 Q&A를 이용하시기 바랍니다.
				</p>
			</div>
		</div>
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

