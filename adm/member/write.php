<?
	//달력
	$sRange = 90;
	$eRange = 1;
	include '../../module/Calendar.php';

	if($type=='edit' && $uid){
		$sql = "select * from tb_member where uid='$uid'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		
		$status = $row['status'];
		$mtype = $row['mtype'];
		$userid = $row['userid'];
		$company = $row['company'];
		$name = $row['name'];
		$sex = $row['sex'];
		$email01 = $row['email01'];
		$email02 = $row['email02'];
		$phone01 = $row['phone01'];
		$bDate = $row['bDate'];
		$rDate = $row['rDate'];
		$zipcode = $row['zipcode'];
		$addr01 = $row['addr01'];
		$addr02 = $row['addr02'];

	}
	if(!$status)	$status='1';
	if(!$sex)		$sex='남';
	if(!$status)	$status='M';
?>
<script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>
<script language='javascript'>
function openDaumPostcode() {
	new daum.Postcode({
		oncomplete: function(data) {
			// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

			// 각 주소의 노출 규칙에 따라 주소를 조합한다.
			// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
			var fullAddr = ''; // 최종 주소 변수
			var extraAddr = ''; // 조합형 주소 변수

			// 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
			if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
				fullAddr = data.roadAddress;

			} else { // 사용자가 지번 주소를 선택했을 경우(J)
				fullAddr = data.jibunAddress;
			}

			// 사용자가 선택한 주소가 도로명 타입일때 조합한다.
			if(data.userSelectedType === 'R'){
				//법정동명이 있을 경우 추가한다.
				if(data.bname !== ''){
					extraAddr += data.bname;
				}
				// 건물명이 있을 경우 추가한다.
				if(data.buildingName !== ''){
					extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
				}
				// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
				fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
			}

			// 우편번호와 주소 정보를 해당 필드에 넣는다.			
/*
			document.getElementById('zip01').value = data.postcode1;
			document.getElementById('zip02').value = data.postcode2;
*/
			document.getElementById('zipcode').value = data.zonecode;
			document.getElementById('addr01').value = fullAddr;
			document.getElementById('addr02').focus();
		}
	}).open();
}
function mChk(){
	if($('#mChk2').is(":checked"))	$('.managerBox').show();
	else										$('.managerBox').hide();
}

function pwdChk(){
	pwd01 = $('#pwd').val();
	pwd02 = $('#re_pwd').val();

	pwdTxt = '';
	pwdColor = '#fff';

	if(pwd01 && pwd02){
		if(pwd01 == pwd02){
			pwdTxt = '비밀번호 일치';
			pwdColor = '#0000ff';
		}else{
			pwdTxt = '비밀번호 불일치';
			pwdColor = '#ff0000';
		}
	}

	$('#pwdTxt').css('color',pwdColor);
	$('#pwdTxt').text(pwdTxt);
}

function check_form(){
	form = document.FRM;

	pwd = form.pwd.value;
	re_pwd = form.re_pwd.value;

	if(pwd || re_pwd){
		if(isFrmEmptyModal(form.pwd,"신규 비밀번호를 입력해 주십시오."))	return;
		if(isFrmEmptyModal(form.re_pwd,"신규 비밀번호를 한번더 입력해 주십시오."))	return;

		if(form.pwd.value != form.re_pwd.value){
			GblMsgBox("비밀번호를 확인해 주십시오.");
			form.re_pwd.focus();
			return;
		}

		if(pwd.length < 4 || pwd.length > 12){
			GblMsgBox("비밀번호는 4~12자 이내입니다.");
			form.pwd.focus();
			return;
		}
	}

	if(isFrmEmptyModal(form.name,"부서명을 입력해 주십시오."))	return;

	form.type.value = 'edit';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}

function check_form2(){
	form = document.FRM;

	if(isFrmEmptyModal(form.userid,"아이디를 입력해 주십시오."))	return;

	pwd = form.pwd.value;
	re_pwd = form.re_pwd.value;

	if(isFrmEmptyModal(form.pwd,"비밀번호를 입력해 주십시오."))	return;
	if(isFrmEmptyModal(form.re_pwd,"비밀번호를 한번더 입력해 주십시오."))	return;

	if(form.pwd.value != form.re_pwd.value){
		GblMsgBox("비밀번호를 확인해 주십시오.");
		form.re_pwd.focus();
		return;
	}

	if(pwd.length < 4 || pwd.length > 12){
		GblMsgBox("비밀번호는 4~12자 이내입니다.");
		form.pwd.focus();
		return;
	}

	if(isFrmEmptyModal(form.name,"부서명을 입력해 주십시오."))	return;


	form.type.value = 'write';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}




function check_del(uid){
	GblMsgConfirmBox("해당 이용자를 삭제하시겠습니까?\n삭제후에는 복구가 불가합니다.","delOK('"+uid+"')");
}

function delOK(){
	form = document.FRM;
	form.type.value = 'del';
	form.target = 'ifra_gbl';
	form.action = 'proc.php';
	form.submit();
}

function reg_list(){
	form = document.FRM;
	form.type.value = 'list';
	form.target = '';
	form.action = 'up_index.php';
	form.submit();
}
</script>



<form name='FRM' action="<?=$_SERVER['PHP_SELF']?>" method='post'>
<input type='hidden' name='type' value='<?=$type?>'>
<input type='hidden' name='uid' value='<?=$uid?>'>
<input type='hidden' name='record_start' value='<?=$record_start?>'>
<input type='hidden' name='next_url' value='<?=$_SERVER['PHP_SELF']?>'>

<!-- 검색관련 -->
<input type='hidden' name='f_status' value='<?=$f_status?>'>
<input type='hidden' name='f_mtype' value='<?=$f_mtype?>'>
<input type='hidden' name='f_manager' value='<?=$f_manager?>'>
<input type='hidden' name='f_userid' value='<?=$f_userid?>'>
<input type='hidden' name='f_name' value='<?=$f_name?>'>
<input type='hidden' name='f_email' value='<?=$f_email?>'>
<input type='hidden' name='f_mobile01' value='<?=$f_mobile01?>'>
<input type='hidden' name='f_mobile02' value='<?=$f_mobile02?>'>
<input type='hidden' name='f_mobile03' value='<?=$f_mobile03?>'>
<!-- /검색관련 -->

<table cellpadding='0' cellspacing='0' border='0' width='1000'>
	<tr>
		<td>

			<table cellpadding='0' cellspacing='0' border='0' width='100%' class='zTable'>
				<tr>
					<th width='17%'><span class='eqc'>*</span>상 태</th>
					<td width='83%'>
						<label for="sChk1"><input type="radio" name="status" id="sChk1" value="1" <?if($status == '1'){echo 'checked';}?>> <span class='ico06' style='cursor:pointer;'>승인</span></label>&nbsp;&nbsp;&nbsp;
						<label for="sChk2"><input type="radio" name="status" id="sChk2" value="2" <?if($status == '2'){echo 'checked';}?>> <span class='ico09' style='cursor:pointer;'>미승인</span></label>
					</td>
				</tr>

				<?
					if($type=='edit'){
				?>
				<tr>
					<th><span class='eqc'>*</span>아이디</th>
					<td><?=$userid?></td>
				</tr>

				<tr>
					<th><span class='eqc'>*</span>신규 비밀번호</th>
					<td><input type='password' name='pwd' id='pwd' value="" style="width:250px;" class='textBox01' onkeyup='pwdChk();' placeholder='※변경시에만 입력'> ※ 4자 ~ 12자 이내</td>
				</tr>

				<tr>
					<th><div class='eqc'>*</div>비밀번호 확인</th>
					<td><input type='password' name='re_pwd' id='re_pwd' style="width: 250px;" class='textBox01' onkeyup='pwdChk();' placeholder='※변경시에만 입력'> <span id='pwdTxt'></span></td> 
				</tr>

				<?
					}elseif($type=='write'){
				?>
				<tr>
					<th><span class='eqc'>*</span>아이디</th>
					<td><input type='text' name='userid' id='userid' value="" style="width: 250px;" class='textBox01'></td>
				</tr>

				<tr>
					<th><span class='eqc'>*</span>비밀번호</th>
					<td><input type='password' name='pwd' id='pwd' value="" style="width:250px;" class='textBox01' onkeyup='pwdChk();'> ※ 4자 ~ 12자 이내</td>
				</tr>

				<tr>
					<th><div class='eqc'>*</div>비밀번호 확인</th>
					<td><input type='password' name='re_pwd' id='re_pwd' style="width: 250px;" class='textBox01' onkeyup='pwdChk();'> <span id='pwdTxt'></span></td> 
				</tr>

				<?
					}
				?>
				<tr>
					<th><div class='eqc'>*</div>팀 명</th>
					<td><input type='text' name='name' id='name' value="<?=$name?>" style="width: 250px;" class='textBox01'></td>
				</tr>

				<?
					if($type=='edit'){
				?>
				<tr>
					<th><div class='eqc'>*</div>등록일시</th>
					<td><?=$rDate?></td>
				</tr>
				<?
					}	
				?>
			</table>

		</td>
	</tr>
	<?
		if($type=='edit'){
	?>
	<tr>
		<td style='padding:50px 0 0 0;'>
			<table cellpadding='0' cellspacing='0' border='0' width='100%'>
				<tr>
					<td width='30%'></td>
					<td width='40%' align='center'>
						<a href="javascript:check_form();" class='big cbtn blue'>수정</a>&nbsp;&nbsp;
						<a href="javascript:reg_list();" class='big cbtn black'>취소</a>
					</td>
					<td width='30%' align='right'><a href="javascript:check_del();" class='big cbtn blood'>삭제</a></td>
				</tr>
			</table>
		</td>
	</tr>					
	<?
		}else{
	?>
	<tr>
		<td style='padding:50px 0 0 0;'>
			<table cellpadding='0' cellspacing='0' border='0' width='100%'>
				<tr>
					<td align='center'>
						<a href="javascript:check_form2();" class='btn blk'>등록</a>&nbsp;&nbsp;					
						<a href="javascript:reg_list();" class='btn red'>취소</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<?
		}
	?>
</table>

</form>