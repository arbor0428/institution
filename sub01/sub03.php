<?
	include '../header.php';
	$topTxt01='연혁';
	$side_menu=3;	
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
                <p class="visualSub_txt">KUIACF Introduction</p>
                산학협력단 소개
            </h2>
        </div>
    </div>
    <div class="subTop_imgs"></div>
    <!--서브상단 bg이미지-->
</div>

<!----------------컨텐츠영역--------------------------->


<div class="content_box dp_sb">
    <?
		include 'sideMenu.php';
	?>

    <div class="content_area">
        <h2 class="page_title"><?=$topTxt01?></h2>
        <div class="page_location">
            <a href="/" class="home">HOME</a>
            <span>산학협력단 소개</span>
            <strong><?=$topTxt01?></strong>
        </div>

        <div class="tabs">
            <div class="tabButton_outer">
                <ul class="tab_list col_4">
                    <li><a href="#tab01">2019-2017</a></li>
                    <li><a href="#tab02">2016-2014</a></li>
                    <li><a href="#tab03">2013-2010</a></li>
                    <li><a href="#tab04">2009-2004</a></li>
                </ul>
            </div>

            <div class="tabToggle_outer">
                <div class="tab_location">
                    <a href="#" class="active_tab">
                        <span>2019-2017</span>
                        <span class="right_line"></span>
                    </a>
                    <ul class="tab_list" style="display: none;">
                        <li><a href="#tab01">2019-2017</a></li>
                        <li><a href="#tab02">2016-2014</a></li>
                        <li><a href="#tab03">2013-2010</a></li>
                        <li><a href="#tab04">2009-2004</a></li>
                    </ul>
                </div>
            </div>

			<script>
				$(".tab_list li").click(function() {
					let txtchang = $(this).text();
					$(".active_tab").text(txtchang);
				});
			</script>

            <div id="tab01" class="tab_contents year">
                <div class="historyList_wrap area clearfix">
                    <article class="history-list-box">
                        <ul>
                            <li class="historyYear_box">
                                <dl class="historyYear_item">
                                    <dt class="historyYear"><strong>2019</strong></dt>
                                    <dd class="historyInfo_con">

                                        <p class="frontCircle_txt">
											<span class="month">02</span>
											<span class="month_con">
												11대 산학협력단장(건축공학과 유정호교수) 임명<br>
												광운대학교 산학협력단 - (주)벤처포트 업무협약
											</span>
										</p>

                                    </dd>
                                </dl>
                            </li>
                            <li class="historyYear_box">
                                <dl class="historyYear_item">
                                    <dt class="historyYear"><strong>2018</strong></dt>
                                    <dd class="historyInfo_con">

                                        <p class="frontCircle_txt">
											<span class="month">09</span>
											<span class="month_con">
												광운대-(주)마노조경설계사무소와 VR영상 기탁 및 MOU 체결<br>
												IBK 투자증권 다자간 업무협약 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">05</span>
											<span class="month_con">
												광운대학교-드림커뮤니케이션 MOU체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">01</span>
												10대 산학협력단장 (전자공학과 정영욱교수) 임명
											</span>
										</p>

                                    </dd>
                                </dl>
                            </li>  
							<li class="historyYear_box">
                                <dl class="historyYear_item">
                                    <dt class="historyYear"><strong>2017</strong></dt>
                                    <dd class="historyInfo_con">

                                        <p class="frontCircle_txt">
											<span class="month">12</span>
											<span class="month_con">
												광운대학교 산학협력단 - (재)서울테크노파크 기업지원 및 기술사업화 생태계 조성 업무협약
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">11</span>
											<span class="month_con">
												SNK-VITAMIN센터 – 서울여자대학교 산학협력단 창업 지원 및 기술사업화 생태계 조성 업무협약<br>
												SNK-VITAMIN센터 – 서울과학기술대 산학협력단 창업 지원 및 기술사업화 생태계 조성 업무협약<br>
												SNK-VITAMIN센터 – 삼육대학교 산학협력단 창업 지원 및 기술사업화 생태계 조성 업무협약<br>
												광운대학교 산학협력단-언더독스 MOU 체결<br>
												광운대학교 산학협력단-3D프린팅산업협회 MOU 체결<br>
												광운대학교 산학협력단-집토스 MOU 체결<br>
												광운대학교 산학협력단-인사이터스 MOU 체결
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">10</span>
											<span class="month_con">
												광운대학교-양주시 경기북부 테크노벨리 유치 관련 MOU 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">04</span>
											<span class="month_con">
												광운대학교-중소기업청 중소·중견기업 산학협력 생태계 활성화 MOU 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">03</span>
											<span class="month_con">
												광운대학교-성남도시개발공사 차세대지능형 주택개발 협력연구 MOU 체결
											</span>
										</p>
                                    </dd>
                                </dl>
                            </li>  
                        </ul>
                    </article>
                </div>
            </div>
            <div id="tab02" class="tab_contents year">
				<div class="historyList_wrap area clearfix">
                    <article class="history-list-box">
                        <ul>
							<li class="historyYear_box">
                                <dl class="historyYear_item">
                                    <dt class="historyYear"><strong>2016</strong></dt>
                                    <dd class="historyInfo_con">

                                        <p class="frontCircle_txt">
											<span class="month">07</span>
											<span class="month_con">
												광운대학교산학협력단-(주)다래전략사업화센터 MOU체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">06</span>
											<span class="month_con">
												광운대학교산학협력단-한국여성단체협의회 MOU체결<br>
												광운대학교산학협력단-여성벤처협회 MOU체결
												광운대학교산학협력단-서울시 아스피린센터 MOU체결
												광운대학교산학협력단-서울특별시북부여성센터 MOU체결
												미래창조과학부 '대학TLO 및 대학기술지주회사지원사업' 선정
												미래창조과학부 '대학ICT연구센터육성지원사업' 선정
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">05</span>
											<span class="month_con">
												광운대학교산학협력단-노원사회적경제지원센터 MOU체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">03</span>
											<span class="month_con">
												기획재정부 '성실공익법인' 지정
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">02</span>
											<span class="month_con">
												9대 산학협력단장(환경공학과 장윤영교수) 임명
											</span>
										</p>
                                    </dd>
                                </dl>
                            </li>  

							<li class="historyYear_box">
                                <dl class="historyYear_item">
                                    <dt class="historyYear"><strong>2015</strong></dt>
                                    <dd class="historyInfo_con">

                                        <p class="frontCircle_txt">
											<span class="month">12</span>
											<span class="month_con">
												2015 광운대-서울여대 공동창업캠프 개최<br>
												제9회 '연구비 집행 및 관련 제도 설명회' 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">10</span>
											<span class="month_con">
												광운대학교산학협력단-기술보증기금-신한은행 MOU체결<br>
												서울시 '2015년도 대학·지역사회간 협력 지원사업' 선정
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">07</span>
											<span class="month_con">
												광운대학교산학협력단-(주)아너스원 MOU체결<br>
												광운대학교산학협력단-한국기술거래사회 MOU체결<br>
												동문가족기업협의회 회장단 위촉식 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">06</span>
											<span class="month_con">
												2015 광운창업경진대회 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">04</span>
											<span class="month_con">
												동북4구 11개 대학 공동장비활용 MOU체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">02</span>
											<span class="month_con">
												광운대학교산학협력단-고려대학교 안암병원 공동연구개발 MOU체결
											</span>
										</p>
                                    </dd>
                                </dl>
                            </li> 

							<li class="historyYear_box">
                                <dl class="historyYear_item">
                                    <dt class="historyYear"><strong>2014</strong></dt>
                                    <dd class="historyInfo_con">

                                        <p class="frontCircle_txt">
											<span class="month">12</span>
											<span class="month_con">
												2014 광운대-서울여대 공동창업캠프 개최
												제8회 '연구비 집행 및 관련 제도 설명회' 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">10</span>
											<span class="month_con">
												한국전자전2014, Techno-Fair 대학공동관 참가
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">06</span>
											<span class="month_con">
												2014 광운창업경진대회 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">04</span>
											<span class="month_con">
												국가과학기술인력개발원 주관 연구윤리 방문형 교육과정 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">03</span>
											<span class="month_con">
												광운대학교-강북구청 학관협력 협약 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">02</span>
											<span class="month_con">
												8대 산학협력단장(전자통신공학과 정용진 교수) 임명
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">01</span>
											<span class="month_con">
												광운대-서울과학기술대-삼육대-서울테크노파크 장비 공동 활용 MOU 체결
											</span>
										</p>
                                    </dd>
                                </dl>
                            </li>
						</ul>
					</article>
				</div>
            </div>
            <div id="tab03" class="tab_contents year">
				<div class="historyList_wrap area clearfix">
					<article class="history-list-box">
						<ul>
							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2013</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">12</span>
											<span class="month_con">
												제 7회 연구비 집행 및 연구윤리 교육 개최<br>
												2013년 광운대-서울여대 공동창업캠프 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">11</span>
											<span class="month_con">
												2013 광운창업경진대회 개최
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">10</span>
											<span class="month_con">
												광운대학교 산학협력단 '한국전자전(KES)2013, Techno-Fair, 대학공동관 참가
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">08</span>
											<span class="month_con">
												광운대학교 산학협력단 '2013 기술이전자문단(E-TLO)참여대학' 선정
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">06</span>
											<span class="month_con">
												2013년 지식재산권 정보활용 교육 개최
											</span>
										</p>
									</dd>
								</dl>
							</li>  
							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2012</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">11</span>
											<span class="month_con">
												광운대학교 산학협력단-(재)부천산업진흥재단-(사)부천벤처협회 2012 기술세미나 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">10</span>
											<span class="month_con">
												광운대학교 산학협력단 '2012 산학연 EXPO' 참가
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">09</span>
											<span class="month_con">
												2012 광운창업캠프 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">08</span>
											<span class="month_con">
												광운대학교 산학협력단-한국정보통신공사협회 MOU 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">06</span>
											<span class="month_con">
												광운대학교 산학협력단-(재)부천산업진흥재단-(사)부천벤처협회 산학협력 세미나 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">05</span>
											<span class="month_con">
												광운대학교 산학협력단-(재)부천산업진흥재단-(사)부천벤처협회 MOU 체결<br>
												광운창립78주년 기념 제2회 광운학술페스티발 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">03</span>
											<span class="month_con">
												광운대학교-서울산업통상진흥원 MOU 체결
											</span>
										</p>
									</dd>
								</dl>
							</li>  

							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2011</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">11</span>
											<span class="month_con">
												광운대학교 산학협력단 '2011 산학연 EXPO' 참가
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">09</span>
											<span class="month_con">
												광운대학교 산학협력단 서울시 '서울 글로벌 CIT 융복합 기술사업화 포럼' 참가<br>
												광운대학교 산학협력단 - 한국산업단지공단 서울지역본부 간 산학협력 협약 체결
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">07</span>
											<span class="month_con">
												산학협력단 창업보육센터, 서울시 노원구 MOU 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">05</span>
											<span class="month_con">
												광운창립77주년 기념 제1회 광운학술페스티발 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">02</span>
											<span class="month_con">
												광운대학교 산학협력단 및 하얼빈공업대학교 Micorowave/RF센터 MOU 체결<br>
												7대 산학협력단장(전자융합공학과 최진주 교수) 임명
											</span>
										</p>
									</dd>
								</dl>
							</li>
							
							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2010</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">11</span>
											<span class="month_con">
												광운대학교 TLO(Technology Licensing Office) 홈페이지 오픈<br>
												국내 최초 산학협력단 신문 지면광고 (한국경제신문)
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">09</span>
											<span class="month_con">
												중국 Qingdao University of Science Technology 정보과학기술대학에 '광운 대학교 해외 산학협력단' 설립
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">07</span>
											<span class="month_con">
												광운대학교 산학협력단-AWR(사) MOU 체결 및 S/W 기증 (116억)
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">05</span>
											<span class="month_con">
												네팔 TRIBHUVAN대학에 '광운대학교 해외 산학협력단' 설립
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">01</span>
											<span class="month_con">
												몽골 후레정보통신대학교에 '광운대학교 해외 산학협력단' 설립<br>
												6대 산학협력단장(전자공학과 김남영교수) 임명
											</span>
										</p>
									</dd>
								</dl>
							</li>  
						</ul>
					</article>
				</div>
            </div>
            <div id="tab04" class="tab_contents year">
                <div class="historyList_wrap area clearfix">
					<article class="history-list-box">
						<ul>
							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2009</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">12</span>
											<span class="month_con">
												'제3회 연구비 윤리교육' 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">10</span>
											<span class="month_con">
												5대 산학협력단장(전자공학과 이재승교수) 임명
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">07</span>
											<span class="month_con">
												광운대학교 & 한국전자통신연구원 "Open R&D" 학연협력 협정
											</span>
										</p>
									</dd>
								</dl>
							</li>
							
							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2008</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">12</span>
											<span class="month_con">
												광운대학교 산학협력단 & 경기대진테크노파크 업무 협약 체결<br>
												제2회 연구비 윤리교육' 개최<br>
												'광운의 청년리더를 위한 중소기업청장 초청 강연회' 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">09</span>
											<span class="month_con">
												'광운대학교 연구활동 현황(제3집)' 발행
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">07</span>
											<span class="month_con">
												4대 산학협력단장(경영정보학과 서상구교수) 임명
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">03</span>
											<span class="month_con">
												광운대학교 산학협력단&노동부 서울북부지청 관학협력 협약 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">01</span>
											<span class="month_con">
												3대 산학협력단장(전파공학과 김종헌 교수)임명
											</span>
										</p>
									</dd>
								</dl>
							</li> 
							
							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2007</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">10</span>
											<span class="month_con">
												특허청 '찾아가는 직무발명 순회설명회' 개최
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">07</span>
											<span class="month_con">
												광운대학교 연구활동 현황(제2집) 발행
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">04</span>
											<span class="month_con">
												'특허·기술이전 설명회' 개최<br>
												헤럴드경제 선정 'THE BEST KOREA AWARDS (미래핵심산업 경영 대상)' 수상
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">03</span>
											<span class="month_con">
												광운대학교 산학협력단 & 경기도 성남시 관학협력 협약 체결
											</span>
										</p>
									</dd>
								</dl>
							</li>  

							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2006</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">11</span>
											<span class="month_con">
												광운대학교 연구통계책자(제1집) 발행<br>
												한국산업인력공단 국가기술자격 시험장(반도체설계기사) 인증
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">08</span>
											<span class="month_con">
												광운대학교 산학협력단 & 삼성탈레스(주) 산학협력 협약 체결
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">06</span>
											<span class="month_con">
												광운대학교 산학협력단 & (주)위다스 산학협력 협약 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">02</span>
											<span class="month_con">
												광운대학교 산학협력단 & 서울산업통상진흥원 업무협력 협약 체결
											</span>
										</p>
									</dd>
								</dl>
							</li>  

							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2005</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">12</span>
											<span class="month_con">
												서울특별시 나노IP/SoC설계기술혁신사업단 유치
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">11</span>
											<span class="month_con">
												2대 산학협력단장(전자통신공학과 정광수교수) 임명
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">05</span>
											<span class="month_con">
												광운대학교 산학협력단 초청세미나 개최 (※ 초청기관 : 서울특별시 시정개발연구원)
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">04</span>
											<span class="month_con">
												서울특별시 2004년 우수기술지도대학 최우수대학 선정
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">02</span>
											<span class="month_con">
												연구지원편람집(제1집) 발행
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">01</span>
											<span class="month_con">
												서울지역 컨벤션산업발전 협력체제 구축을 위한 협정 조인
											</span>
										</p>
									</dd>
								</dl>
							</li>

							<li class="historyYear_box">
								<dl class="historyYear_item">
									<dt class="historyYear"><strong>2004</strong></dt>
									<dd class="historyInfo_con">

										<p class="frontCircle_txt">
											<span class="month">12</span>
											<span class="month_con">
												광운대학교 & LG전자 산학협력 협약 체결<br>
												교수연구업적집(제11집) 발행<br>
												광운전략환경평가연구소 설립
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">11</span>
											<span class="month_con">
												산업자원부 차세대PDP공동연구센터 유치
											</span>
										</p>
										
										<p class="frontCircle_txt">
											<span class="month">10</span>
											<span class="month_con">
												광운대학교 산학협력단 초청세미나 개최 (※ 초청기관 : 정보통신부 /대학산업기술지원단)
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">09</span>
											<span class="month_con">
												광운대학교 산학협력단 출판사 등록
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">08</span>
											<span class="month_con">
												광운대학교 산학협력단 & 유니버살텔레콤(주), 모토로라코리아(주) 산학협력 협약 체결
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">07</span>
											<span class="month_con">
												서울시 시정발전 협력체제 구축을 위한 협정 조인
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">03</span>
											<span class="month_con">
												광운대학교 산학협력단 사업자 등록 (※ 전국대학교 최초로 산학협력단 회계 분리)
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">02</span>
											<span class="month_con">
												광운대학교 산학협력단 법인 등기<br>
												초대 산학협력단장(경영학과 송영출 교수) 임명
											</span>
										</p>

										<p class="frontCircle_txt">
											<span class="month">01</span>
											<span class="month_con">
												광운대학교 산학협력단 설립 및 조직구성
											</span>
										</p>
									</dd>
								</dl>
							</li>
						</ul>
					</article>
				</div>
            </div>
        </div>
    </div>
</div>



<?
	include '../footer.php';
?>
