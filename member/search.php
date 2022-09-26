<?
	include '../header.php';
	$topTxt01='통합검색';
	$side_menu=1;	

	$tableArr = Array("table_1661097932"=>"공지사항","table_1661097947"=>"뉴스레터","table_1661097836"=>"사업공고","table_1661097856"=>"입찰공고","table_1661098137"=>"FAQ");

	$tableArr = Array();

	$tableArr[0]['table_id'] = 'table_1661097932';
	$tableArr[0]['title'] = '공지사항';
	$tableArr[0]['page'] = '/sub05/sub01.php';

	$tableArr[1]['table_id'] = 'table_1661097947';
	$tableArr[1]['title'] = '뉴스레터';
	$tableArr[1]['page'] = '/sub05/sub02.php';

	$tableArr[2]['table_id'] = 'table_1661097836';
	$tableArr[2]['title'] = '사업공고';
	$tableArr[2]['page'] = '/sub02/sub04.php';

	$tableArr[3]['table_id'] = 'table_1661097856';
	$tableArr[3]['title'] = '입찰공고';
	$tableArr[3]['page'] = '/sub02/sub05.php';

	$tableArr[4]['table_id'] = 'table_1661098137';
	$tableArr[4]['title'] = 'FAQ';
	$tableArr[4]['page'] = '/sub05/sub05.php';
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



<style>
.search-box {text-align:center; padding:20px 0; background:#f8f8f8; border-radius:3px; border:1px solid #e1e1e1; box-sizing:border-box;}
.search-box .btns {display:inline-block; padding:10px 30px 10px; background:#333; border-radius:3px; color:#fff; vertical-align:middle; box-sizing:border-box;}
.search-box .btns:hover {background:#a2a2a2; transtion:.2s;}


.selectBox::-ms-expand {
    display: none;
}

.selectBox:disabled{background:#eee;}

.textBox01 {
	width:400px;
    color: #777;
    /* border-radius: 5px; */
    border: 1px solid #d1d1d1;
	border-radius:3px;
    padding:10px 20px 10px;
    font-size: 1rem;
    box-sizing: border-box;
    vertical-align: middle;
}

.con-box {margin-top:50px;}


@media screen and (max-width:640px){
	.search-box {padding:20px;}
	.selectBox, .search-box .btns {width:100%;}
	.search-box .btns {padding:12px 0;}
	.textBox01 {width:100%; margin:4px 0;}
}
</style>
<!----------------컨텐츠영역--------------------------->

<script>
function goSearch(){
	form = document.frm_search;

	if(isFrmEmptyModal(form.f_word,"검색어를 입력해 주십시오"))	return;

	form.action = "<?=$_SERVER['PHP_SELF']?>";
	form.submit();
}
</script>

<?
if($_POST['f_wordTop'])		$f_word = $_POST['f_wordTop'];	//상단 검색어
if($_POST['f_wordQuick'])	$f_word = $_POST['f_wordQuick'];	//퀵 검색어
?>


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

		<div class="search-box">
			<form name='frm_search' id='frm_search' method='post' action="<?=$_SERVER['PHP_SELF']?>">
			<input type='text' style='display:none;' class="board-input">
				<select name="f_table" class="selectBox board-select">
					<option value=''>:: 통합검색 ::</option>
				<?
					for($i=0; $i<count($tableArr); $i++){
						$sArr = $tableArr[$i];

						$t1 = $sArr['table_id'];
						$t2 = $sArr['title'];
				?>
					<option value='<?=$t1?>' <?if($f_table == $t1) echo 'selected';?>><?=$t2?></option>
				<?
					}
				?>
				</select>
				<input type="text"  name="f_word" class="textBox01" value="<?=$f_word?>" onkeypress="if(event.keyCode==13){goSearch();}">
				<a href="javascript:goSearch();" class="btns">검색</a>
			</form>
		</div>

		<div class="con-box">
			<?
				include 'searchList.php';
			?>
		</div>
	</div>
</div>



<?
	include '../footer.php';
?>