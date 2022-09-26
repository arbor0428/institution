<footer id="footer" class="footer">
	<div class="f_center">
		<div class="f_top dp_f dp_c">
			<div class="f_logo"><img src="/images/logo_w.png" alt="logo"></div>
			<ul class="f_nav dp_f">
				<li><a href="https://www.kw.ac.kr/ko/info/privacy.jsp" target="_blank" title="개인정보처리방침 바로가기" style="font-weight:600;">개인정보처리방침</a></li>
				<li><a href="/member/policy_email.php" title="이메일 무단수집거부">이메일 무단수집거부</a></li>

				<?if($GBL_MTYPE == 'A'){?>
				<li><a href="/adm/" class="c_gry3">관리자 페이지</a></li>
				<?}?>

				<?if($GBL_USERID){?>
				<li><a href="/module/login/logout_proc.php" class="c_gry3">로그아웃</a></li>
				<?}?>
			</ul>
		</div>
		<div class="f_bot">
			<div class="familySite">
				<div class="family-site-open-btn">FAMILY SITE <span class="arrow"><img src="/images/lnr-cross-small.png" alt=""></span></div>
				<ul class="family-site-list">
					<li><a href="https://www.kw.ac.kr/ko/" target="_blank">광운대학교</a></li>
					<li><a href="https://nkuris.kw.ac.kr/nKuris/main/LoginPage.do" target="_blank">광운교원인사/연구지원시스템</a></li>
					<li><a href="https://kw.rndcard.com/indexXecure.jsp" target="_blank">광운신한카드관리시스템</a></li>
					<li><a href="http://kupis.kwangwoon.ac.kr/" target="_blank">광운대학교 중앙도서관</a></li>
					<li><a href="http://jasan.kw.ac.kr/#/" target="_blank">광운대학교 자산관리시스템</a></li>
					<li><a href="https://icerink.kw.ac.kr/main/main.php" target="_blank">아이스링크</a></li>
				</ul>
			</div>
			<div class="f_bot_txt">
				<div class="f_adr">
					<span>(01897) 서울시 노원구 광운로 20 광운대학교 80주년 기념관 401호 광운대학교산학협력단</span>
					<span><span>TEL : 02.940.5635~6</span> <span>FAX : 02.942.1697</span></span>
				</div>
				<div class="copyright">Copyright © 2022 by Kwangwoon University Industry-Academic CollaborationFoundation All RightsReserved.</div>
			</div>
		</div>
	</div>
</footer>

<script>
	//family-site
	var fsite = true;
	$(".family-site-open-btn").on("click",function(){
		if(fsite){
			$(".family-site-list").stop().slideDown();

			fsite= false;
		} else {
			$(".family-site-list").stop().slideUp();

			fsite= true;
		}

	});
</script>

<!-- 알림 메세지 -->
<a id="GblNotice_open" class="GblNotice_open"></a>

<div id="GblNotice" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali" id="alertCloseBtn"><button class="GblNotice_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif" alt="알림"></div><div class="pop_ttl0">알림</div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it"><span id="alertTxt" ></span></div>
		<div class="btn_ali_pop2" id="alertBtn"><input type ="button" class="btn_notice_reg GblNotice_close" value="확인" /></div>
	</div>
</div>

<!-- confirm창 -->
<a id="conFirm_open" class="conFirm_open"></a>
<div id="conFirm" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali"><button class="conFirm_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="clearfix"><div class="img_clear"><img src="/module/popupoverlay/ico_notice.gif" alt="확인"></div><div class="pop_ttl0">확인</div></div>
		<div class="pop_div_dotted"></div>
		<div class="write_it"><span id="confirmTxt" ></span></div>
		<a class="conFirm_close" href="#">
			<div class="btn2_wrap">
				<div class="btn_ali_pop3" id="confirmCancelBtn"><input type="button" class="btn_notice_reg_cancel" value="취소" /></div>
				<div class="btn_ali_pop3" id="confirmBtn"><input type="button" class="btn_notice_reg_add" value="확인"></div>
			</div>
		</a>
	</div>
</div>


<a id="multiBox_open" class="multiBox_open"></a>
<div id="multiBox" class="popup_background" style="min-width:250px;display:none;">
	<div class="cls_buttonali"><button class="multiBox_close close_button_pop"></button></div>
	<div class="popup_notice">
		<div class="write_it">
			<div id='multiFrame' style="margin:30px 0 0 0;background:#fff;overflow:hidden;position:relative;"></div>
		</div>
	</div>
</div>


<!-- 팝업 스크립트 -->
<script>
$(document).ready(function () {
	$('#GblNotice,#conFirm,#multiBox').popup({
		transition: 'all 0.3s',
		blur: false,
		escape:false,
		scrolllock: false
	});

	//숫자만 입력받기
	$('.numberOnly').keydown(function(e){
		fn_Number($(this),e);
	}).keyup(function(e){
		fn_Number($(this),e);
	}).css('imeMode','disabled');


	//input필드 자동완성기능
	jQuery('input').attr("autocomplete","off");
});
</script>
<!-- 팝업 스크립트 -->

<!-- <form name='frm_down' method='post' action='/module/download2.php'>다운로드 폼
<input type='hidden' name='file_name' value="">
<input type='hidden' name='file_rename' value="">
<input type='hidden' name='downfiledir' value="/home/ansanyouth/www/upfile/">
</form> -->

<iframe name='ifra_gbl' src='about:blank' width='0' height='0' frameborder='0' scrolling='no' style='display:none;'></iframe>

</body>
</html>