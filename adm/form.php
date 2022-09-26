<script language='javascript'>
function Change_password(){
	form = document.FRM;
	PWD = form.new_pwd.value;

	if(isFrmEmptyModal(form.old_pwd,"현재 비밀번호를 입력해 주십시오"))	return;
	if(isFrmEmptyModal(form.new_pwd,"새 비밀번호를 입력해 주십시오"))	return;
	if(isFrmEmptyModal(form.re_pwd,"새 비밀번호 확인을 입력해 주십시오"))	return;

	if(PWD.length < 4 || PWD.length > 12){
		GblMsgBox('비밀번호는 4~12자 이내입니다','');
		form.new_pwd.focus();
		return;
	}

	if(form.new_pwd.value != form.re_pwd.value){
		GblMsgBox('변경하실 비밀번호를 확인해 주십시오','');
		form.re_pwd.focus();
		return;
	}	

	form.target = 'ifra_gbl';
	form.action = 'form_proc.php';
	form.submit();
}
</script>

<form name='FRM' method='post'>
<input type='text' style='display:none;'>

<style>
	input[type="text"], input[type="password"] {
		/*display: block;*/
		width: 100%;
		min-width: inherit;
	   /* max-width: 29.2em;*/
		height: 2.53333em;
		background-color: #fff;
		/*font-size: 0.9375em;*/
		padding: 0 1.4em;
		border: 1px solid #e1e1e1;
		border-radius: 0.35rem;
		box-sizing:border-box;
		-webkit-appearance: none;
	}

	select#data01:focus, input[type="text"]:focus, input[type="password"]:focus {
		background-color: #fff;
		outline: 0;
		box-shadow: 0 0 0 0.125rem rgba(196, 216, 206, .5);
	}
</style>

<div style="width:1200px;">
<p class="adm-titles">관리자 기본정보</p>
<div class="adm_gTable">
	<table cellpadding='0' cellspacing='0' border='0' class='gTable' style='width:1200px !important;'>
		<tr>
			<th width='20%' class="bl-n">관리자 ID</th>
			<td width='80%' class="br-n"><?=$GBL_USERID?></td>
		</tr>

		<tr>
			<th class="bl-n">현재 비밀번호</th>
			<td class="br-n"><input type='password' name='old_pwd' class='form-control' style='width:200px;'></td>
		</tr>

		<tr>
			<th class="bl-n">신규 비밀번호</th>
			<td class="br-n"><input type='password' name='new_pwd' class='form-control'style='width:200px;'></td>
		</tr>

		<tr>
			<th class="bl-n">비밀번호 확인</th>
			<td class="br-n"><input type='password' name='re_pwd' class='form-control' style='width:200px;'></td>
		</tr>
	</table>
</div>

<table cellpadding='0' cellspacing='0' border='0' width='1200px'>
	<tr>
		<td align='right' style='padding:20px 0;'><a href="javascript:Change_password();" class='btn blk'>수정하기</a></td>
	</tr>
</table>

</form>
</div>