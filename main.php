<?
	include './header.php';
	include './ks_popset.php';
	include './visit.php';
?>

<style>
/* 메인슬라이드 */
#mainSlide {position:relative; width:100%; height:600px; overflow:hidden;}

#mainSlide .slick-list {width:100%; height:100%;}
#mainSlide .slick-track {width:100%; height:100%;}
#mainSlide .slick-slide {width:100%; height:600px; overflow:hidden;}
#mainSlide .slick-slide .s01 .bgArea {height:100%; background:url('/images/mainImg.jpg') center center no-repeat; background-size:cover; transition: all 2.5s;}
#mainSlide .slick-slide .s02 .bgArea {height:100%; background:url('/images/mainImg2.jpg') center center no-repeat; background-size:cover; transition: all 2.5s;}

#mainSlide .slick-slide > div, #mainSlide .slick-slide > div > div {position:relative; height:100%;}
#mainSlide .slick-slide .bgArea:before { content: ""; display:none; height:100%; width:100%; position:absolute; top:0; left:0;}
#mainSlide .slick-slide.ani .bgArea:before {display:block;}
#mainSlide .slick-slide.ani .bgArea {-ms-transform: scale(1.05); -moz-transform: scale(1.05); -webkit-transform: scale(1.05); -o-transform: scale(1.05); transform: scale(1.05);}

#mainSlide .slick-dots {position:absolute; left:50%;  transform: translateX(-50%); text-align:center; bottom:156px; z-index:50;}
#mainSlide .slick-dots:after {content:""; display:block; clear:both;}
#mainSlide .slick-dots li {display:inline-block; width:14px; height:14px; background-color: #920800; transition: all 0.5s; margin:0 7px; cursor:pointer; border-radius:20px;}
#mainSlide .slick-dots li.slick-active {display:inline-block; width:50px; height:14px; background:#fff;}
#mainSlide .slick-dots li button {display:none;}

#mainSlide .slick-arrow {position: absolute; top: 50%; transform: translateY(-50%); width: 30px; height: 100px; background-position: center center; background-repeat:no-repeat; background-size: cover; z-index: 30; cursor:pointer;}
#mainSlide .msLeft {left: 80px; background-image:url('/images/slide_prev.png');}
#mainSlide .msRight {right: 80px; background-image:url('/images/slide_next.png');}
.slick-dotted.slick-slider {margin-bottom:0 !important;}



#mainSlide .slick-slide .txtArea {position:absolute; width:100%; top:131px; left: 50%; transform: translateX(-50%); text-align:center; opacity:0; overflow:hidden; z-index:4;}
#mainSlide .slick-slide .txtArea h2 {margin-bottom:60px; font-size:3.625rem; color:#fff; font-weight:600; letter-spacing: 3px;}
#mainSlide .slick-slide .txtArea p {color:#fff; font-size:1.25rem; line-height:32px;/* text-shadow: 2px 2px 2px rgba(0,0,0,0.3);*/}

#mainSWrap {position:relative; width:100%; top:0;}
#mainSWrap:after {content:""; display:block; clear:both;}

@media screen and (max-width:1280px) {
	#mainSlide .slick-slide .txtArea h2 {font-size: 2.375rem; margin-bottom: 40px;}
	#mainSlide .slick-slide .txtArea p {font-size: 1.875rem;}
}
@media screen and (max-width:890px) {
	#mainSlide, #mainSlide .slick-slide {height:650px;}
}

@media screen and (max-width:768px) {

}

@media screen and (max-width:590px) {
	#mainSlide .slick-slide .txtArea {padding:0 20px; box-sizing:border-box;}
	#mainSlide .slick-slide .txtArea h2 {margin-bottom:35px; font-size:2.5rem;}
	#mainSlide .slick-slide .txtArea p {line-height: 28px; font-size:1rem;}
}
</style>

	<div id="mainSWrap">
		<!-- main slide -->
		<div id="mainSlide">
			<div class="s01">
				<a href="#">
					<div class="bgArea"></div>
					<div class="txtArea" style="opacity:0;">
						<h2>광운대학교 변화의 시작,<br>산학협력단에서 출발합니다.</h2>
						<p>산업체와의 긴밀한 협조관계를 바탕으로<br>산업체가 수요하는 전문인력과 기술을 제공하는 역할을 강조하고 있습니다.</p>
					</div>
				</a>
			</div>

			<div class="s02">
				<a href="#">
					<div class="bgArea"></div>
					<div class="txtArea" style="opacity:0;">
						<h2>광운대학교 변화의 시작,<br>산학협력단에서 출발합니다.</h2>
						<p>산업체와의 긴밀한 협조관계를 바탕으로<br>산업체가 수요하는 전문인력과 기술을 제공하는 역할을 강조하고 있습니다.</p>
					</div>
				</a>
			</div>
		</div>
		<!-- //main slide -->
	</div>

	<div class="firstBnr">
		<div class="c_center">
			<div class="aboutFourBox dp_f">
				<div class="fourBox fBox01">
					<p class="tit">연구비</p>
					<img src="/images/b_icon01.png" alt="연구비">
					<p class="detail"><span>4,147</span>억</p>
				</div>
				<div class="fourBox fBox02">
					<p class="tit">수행과제</p>
					<img src="/images/b_icon02.png" alt="연구비">
					<p class="detail"><span>92</span>건</p>
				</div>
				<div class="fourBox fBox03">
					<p class="tit">특허</p>
					<img src="/images/b_icon03.png" alt="연구비">
					<p class="detail"><span>745</span>건</p>
				</div>
				<div class="fourBox fBox04">
					<p class="tit">논문</p>
					<img src="/images/b_icon04.png" alt="연구비">
					<p class="detail"><span>2,243</span>건</p>
				</div>
			</div>
			<span>(출처: 2021년 공시자료)</span>
		</div>
	</div>

	<script>
	    $(window).on("load",function(){

				$("html,body").stop().animate({"scrollTop":0},10);

				$(".aboutFourBox .fBox01").stop().animate({"top":"0px", "opacity":1},500);
				$(".aboutFourBox .fBox02").stop().animate({"top":"0px", "opacity":1},700);
				$(".aboutFourBox .fBox03").stop().animate({"top":"0px", "opacity":1},900);
				$(".aboutFourBox .fBox04").stop().animate({"top":"0px", "opacity":1},1000);

			});
	</script>

	<section class="cont01">
		<div class="c_center">
			<div class="tabBtnWrap dp_f">
				<div class="tabBtn on">전체</div>
				<div class="tabBtn">공지사항</div>
				<div class="tabBtn">사업공고</div>
				<div class="tabBtn">입찰공고</div>
			</div>
			<?
				include 'tab.php';
			?>
		</div>
	</section>

	<section class="cont02">
		<div class="c_center">
			<h3 class="cont_tit">주요업무 바로가기</h3>
			<div class="workWrap dp_sb dp_wrap">
				<div class="seeWork bigger" data-aos="fade-up" data-aos-easing="east-in-out" data-aos-duration="800">
					<a href="https://nkuris.kw.ac.kr/nKuris/main/LoginPage.do" target="_blank" title="연구지원시스템 바로가기">
						<div class="tit_Box">
							<h4>N-KURIS</h4>
							<p>연구지원시스템 바로가기</p>
						</div>
						<div class="goArrow"><img src="/images/lnr-arrow-right.png" alt="화살표"></div>
					</a>
				</div>
				<div class="seeWork" data-aos="fade-up" data-aos-easing="east-in-out" data-aos-duration="800" data-aos-delay="200">
					<a href="/sub03/sub02.php" title="지식재산권 바로가기">
						<div class="tit_Box">
							<h4>지식재산권</h4>
							<p>지식재산의 관리 및 특허 편의 제공</p>
						</div>
						<div class="goArrow"><img src="/images/lnr-arrow-right-1.png" alt="화살표"></div>
						<div class="workIcon"><img src="/images/icon01.png" alt="아이콘"></div>
					</a>
				</div>
				<div class="seeWork" data-aos="fade-up" data-aos-easing="east-in-out" data-aos-duration="800" data-aos-delay="300">
					<a href="../pdf/20220902_12.pdf" target="_blank" title="구매/검수 안내 pdf파일 보기">
						<div class="tit_Box">
							<h4>구매/검수 안내</h4>
							<p>구매/검수 정보 제공</p>
						</div>
						<div class="goArrow"><img src="/images/lnr-arrow-right-1.png" alt="화살표"></div>
						<div class="workIcon"><img src="/images/icon02.png" alt="아이콘"></div>
					</a>
				</div>
				<div class="seeWork" data-aos="fade-up" data-aos-easing="east-in-out" data-aos-duration="800" data-aos-delay="400">
					<a href="/sub01/sub05.php" title="업무별 담당자 소개 바로가기">
						<div class="tit_Box">
							<h4>업무별 담당자 소개</h4>
							<p>업무별 담당자 정보 제공</p>
						</div>
						<div class="goArrow"><img src="/images/lnr-arrow-right-1.png" alt="화살표"></div>
						<div class="workIcon"><img src="/images/icon03.png" alt="아이콘"></div>
					</a>
				</div>
				<div class="seeWork" data-aos="fade-up" data-aos-easing="east-in-out" data-aos-duration="800" data-aos-delay="500">
					<a href="/sub02/sub01.php" title="연구 지원제도 바로가기">
						<div class="tit_Box">
							<h4>연구 지원제도</h4>
							<p>학생인건비, 장비, 연구보안/안전</p>
						</div>
						<div class="goArrow"><img src="/images/lnr-arrow-right-1.png" alt="화살표"></div>
						<div class="workIcon"><img src="/images/icon04.png" alt="아이콘"></div>
					</a>
				</div>
				<div class="seeWork" data-aos="fade-up" data-aos-easing="east-in-out" data-aos-duration="800" data-aos-delay="600">
					<a href="/sub02/sub01.php" title="연구 규정 및 지침 바로가기">
						<div class="tit_Box">
							<h4>연구 규정 및 지침</h4>
							<p>산학협력단 규정 및 지침 정보 제공</p>
						</div>
						<div class="goArrow"><img src="/images/lnr-arrow-right-1.png" alt="화살표"></div>
						<div class="workIcon"><img src="/images/icon05.png" alt="아이콘"></div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="cont03">
		<div class="c_center dp_sb">
			<div class="location">
				<span class="prevBtn"><img src="/images/btn_prev.png"></span>
				<a class="stopBtn" href=""><img src="/images/btn_stop.png"></a>
				<span class="nextBtn"><img src="/images/btn_next.png"></span>
			</div>
			<div class="bannerSlick">
				<div class="bannerImg"><a href="https://www.moef.go.kr/" title="기획재정부"><img src="/images/pt1.png" alt="기획재정부"></a></div>
				<div class="bannerImg"><a href="https://www.ebiz4u.co.kr/home.do" title="이비즈포유"><img src="/images/pt2.png" alt="이비즈포유"></a></div>
				<div class="bannerImg"><a href="https://www.kipo.go.kr/ko/MainApp.do" title="특허청"><img src="/images/pt3.png" alt="특허청"></a></div>
				<div class="bannerImg"><a href="https://www.mfds.go.kr/index.do" title="식품의약품안전처"><img src="/images/pt4.png" alt="식품의약품안전처"></a></div>
				<div class="bannerImg"><a href="https://www.nrf.re.kr/index" title="한국연구재단"><img src="/images/pt5.png" alt="한국연구재단"></a></div>
				<div class="bannerImg"><a href="https://www.mcst.go.kr/kor/main.jsp" title="문화체육관광부"><img src="/images/pt6.png" alt="문화체육관광부"></a></div>
				<div class="bannerImg"><a href="http://www.motie.go.kr/www/main.do" title="산업통상자원부"><img src="/images/pt7.png" alt="산업통상자원부"></a></div>
				<div class="bannerImg"><a href="https://www.academyinfo.go.kr/index.do" title="대학알리미"><img src="/images/pt8.png" alt="대학알리미"></a></div>
				<div class="bannerImg"><a href="https://www.mois.go.kr/frt/a01/frtMain.do" title="안전행정부"><img src="/images/pt9.png" alt="안전행정부"></a></div>
				<div class="bannerImg"><a href="https://www.moe.go.kr/main.do" title="교육부"><img src="/images/pt10.png" alt="교육부"></a></div>
				<div class="bannerImg"><a href="https://www.mss.go.kr/site/smba/main.do" title="중소기업청"><img src="/images/pt11.png" alt="중소기업청"></a></div>
				<div class="bannerImg"><a href="https://www.mafra.go.kr/sites/mafra/index.do" title="농림축산식품부"><img src="/images/pt12.png" alt="농림축산식품부"></a></div>
				<div class="bannerImg"><a href="https://www.pps.go.kr/kor/index.do" title="조달청"><img src="/images/pt13.png" alt="조달청"></a></div>
				<div class="bannerImg"><a href="http://www.molit.go.kr/portal.do" title="국토교통부"><img src="/images/pt14.png" alt="국토교통부"></a></div>
				<div class="bannerImg"><a href="http://www.mohw.go.kr/react/index.jsp" title="보건복지부"><img src="/images/pt15.png" alt="보건복지부"></a></div>
				<div class="bannerImg"><a href="https://www.ntis.go.kr/ThMain.do" title="국가과학기술지식정보서비스"><img src="/images/pt16.png" alt="국가과학기술지식정보서비스"></a></div>
			</div>
		</div>
	</section>

	<script>
		$('.bannerSlick').slick({ 
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			slidesToShow: 5, 
			slidesToScroll: 1, 
			arrows: true,
			 prevArrow : $('.prevBtn'), 
			 nextArrow : $('.nextBtn')
		});

		 $('.stopBtn').click(function(event) {

			event.preventDefault();
			$('.bannerSlick').slick('slickPause');

		});

	</script>
<?
	include './footer.php';
?>


