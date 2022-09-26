<script>
function apiCall(){
	search_word = $('#search_word').val();
	if(search_word == ''){
		GblMsgBox("검색어를 입력해 주세요.");
		$('#search_word').focus();
		return;
	}

	$("#loading").show();

	id = setTimeout(function(){
		var params = jQuery("#frm01").serialize();
		jQuery.ajax({
			url: 'kipris_apiCall.php',
			type: 'POST',
			data:params,
			dataType: 'html',
			success: function(result){
				if(result){
					parData = JSON.parse(result);

					count = parData.count;
					numOfRows = count.numOfRows;
					totalCount = count.totalCount;

					item = parData.body.items;

					//리스트 초기화
					$('#resultTable').empty();

					if(item){
						for(idx in item){
							arr = item[idx];

							//결과값이 다수인 경우
							if(arr.length != undefined){
								$.each(arr,function(k, v){
									str = "<tr>";
									str += "<td>"+v['applicationNumber']+"</td>";
									str += "<td>"+v['applicantName']+"</td>";
									str += "<td>"+v['inventionTitle']+"</td>";
									str += "<td>"+v['applicationDate']+"</td>";
									str += "<td>"+v['registerStatus']+"</td>";
									str += "</tr>";

									$("#resultTable").append(str);
								});

							//결과값이 1개인 경우..
							}else{
								str = "<tr>";
								str += "<td>"+arr['applicationNumber']+"</td>";
								str += "<td>"+arr['applicantName']+"</td>";
								str += "<td>"+arr['inventionTitle']+"</td>";
								str += "<td>"+arr['applicationDate']+"</td>";
								str += "<td>"+arr['registerStatus']+"</td>";
								str += "</tr>";

								$("#resultTable").append(str);
							}
						};
					}



					$("#loading").delay("200").fadeOut();

					return;

					code = parData.code;	//응답코드(200:사용가능)
					msg = parData.result;

					if(code != undefined){
						if(code == '200'){

/*
						$.each(msg,function(i,v){
							if(appNum)		appNum += ',';
							appNum += i;
						});
*/

						}else{
							GblMsgBox('사용할 수 없는 아이디입니다.');
							return;
						}

					}else{
						GblMsgBox('undefined');
						return;
					}

				}else{
					GblMsgBox('반환값오류');
					return;
				}
			},
			error: function(error){
				GblMsgBox('통신오류');
				return;
			}
		});
	}, 100);
}
</script>

<?
$search_word = '남자검정반바지';
?>

<form name='frm01' id='frm01' method='post'>
<input type='text' style='display:none;'>
<input type='text' name='pageNo' id='pageNo' value=''>

<input type='text' name='search_word' id='search_word' value="<?=$search_word?>" placeholder="검색어">

<select name='search_year' id='search_year'>
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

<a href="javascript:apiCall();" class='small cbtn blue'>검색</a>

</form>



		<div class="mb_scroll m_45">
			<div class="tbl_basic">
				<table>
					<thead>
						<tr>
							<th>출원번호</th>
							<th>출원인</th>
							<th>발명의명칭</th>
							<th>출원일자</th>
							<th>등록상태</th>
						</tr>
					</thead>
					<tbody id='resultTable'>
						<tr>
							<td><?=$applicationNumber?>1</td>
							<td><?=$applicantName?>2</td>
							<td><?=$inventionTitle?></td>
							<td><?=$applicationDate?></td>
							<td><?=$registerStatus?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>