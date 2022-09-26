<?
include "/home/iacf/www/module/class/class.DbCon.php";
include "/home/iacf/www/module/class/class.Msg.php";
include "/home/iacf/www/module/class/class.Util.php";


function apiCall($word,$year,$startPage){
	$ServiceKey = 'kZvYT1G50UK4HXaan=VDndQmJc8yEdxfeZmpBXxXy/g=';
	$xmlFile = "http://plus.kipris.or.kr/kipo-api/kipi/patUtiModInfoSearchSevice/getWordSearch?word=".$word."&year=".$year."&ServiceKey=".$ServiceKey;
	$xmlFile .= "&numOfRows=10&pageNo=".$startPage;

	$ch = curl_init(); 
	curl_setopt ($ch, CURLOPT_URL,$xmlFile); //접속할 URL 주소
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt ($ch, CURLOPT_SSLVERSION,1);
	curl_setopt ($ch, CURLOPT_HEADER, 0);
	curl_setopt ($ch, CURLOPT_POST, 1);
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $param); 
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

	curl_setopt ($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);      
	 
	$load_string = simplexml_load_string($result);
	curl_close($ch);

	return $load_string;
}

$startPage = 1;
$i = 1;

$word = '센서';
$year = 0;

$load_string = apiCall($word,$year,$startPage);
$totalCount = $load_string->totalCount;

echo $load_string;


exit;

while($startPage){
	$load_string = apiCall($startPage);
	$totalCount = $load_string->totalCount;

//	echo $totalCnt.'/';

	$recordNum = $startPage * 100;		//한번에 호출할 수 있는 최대 데이터수는 100개(워크넷 오픈API 규칙)

	if($i <= $totalCnt){
		$startPage+=1;

		foreach($load_string->Items as $item){

			//채용공고제목에 장애인 단어포함 && 기업명에 장애인 단어가 포함되어있으면 제외
			if(strpos($item->GI_Subject, "장애인") !== false && strpos($item->C_Name, "장애인") === false){

				$tmpChk = '';	//임시저장아님		

				//직무 초기화
				$cade01_01 = '';			$cade01_02 = '';			$cade01_03 = '';			$cade01_04 = '';			$cade01_05 = '';			$cade01_06 = '';			$cade01_07 = '';
				$cade02_01 = '';			$cade02_02 = '';			$cade02_03 = '';			$cade02_04 = '';			$cade02_05 = '';			$cade02_06 = '';			$cade02_07 = '';
				$cade03_01 = '';			$cade03_02 = '';			$cade03_03 = '';			$cade03_04 = '';			$cade03_05 = '';			$cade03_06 = '';			$cade03_07 = '';

				$cArr = explode(',',$item->GI_Part_No);

				for($p=0; $p<count($cArr); $p++){
					$c = $cArr[$p];
					$n = sprintf('%02d',$p+1);

					//직무
					${'cade01_'.$n} = $wcArr[$c][1];
					${'cade02_'.$n} = $wcArr[$c][2];
					${'cade03_'.$n} = $wcArr[$c][3];
				}

				$subTitle = $item->JK_URL;		//상세정보 url
				$recruitSite = $item->C_URL;		//기업정보 url

				//경력
				$career = $item->GI_Career;

				$career01 = '';			$career02 = '';			$career03 = '';

				if($career == '1')	$career01 = '1';	//신입
				if($career == '2')	$career02 = '1';	//경력
				if($career == '3'){	//신입 + 경력
					$career01 = '1';
					$career02 = '1';
				}
				if($career == '4')	$career03 = '1';	//무관


				//근무형태
				$job_type01 = '';		//정규직
				$job_type02 = '';		//계약직
				$job_type03 = '';		//파견직
				$job_type04 = '';		//인턴
				$job_type05 = '';		//프리랜서
				$job_type06 = '';		//위촉직
				$job_type07 = '';		//별정직
				$job_type08 = '';		//아르바이트
				$job_type09 = '';		//기타

				$cArr = explode(',',$item->GI_Job_Type);
		
				for($p=0; $p<count($cArr); $p++){
					$c = $cArr[$p];
					if($c == '1')		$job_type01 = '1';	//정규직
					elseif($c == '2')	$job_type02 = '1';	//계약직
					elseif($c == '3')	$job_type04 = '1';	//인턴직
					elseif($c == '4')	$job_type03 = '1';	//파견직
					elseif($c == '5')	$job_type09 = '1';	//도급
					elseif($c == '6')	$job_type05 = '1';	//프리랜서
					elseif($c == '7')	$job_type08 = '1';	//아르바이트
					elseif($c == '8')	$job_type09 = '1';	//연수생/교육생
					elseif($c == '9')	$job_type09 = '1';	//병역특례
					elseif($c == '10')	$job_type06 = '1';	//위촉직/개인사업자
				}

				//학력
				$ec = $item->GI_EDU_CutLine;
				if($ec == '0')		$edu = '학력무관';
				elseif($ec == '1')	$edu = '학력무관';
				elseif($ec == '2')	$edu = '학력무관';
				elseif($ec == '3')	$edu = '고졸';
				elseif($ec == '4')	$edu = '대졸(2~3년)';
				elseif($ec == '5')	$edu = '대졸(4년)';
				elseif($ec == '6')	$edu = '석사';
				elseif($ec == '7')	$edu = '박사';
				else					$edu = '';

				$edu_etc = '';

				$emp = '오직';		//장애인채용구분
				$empType = '';

				$preference = '';		//우대조건

				//급여형태
				$payType = '';
				$GI_Pay = $item->GI_Pay;
				if($GI_Pay == '0')		$payType = '회사 내규에 따름';
				elseif($GI_Pay == '1')	$payType = '연봉';
				elseif($GI_Pay == '2')	$payType = '월급';
				elseif($GI_Pay == '3')	$payType = '주급';
				elseif($GI_Pay == '4')	$payType = '주급';
				elseif($GI_Pay == '5')	$payType = '시급';
				elseif($GI_Pay == '6')	$payType = '건별';

				$cArr = explode(',',$item->GI_Pay_Term);
				if($cArr[0] == '0')	$cArr[0] = '';
				if($cArr[1] == '0')	$cArr[1] = '';

				$payMin = $cArr[0];			//최소급여
				$payMax = $cArr[1];		//최대급여

				if($item->GI_Pay_Flag)	$payNego = '1';
				else							$payNego = '';

				//직급
				$pos1_type01 = '';				$pos1_type02 = '';				$pos1_type03 = '';				$pos1_type04 = '';				$pos1_type05 = '';				$pos1_type06 = '';

				//직책
				$pos2_type01 = '';				$pos2_type02 = '';				$pos2_type03 = '';				$pos2_type04 = '';				$pos2_type05 = '';

				$Jikgub = $item->Jikgub;
				if($Jikgub){
					$JikgubArr = explode(',',$Jikgub);

					if(in_array('1',$JikgubArr))		$pos1_type01 = '1';		//사원
					if(in_array('2',$JikgubArr))		$pos1_type02 = '1';		//주임~대리급
					if(in_array('3',$JikgubArr))		$pos1_type03 = '1';		//과장~차장급
					if(in_array('4',$JikgubArr))		$pos1_type04 = '1';		//부장급
					if(in_array('5',$JikgubArr))		$pos1_type05 = '1';		//임원~CEO
					if(in_array('6',$JikgubArr))		$pos1_type06 = '1';		//면접 후 결정
					if(in_array('7',$JikgubArr))		$pos2_type01 = '1';		//팀원
					if(in_array('8',$JikgubArr))		$pos2_type02 = '1';		//팀장/매니저/실장
					if(in_array('9',$JikgubArr))		$pos2_type03 = '1';		//파트장/그룹장
					if(in_array('10',$JikgubArr))	$pos2_type04 = '1';		//본부장/센터장/지점장
					if(in_array('11',$JikgubArr))	$pos2_type04 = '1';		//본부장/센터장/지점장
				}


				$comName = $item->C_Name;	//기업명
				$comNameChk = '';

				$cArr = explode(',',$item->AreaCode);

				$loc01 = '';				$loc02 = '';
				$loc01a = '';				$loc02a = '';
				$loc01b = '';				$loc02b = '';

				if($cArr[0]){
					$row = sqlRow("select * from jobkorea_loc where code='".$cArr[0]."'");
					$loc01 = $row['loc01'];
					$loc02 = $row['loc02'];
				}

				if($cArr[1]){
					$row = sqlRow("select * from jobkorea_loc where code='".$cArr[1]."'");
					$loc01a = $row['loc01'];
					$loc02a = $row['loc02'];
				}

				if($cArr[2]){
					$row = sqlRow("select * from jobkorea_loc where code='".$cArr[2]."'");
					$loc01b = $row['loc01'];
					$loc02b = $row['loc02'];
				}

				//근무지역
				$addr01 = '';
				$addr02 = '';


				//근무요일
				$workYoil = '직접입력';
				$workTimeEtc = '';

				//등록일(접수시작일)
				$GI_W_Date = $item->GI_W_Date;
				$sTime = strtotime($GI_W_Date);
				$sDate = date('Y-m-d',$sTime);

				//마감일
				$closeDt = $item->GI_End_Date;
				$eTime = strtotime($closeDt)+86399;
				$eDate = date('Y-m-d',$eTime);

				//마감일이 2년이상 남은 경우 채용시까지로 설정
				$eYear = date('Y',$eTime);
				if($eYear >= date('Y')+2){
					$eDate = '채용시까지';
					$eTime = 0;
					$eChk = '1';
				}

				
				$eChk = '';

				$AuthNo = $item->GI_No;	//채용공고번호
				$upChk = '1';

				//채용제목
				$title = $item->GI_Subject;

				$etc01 = $item->GI_Keyword;
				$ment = $item->GI_Comment;


				$userip = $_SERVER['REMOTE_ADDR'];
				$rDate = $sDate;
				$rTime = $sTime;

				$itemChk = sqlRowOne("select uid from recruitOpenAPI where userid='".$userid."' and AuthNo='".$AuthNo."'");

				if($itemChk){
					sqlExe("update recruitOpenAPI set upChk='1' where userid='".$userid."' and AuthNo='".$AuthNo."'");

				}else{
					//DB저장
					$sql = "insert into recruitOpenAPI (tmpChk,userid,cade01_01,cade01_02,cade01_03,cade01_04,cade01_05,cade01_06,cade01_07,cade02_01,cade02_02,cade02_03,cade02_04,cade02_05,cade02_06,cade02_07,cade03_01,cade03_02,cade03_03,cade03_04,cade03_05,cade03_06,cade03_07,subTitle,career01,career02,career03,job_type01,job_type02,job_type03,job_type04,job_type05,job_type06,job_type07,job_type08,job_type09,edu,edu_etc,emp,empType,preference,payType,payMin,payMax,payNego,pos1_type01,pos1_type02,pos1_type03,pos1_type04,pos1_type05,pos1_type06,pos2_type01,pos2_type02,pos2_type03,pos2_type04,pos2_type05,comName,comNameChk,addr01,addr02,loc01,loc02,loc01a,loc02a,loc01b,loc02b,workYoil,workYoilEtc,sDate,sTime,eDate,eTime,eChk,recruitSite,etc01,title,ment,userip,rDate,rTime,AuthNo,upChk) values ";
					$sql .= "('$tmpChk','$userid','$cade01_01','$cade01_02','$cade01_03','$cade01_04','$cade01_05','$cade01_06','$cade01_07','$cade02_01','$cade02_02','$cade02_03','$cade02_04','$cade02_05','$cade02_06','$cade02_07','$cade03_01','$cade03_02','$cade03_03','$cade03_04','$cade03_05','$cade03_06','$cade03_07','$subTitle','$career01','$career02','$career03','$job_type01','$job_type02','$job_type03','$job_type04','$job_type05','$job_type06','$job_type07','$job_type08','$job_type09','$edu','$edu_etc','$emp','$empType','$preference','$payType','$payMin','$payMax','$payNego','$pos1_type01','$pos1_type02','$pos1_type03','$pos1_type04','$pos1_type05','$pos1_type06','$pos2_type01','$pos2_type02','$pos2_type03','$pos2_type04','$pos2_type05','$comName','$comNameChk','$addr01','$addr02','$loc01','$loc02','$loc01a','$loc02a','$loc01b','$loc02b','$workYoil','$workYoilEtc','$sDate','$sTime','$eDate','$eTime','$eChk','$recruitSite','$etc01','$title','$ment','$userip','$rDate','$rTime','$AuthNo','$upChk')";
					sqlExe($sql);
				}


//				echo "<a href='".$item->JK_URL."' target='_blank'>".$i.' ==> '.$item->C_Name.' / '.$item->GI_Subject.'</a><br>';
//				echo $item->GI_No.'<br><br>';


			}



			$i++;
		}

		if($i >= $totalCnt){
			break;
		}

	}else{
		break;
	}
}

sqlExe("delete from recruitOpenAPI where userid='".$userid."' and upChk=''");
?>

<!--
<Items>
	<GI_No>23592012</GI_No> 
	<C_URL>http://www.jobkorea.co.kr/Recruit/Co_Read/C/zetawhang?Oem_Code=C900&api= OOO </C_URL> 
	<C_Name>삼성생명보험</C_Name> 
	<GI_Subject>최고의    금융그룹/삼성생명/보험영업( 컨설턴트    FC), 채용</GI_Subject> 
	<GI_Part_No>10300,b0101</GI_Part_No> 
	<GI_Career>3</GI_Career> 
	<GI_Career_Year_Cnt>1</GI_Career_Year_Cnt> 
	<GI_Pay>0</GI_Pay> 
	<GI_Pay_Term>0,0</GI_Pay_Term> 
	<GI_Pay_Flag>1</GI_Pay_Flag> 
	<GI_EDU_CutLine>3</GI_EDU_CutLine> 
	<GI_Edu_Options>0</GI_Edu_Options> 
	<GI_Keyword>금융,생명보험,보험영업,재정설계,보험설계,금융영업,자산관리</GI_Keyword> 
	<GI_Pass_Type>100000</GI_Pass_Type> 
	<GI_Job_Type>2</GI_Job_Type> 
	<Staff>○</Staff> 
	<Jikgub>6</Jikgub> 
	<AreaCode>B180,B190,B200,B201,B300</AreaCode> 
	<GI_End_Date>20160930</GI_End_Date> 
	<JK_URL>http://www.jobkorea.co.kr/Recruit/GI_Read/18523338?Oem_Code=C900&api=OOO</JK_URL> 
	<GI_W_Date>20160922</GI_W_Date> 
	<GI_E_Date>20160922</GI_E_Date> 
</Items>
-->