<script>
function apiCall(){
	search_word = $('#search_word').val();
	if(search_word == ''){
		GblMsgBox("검색어를 입력해 주세요.");
		$('#search_word').focus();
		return;

	}else{
		form = document.frm01;
		form.record_start.value = 0;
		form.pageNo.value = 1;

		$('#loading').show();
		$('#apiWap').load('sub02_list.php?jQueryLoad=1',$('#frm01').serialize());
	}
}
</script>

<form name='frm01' id='frm01' method='post'>
<input type='text' style='display:none;'>
<input type='hidden' name='type' value=''>
<input type='hidden' name='next_url' value="<?=$_SERVER['PHP_SELF']?>">
<input type='hidden' name='record_count' value='<?=$record_count?>'>
<input type='hidden' name='record_start' value='<?=$record_start?>'>
<input type='hidden' name='pageNo' id='pageNo' value=''>

<div class="searchWrap m_45 dp_f">
	<div class="inputWrap dp_f dp_c">
		<input type='text' name='search_word' id='search_word' value="<?=$search_word?>" placeholder="검색어" onkeypress="if(event.keyCode==13){apiCall();}">

		<select name='search_year' id='search_year' class='board-select' style='margin-left:15px;'>
		<?
			for($i=0; $i<=10; $i++){
				if($i == $search_year)		$chk = 'selected';
				else								$chk = '';

				if($i == 0)	$syTxt = '당해';
				else			$syTxt = $i.'년차';

				echo "<option value='".$i."' ".$chk.">".$syTxt."</option>";
			}
		?>
		</select>

		<a class="searchBtn" href="javascript:apiCall();">검색</a>
	</div>
</div>
</form>


