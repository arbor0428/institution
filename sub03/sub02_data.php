<?
include '../module/login/head.php';

$appNum = $_GET['appNum'];

$arrList = Array('applicantName'=>'출원인','applicationDate'=>'출원일자','applicationNumber'=>'출원번호','astrtCont'=>'초록','inventionTitle'=>'발명의명칭','ipcNumber'=>'IPC번호','openDate'=>'공개일자','openNumber'=>'공개번호','publicationDate'=>'공고일자','publicationNumber'=>'공고번호','registerDate'=>'등록일자','registerNumber'=>'등록번호','registerStatus'=>'등록상태');
?>

<div class="tbl_basic">
	<table>
		<colgroup>
			<col width='20%'>
			<col width='80%'>
		</colgroup>
	<?
		foreach($arrList as $k => $v){
	?>
		<tr>
			<th><?=$v?></th>
			<td id='<?=$k?>' style='text-align:left;'></td>
		</tr>
	<?
		}
	?>
		<tr>
			<td colspan='2' id='bigDrawing'></td>
		</tr>
	</table>
</div>

<script>
$(document).ready(function(){
<?
	foreach($arrList as $k => $v){
?>
	$('#<?=$k?>').text(parent.$('#app_<?=$appNum?>').children('.<?=$k?>').text());
<?
	}
?>
	bigDrawing = parent.$('#app_<?=$appNum?>').children('.bigDrawing').text();
	if(bigDrawing){
		$('#bigDrawing').html("<img src='"+bigDrawing+"' onerror=\"this.style.display='none'\">");
	}
});
</script>