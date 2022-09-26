<?
	include '../header.php';
	$topTxt01='사업간접비계산';
	$side_menu=3;	
?>

<script src="/js/jquery.number.min.js" /></script>
<script src="/js/overhead.js"></script>

<!--------------서브 비주얼영역---------------------->
<div class="sub_visual">
	<div class="content_box">
		<div class="visualRight_txt_con">
			<h5>KNU Industry-Academic Collaboration Foundation</h5>
			<p>광운대학교 변화의 시작 산학협력단에서 출발합니다.</p>
		</div>
		<div class="visualTxt_con_bg">
			<h2 class="visual_tit">
				<p class="visualSub_txt">Research information</p>
				연구정보		
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
			<span>연구정보</span>
			<strong><?=$topTxt01?></strong>
		</div>

		<!--https://iacf.kw.ac.kr/overhead-->
		<div class="pt_box m-20">
			<div class="box_inner">
				국가연구개발사업 기관별 간접비 비율 일부 변경 고시안 기준<br>
				- 간접비율 : 30.45%
			</div>
		</div>

	<form id="fm1" name="fm1">
		<div class="calWrap">
			<h4 class="m-45">국가연구개발사업의 광운대 간접비율 (직접비의 30.45%, 총연구비의 <span id="stx_01_rate">23.34</span>%)</h4>
			<div class="firstTable">
				<div class="t_center">
					<div class="dp_sb dp_c">
						<div class="dp_f">
							<div class="totalWrap dp_f dp_c">
								<span>총연구비:</span>
								<input id="stx_01" name="acost" onkeyup="coma1()" type="text" placeholder="연구비를 입력하세요">
								<span>원</span>
							</div>
							<div class="radioWrap dp_f dp_c">
								<span>(부가세 :</span>
								<label class="taxyes01 dp_f dp_c" for="tax_01">
									<input id="tax_01" name="tax_01" type="radio" value="on" checked>
									있음
								</label>
								<label class="dp_f dp_c" for="tax_02">
									<input id="tax_02" name="tax_01" type="radio" value="off">
									면세
								</label>
								<span>)</span>
							</div>
						</div>
						<a class="calBtn" href="javascript:overhead01();" title="계산">계산</a>
					</div>
					<p class="first_detail bold">연구비와 부가세의 종류를 선택 후 계산 버튼을 클릭하세요.</p>
				</div>
			</div>
			<div class="secTable">
				<table>
					<colgroup>
						<col style="width: 33.333%;">
						<col style="width: 33.333%;">
						<col style="width: 33.333%;">
					</colgroup>
					<tbody>
						<tr>
							<th>구분</th>
							<th>계산금액</th>
							<th>권장금액</th>
						</tr>
						<tr>
							<td>직접비</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="direct_01" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="direct_02" readonly="readonly" title="직접비 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
						<tr>
							<td>간접비</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="indirect_01" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="indirect_02" readonly="readonly" title="간접비 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
						<tr>
							<td>부가세</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="vat_01" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="vat_02" readonly="readonly" title="부가세 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</form>

	<form id="fm2" name="fm2">
		<div class="calWrap">
			<h4 class="m-45">정부용역 (직접비의 6%, 총연구비의 <span id="stx_02_rate">5.66</span>%)</h4>
			<div class="firstTable">
				<div class="t_center">
					<div class="dp_sb dp_c">
						<div class="dp_f">
							<div class="totalWrap dp_f dp_c">
								<span>총연구비:</span>
								<input id="stx_02" name="acost" onkeyup="coma2()" type="text" placeholder="연구비를 입력하세요">
								<span>원</span>
							</div>
							<div class="radioWrap dp_f dp_c">
								<span>(부가세 :</span>
								<label class="taxyes01 dp_f dp_c" for="tax_03">
									<input id="tax_03" name="tax_02" type="radio" value="on" checked>
									있음
								</label>
								<label class="dp_f dp_c" for="tax_04">
									<input id="tax_04" name="tax_02" type="radio" value="off">
									면세
								</label>
								<span>)</span>
							</div>
						</div>
						<a class="calBtn" href="javascript:overhead02();" title="계산">계산</a>
					</div>
					<p class="first_detail bold">연구비와 부가세의 종류를 선택 후 계산 버튼을 클릭하세요.</p>
				</div>
			</div>
			<div class="secTable">
				<table>
					<colgroup>
						<col style="width: 33.333%;">
						<col style="width: 33.333%;">
						<col style="width: 33.333%;">
					</colgroup>
					<tbody>
						<tr>
							<th>구분</th>
							<th>계산금액</th>
							<th>권장금액</th>
						</tr>
						<tr>
							<td>직접비</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="direct_03" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="direct_04" readonly="readonly" title="직접비 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
						<tr>
							<td>간접비</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="indirect_03" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="indirect_04" readonly="readonly" title="간접비 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
						<tr>
							<td>부가세</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="vat_03" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="vat_04" readonly="readonly" title="부가세 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</form>

	<form id="fm3" name="fm3">
		<div class="calWrap">
			<h4 class="m-45">민간용역 및 기타 (총연구비의 <span id="stx_03_rate">12</span>%)</h4>
			<div class="firstTable">
				<div class="t_center">
					<div class="dp_sb dp_c">
						<div class="dp_f">
							<div class="totalWrap dp_f dp_c">
								<span>총연구비:</span>
								<input id="stx_03" name="acost" onkeyup="coma3()" type="text" placeholder="연구비를 입력하세요">
								<span>원</span>
							</div>
							<div class="radioWrap dp_f dp_c">
								<span>(부가세 :</span>
								<label class="taxyes01 dp_f dp_c" for="tax_05">
									<input id="tax_05" name="tax_03" type="radio" value="on" checked>
									있음
								</label>
								<label class="dp_f dp_c" for="tax_06">
									<input id="tax_06" name="tax_03" type="radio" value="off">
									면세
								</label>
								<span>)</span>
							</div>
						</div>
						<a class="calBtn" href="javascript:overhead03();" title="계산">계산</a>
					</div>
					<p class="first_detail bold">연구비와 부가세의 종류를 선택 후 계산 버튼을 클릭하세요.</p>
				</div>
			</div>
			<div class="secTable">
				<table>
					<colgroup>
						<col style="width: 33.333%;">
						<col style="width: 33.333%;">
						<col style="width: 33.333%;">
					</colgroup>
					<tbody>
						<tr>
							<th>구분</th>
							<th>계산금액</th>
							<th>권장금액</th>
						</tr>
						<tr>
							<td>직접비</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="direct_05" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="direct_06" readonly="readonly" title="직접비 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
						<tr>
							<td>간접비</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="indirect_05" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="indirect_06" readonly="readonly" title="간접비 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
						<tr>
							<td>부가세</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="vat_05" readonly="readonly" type="text" value="">
									원
								</label>
							</td>
							<td>
								<label class="dp_f dp_c dp_cc" for="">
									<input id="vat_06" readonly="readonly" title="부가세 권장금액" type="text" value="">
									원
								</label>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



<?
	include '../footer.php';
?>

