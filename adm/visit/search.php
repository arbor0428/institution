<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="/module/js/datepicker.js"></script>
<script src="/module/js/jquery.ui.monthpicker.js"></script>

<script language='javascript'>
function go_search(){
	form = document.frm01;
	form.type.value = '';
	form.record_start.value = '';
	form.action = '<?=$_SERVER['PHP_SELF']?>';
	form.submit();
}

function reset_search(){
	form = document.frm01;
	$('#payModeChk0').prop('checked', true);
	form.f_nurl.value = '';
	SetToday();

	form.type.value = '';
	form.record_start.value = '';
	form.action = '<?=$_SERVER['PHP_SELF']?>';
	form.submit();
}

function selChk(c,n){
	$("#"+c+"Sel option:eq("+n+")").prop("selected", true);
}

function radioChk(c){
	idx = $("#"+c+"Sel option").index($("#"+c+"Sel option:selected"));
	$("#"+c+"Chk"+idx).prop('checked', true);
}

function formatDate(date) {

    var mymonth = date.getMonth() + 1;

    var myweekday = date.getDate();

	if(mymonth < 10)			mymonth = '0'+mymonth;
	if(myweekday < 10)		myweekday = '0'+myweekday;

    return (date.getFullYear() + "-" + mymonth + "-" + myweekday);
}
//어제
function SetYesterday() {
    var mydate = new Date();
	
    mydate.setDate(mydate.getDate() - 1);
	
	setdate = formatDate(mydate);

	$('#f_rDate01').val(setdate);
	$('#f_rDate02').val(setdate);
}

//금일
function SetToday() {
    var mydate = new Date();

    mydate.setDate(mydate.getDate() - 1);

	setdate = formatDate(new Date());

	$('#f_rDate01').val(setdate);
	$('#f_rDate02').val(setdate);
}

//이번주
function SetWeek() {
    var now = new Date();

    var nowDayOfWeek = now.getDay();

    var nowDay = now.getDate();

    var nowMonth = now.getMonth();

    var nowYear = now.getFullYear();

    nowYear += (nowYear < 2000) ? 1900 : 0;

    var weekStartDate = new Date(nowYear, nowMonth, nowDay - nowDayOfWeek);

    var weekEndDate = new Date(nowYear, nowMonth, nowDay + (6 - nowDayOfWeek));	


	setdate = formatDate(weekStartDate);
	$('#f_rDate01').val(setdate);

	setdate = formatDate(weekEndDate);
	$('#f_rDate02').val(setdate);
}

// 이번달
function SetCurrentMonthDays() {
    var d2, d22;
    d2 = new Date();
    d22 = new Date(d2.getFullYear(), d2.getMonth());    

    var d3, d33;
    d3 = new Date();
    d33 = new Date(d3.getFullYear(), d3.getMonth() + 1, "");


	setdate = formatDate(d22);
	$('#f_rDate01').val(setdate);

	setdate = formatDate(d33);
	$('#f_rDate02').val(setdate);   
}

// 지난달
function SetPrevMonthDays() {
    var d2, d22;
    d2 = new Date();
    d22 = new Date(d2.getFullYear(), d2.getMonth() -1);

    var d3, d33;
    d3 = new Date();
    d33 = new Date(d3.getFullYear(), d3.getMonth(), "");


	setdate = formatDate(d22);
	$('#f_rDate01').val(setdate);

	setdate = formatDate(d33);
	$('#f_rDate02').val(setdate);   

}
</script>

<style>
.zTable th, .zTable td{height:40px;}
.selectBox{width:120px;padding-left:10px;font-size:16px;color:#777;}

@media only screen and (max-width:960px){
	.zTable th, .zTable td{height:auto;min-height:auto;padding-top:5px;padding-bottom:5px;}
}

	input[type="text"], input[type="password"] {
		/*display: block;*/
		width: 100%;
		min-width: inherit;
	   /* max-width: 29.2em;*/
		height: 2.53333em;
		background-color: #fff;
		/*font-size: 0.9375em;*/
		padding: 0 1.4em;
		border: 1px solid #e1e1e1 !important;
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

<p class="adm-titles">홈페이지 방문자 분석</p>

<p class="f14 m_24">※ 방문자의 방문경로, 접속IP, 접속일시 등의 정보 확인 및 검색을 할 수 있습니다.</p>

<div class="adm_gTable">
	<table cellpadding='0' cellspacing='0' border='0' width='100%' class='gTable'>
		<colgroup>
			<col width='17%'>
			<col width='83%'>
		</colgroup>
		<tr>
			<th class="bl-n">접속기기</th>
			<td data-th="접속기기" class="br-n">
				<div class='pcWarp clearfix'>
					<li style='float:left;'><label for="payModeChk0"><input type="radio" name="f_UserOS" id="payModeChk0" value="" onclick="selChk('payMode',0);" <?if($f_UserOS == ''){echo 'checked';}?>> <span style='cursor:pointer;'>전체</span></label></li>
					<li style='float:left;margin-left:10px;'><label for="payModeChk1"><input type="radio" name="f_UserOS" id="payModeChk1" value="pc" onclick="selChk('payMode',1);" <?if($f_UserOS == 'pc'){echo 'checked';}?>> <span style='cursor:pointer;'>PC</span></label></li>
					<li style='float:left;margin-left:10px'><label for="payModeChk2"><input type="radio" name="f_UserOS" id="payModeChk2" value="mobile" onclick="selChk('payMode',2);" <?if($f_UserOS == 'mobile'){echo 'checked';}?>> <span style='cursor:pointer;'>MOBILE</span></label><li>
				</div>
				<div class='mobileWarp' style='display:none;'>
					<select name='payModeSel' id='payModeSel' class='selectBox' onchange="radioChk('payMode');">
						<option value='' <?if($f_UserOS == ''){echo 'selected';}?>>전체</option>
						<option value='pc' <?if($f_UserOS == 'pc'){echo 'selected';}?>>PC</option>
						<option value='mobile' <?if($f_UserOS == 'mobile'){echo 'selected';}?>>MOBILE</option>
					</select>
				</div>
			</td>
		</tr>

		<tr>
			<th class="bl-n" class="bl-n">접속주소</th>
			<td data-th="접속주소" class="br-n"><input name="f_nurl" type="text" style='width:200px;' value='<?=$f_nurl?>' class='textBox01 form-control' onkeypress="if(event.keyCode==13){go_search();}"></td>
		</tr>

		<tr>
			<th class="bl-n">접속일</th>
			<td class='noData br-n' data-th="접속일">
				<div class="date_wrap" style='width:100%;display:inline-block;'>
					<li style='float:left;margin-right:20px;'>
						<input type='text' name='f_rDate01' id='f_rDate01' value='<?=$f_rDate01?>' class='fpicker textBox01' autocomplete='off' onkeyup="autoDateFormat(event, this)" onkeypress="autoDateFormat(event, this)" maxlength="10" style="width:120px;"> ~ 
						<input type='text' name='f_rDate02' id='f_rDate02' value='<?=$f_rDate02?>' class='fpicker textBox01' autocomplete='off' onkeyup="autoDateFormat(event, this)" onkeypress="autoDateFormat(event, this)" maxlength="10" style="width:120px;">
					</li>
					<li style='float:left;'>
						<div class='pcWarp' style='padding-top:3px;'>
							<a href="javascript:SetYesterday();" class="small cbtn black">어제</a>
							<a href="javascript:SetToday();" class="small cbtn black">금일</a>
							<a href="javascript:SetWeek();" class="small cbtn black">이번주</a>
							<a href="javascript:SetPrevMonthDays();" class="small cbtn black">지난달</a>
							<a href="javascript:SetCurrentMonthDays();" class="small cbtn black">이번달</a>
						</div>
						<div class='mobileWarp' style='display:none;'>
							<select name='f_period' id='f_period' style='width:80px;height:30px !important;padding-left:10px;font-size:16px;color:#777;' class='selectBox' onchange="selectBoxDate(this.options[this.selectedIndex].value);">
								<option value=''>==</option>
								<option value='yesterday'>어제</option>
								<option value='today'>금일</option>
								<option value='week'>이번주</option>
								<option value='prevMonth'>지난달</option>
								<option value='thisMonth'>이번달</option>
							</select>
						</div>
					</li>
				</div>
			</td>
		</tr>
	</table>
</div>
<table cellpadding='0' cellspacing='0' border='0' width='100%'>
	<tr>
		<td align='center' style="padding:10px 0 50px 0;">
			<a href='javascript:go_search();' class='btn blk'>검색</a>
			<a href='javascript:reset_search();' class='btn red'>초기화</a>
		</td>
	</tr>
</table>
