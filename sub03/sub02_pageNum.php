<style>
.pageNum *{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
.pageNum{padding:24px 0;text-align:center}
.pageNum a,.pageNum strong{display:inline-block;min-width:12px;height:24px;padding:0 6px;border:1px solid transparent;border-radius:2px;font:700 12px/2em Tahoma,AppleGothic,sans-serif;letter-spacing:-1px;*display:inline;*zoom:1}
.pageNum a{color:#999;text-decoration:none!important}
.pageNum .this,.pageNum a:hover{background:#F9F9F9;border-color:#AAA;color:#555}
.pageNum .frst_last{color:#555}
.pageNum .direction{margin:0 4px;color:#555;letter-spacing:0;font-weight:400}
.pageNum strong.direction{color:#999}
</style>

<script>

function listCall(rs,pn){
	form = document.frm01;
	form.record_start.value = rs;
	form.pageNo.value = pn;

	$('#loading').show();
	$('#apiWap').load('sub02_list.php?jQueryLoad=1',$('#frm01').serialize());
}
</script>


<div class="pageNum">
<?
if($total_record != '0'){
	if($total_record > $record_count){
		
		if($current_page * $record_count > $record_count * $link_count) {
			$pre_group_start = ($group * $record_count * $link_count) - $record_count;
			$pno = ($pre_group_start / $record_count) + 1;
			echo ("<a href=javascript:listCall('$pre_group_start','$pno');>≪</a> ");
		}else{
			$pno = ($pre_group_start / $record_count) + 1;
			echo ("<a href=javascript:listCall('$pre_group_start','$pno');>≪</a> ");
		}


		if($total_page > 1 && ($record_start !=0 )) {
			$pre_page_start = $record_start - $record_count;
			$pno = ($pre_page_start / $record_count) + 1;
			echo ("<a href=javascript:listCall('$pre_page_start','$pno'); class='direction'>Prev</a> ");
		}else{
			$pno = ($pre_page_start / $record_count) + 1;
			echo ("<a href=javascript:listCall('$pre_page_start','$pno'); class='direction'>Prev</a> ");
		}







		for($i=0; $i<$link_count; $i++){
			$input_start = ($group * $link_count + $i) * $record_count; 

			$link = ($group * $link_count + $i) + 1;

			if($input_start < $total_record) {
				if($input_start != $record_start) {
					echo ("<a href=javascript:listCall('$input_start','$link');>$link</a> ");
				} else {
					echo ("<a href=javascript:listCall('$input_start','$link'); class='frst_last this'>$link</a> ");
				}
			}
		}





		if($total_page > 1 && ($record_start != ($total_page * $record_count - $record_count))) {
			$next_page_start = $record_start + $record_count;
			$pno = ($next_page_start / $record_count) + 1;
			echo ("<a href=javascript:listCall('$next_page_start','$pno'); class='direction'>Next</a> ");
		}else{
			$next_page_start = $record_start;
			$pno = ($next_page_start / $record_count) + 1;
			echo ("<a href=javascript:listCall('$next_page_start','$pno'); class='direction'>Next</a> ");
		}


		if($total_record > (($group + 1) * $record_count * $link_count)) {
			$next_group_start = ($group + 1) * $record_count* $link_count;
			$pno = ($next_group_start / $record_count) + 1;
			echo("<a href=javascript:listCall('$next_group_start','$pno');>≫</a>");
		}else{
			$next_group_start = $record_start;
			$pno = ($next_group_start / $record_count) + 1;
			echo("<a href=javascript:listCall('$next_group_start','$pno');>≫</a>");
		}



		  
	}else{
		echo ("<a href='#' class='frst_last this'>1</a>");
	}
}
?>
</div>