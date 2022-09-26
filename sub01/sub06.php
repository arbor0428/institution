<?
	include '../header.php';
	$topTxt01='오시는길';
	$side_menu=6;	
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
	<div class="subTop_imgs"></div><!--서브상단 bg이미지-->
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
		
		<!-- * 카카오맵 - 지도퍼가기 -->
		<!-- 1. 지도 노드 -->
		<div id="daumRoughmapContainer1661081931231" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;"></div>

		<!--
			2. 설치 스크립트
			* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
		-->
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

		<!-- 3. 실행 스크립트 -->
		<script charset="UTF-8">
			new daum.roughmap.Lander({
				"timestamp" : "1661081931231",
				"key" : "2bfpg",
				//"mapWidth" : "640",
				"mapHeight" : "360"
			}).render();
		</script>


		<div class="bg_box adress m-20 m_45">
			<div class="info">
				<div class="icon01 icon"></div>
				<p>
					<strong>주소</strong><br>
					서울시 노원구 광운로 20(월계동 447-1번지)<br>광운대학교 80주년 기념관 401호
				</p>
			</div>
			<div class="info">
				<div class="icon02 icon"></div>
				<p>
					<strong>연락처</strong><br>
					Tel. <a href="tel:02-940-5003">02-940-5003~5</a> / Fax. 02-942-1697
				</p>
			</div>
		</div>

		<h4>지하철</h4>
		<div class="pt_box m_45">
			<div class="box_inner">
				<span class="subway1 subway">1호선</span> (인천, 수원-서울역-청량리-의정부) 광운대역 하차, 도보 6분<br>
				<span class="subway6 subway">6호선</span>  (응암-봉화산)석계역 하차, 1번출구에서 도보 10분)<br>
				<span class="subway7 subway">7호선</span> (도봉-노원-군자-건대입구-청담-터미널-온수)이용시, 태릉입구에서 6호선으로 환승 - 석계역 하차, 1번 출구에서 도보 10분
			</div>
		</div>

		<h4>석계역-광운대 무료 셔틀버스</h4>
		<div class="pt_box m_45">
			<div class="box_inner dot">
				<p>월요일 ~ 금요일 운행(하계, 동계방학기간 중 제외)</p>
				<p>오전 08:00~10:30, 5분 간격 운행</p>
				<p>석계역 공영주차장 3거리 - 석계역 6호선 1번 출구에서 도보30m(뚝방길 대학방향 12번 마을버스 승차장)</p>
			</div>
		</div>

		<h4>시내버스 (정문앞 방면)</h4>
		<div class="pt_box m_45">
			<div class="box_inner dot">
				<span class="bus1 bus">261번(간선버스B)</span>
				석계역-광운대역-광운대-석관사거리-청량리역-동대문운동장-을지로입구-서부역-마포역-여의도역-국회의사당-영등포역

				<span class="bus2 bus">1017번(지선버스 G)</span>
				월계변전소-광운대-장곡초등학교-장위동고개-창문여고-월곡동두산아파트-종암경찰서-안암동로터리-용두시장-동아제약-청계8가-동대문운동장-청계7가

				<span class="bus2 bus">1137번(지선버스 G)</span>
				상계중앙시장입구-상계5동사무소-청원고교-마들역-도봉면허시험장-중계역-하계역-광운대-장곡초등학교-장위동고개-창문여고-미아삼거리역-송중초등학교

				<span class="bus2 bus">1140번(지선버스 G)</span>
				중계동은행사거리-상명초등학교-중계역-하계역-광운대-월계라이프
			</div>
		</div>

		<h4>시내버스 (광운대역 방면 : 광운대역 하차 _ 도보 6분)</h4>
		<div class="pt_box m_45">
			<div class="box_inner dot">
				<span class="bus1 bus">163번(간선버스 B)</span>
				석계역-광운대역-염광여고-신창교-도봉문화센터-창동역서측-도봉등기소-노원구청

				<span class="bus2 bus">1133번(지선버스 G)</span>
				광운대역-석계역-월곡역-종암경찰서-안암동로터리-신설동로터리-동대문-청계2가-광교-롯데백화점-염천교-서부역-만리동고개-공덕시장-신촌역-성산회관-마포구청-영등포수도사업소-월촌중학교-목동5동사무소-목동이대병원

				<span class="bus2 bus">1220번(지선버스 G)</span>
				광운대역-석계역-월곡역-종암경찰서-안암동로터리-용두시장-동아제약-동대문도서관-대광고교
			</div>
		</div>
	</div>
</div>



<?
	include '../footer.php';
?>

