function decimalAdjust(type, value, exp){
	// If the exp is undefined or zero...
		if (typeof exp === 'undefined' || +exp === 0){
			return Math[type](value);
		}
	value = +value;
	exp = +exp;
	// If the value is not a number or the exp is not an integer...
	if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)){
		return NaN;
	}
	// Shift
	value = value.toString().split('e');
	value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
	// Shift back
	value = value.toString().split('e');
	return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
	}
	// Decimal floor
	if (!Math.floor10) {
		Math.floor10 = function(value, exp) {
		return decimalAdjust('floor', value, exp);
		};
	}

	function overhead01() {

        console.log("111111");
        var toRate = jQuery("#stx_01_rate").text(); //22.42;
        console.log("222");
        console.log(toRate);
		if(toRate== ""){
			alert("서버오류1"); 
			return false;     
        }
		if(jQuery("#stx_01").val() == ""){
			alert("총연구비를 입력하세요."); 
			jQuery("#stx_01").focus();
			return false;     
        }
		var toTal=jQuery("#stx_01").val().replace(/,/g,'');
		var tax=jQuery('input[name="tax_01"]:checked').val();
		if(tax == "on"){
			vat= toTal / 11
			vat_t = Math.round(vat);
			jQuery("#vat_01").attr({"value": jQuery.number(vat_t)});
			jQuery("#vat_02").attr({"value": jQuery.number(vat_t)});
			//indirect=(toTal-vat_t)/1.2687*0.2687;
            indirect=(toTal-vat_t)*(toRate/100);
			indirect_t = Math.round(indirect);
			indirect_re = Math.floor10(indirect_t, 3);
			jQuery("#indirect_01").attr({"value": jQuery.number(indirect_t)});
			jQuery("#indirect_02").attr({"value": jQuery.number(indirect_re)});
			direct_t=toTal-vat_t-indirect_t;
			direct_re=toTal-vat_t-indirect_re;
			jQuery("#direct_01").attr({"value": jQuery.number(direct_t)});
			jQuery("#direct_02").attr({"value": jQuery.number(direct_re)});
		}else{
			jQuery("#vat_01").attr({"value": "-"});
			jQuery("#vat_02").attr({"value": "-"});
			//indirect=toTal/1.2687*0.2687;
            indirect=toTal*(toRate/100);
			indirect_t = Math.round(indirect);
			indirect_re = Math.floor10(indirect_t, 3);
			jQuery("#indirect_01").attr({"value": jQuery.number(indirect_t)});
			jQuery("#indirect_02").attr({"value": jQuery.number(indirect_re)});
			direct_t=toTal-indirect_t;
			direct_re=toTal-indirect_re;
			jQuery("#direct_01").attr({"value": jQuery.number(direct_t)});
			jQuery("#direct_02").attr({"value": jQuery.number(direct_re)});
		}

	}
	function overhead02() {
        var toRate = jQuery("#stx_02_rate").text(); //5.66;
		if(toRate== ""){
			alert("서버오류2"); 
			return false;     
        }
		if(jQuery("#stx_02").val() == ""){
				alert("총연구비를 입력하세요."); 
				jQuery("#stx_02").focus();
			return false;     
         }
		var toTal=jQuery("#stx_02").val().replace(/,/g,'');
		var tax=jQuery('input[name="tax_02"]:checked').val();
		if(tax == "on"){
			vat= toTal / 11
			vat_t = Math.round(vat);
			jQuery("#vat_03").attr({"value": jQuery.number(vat_t)});
			jQuery("#vat_04").attr({"value": jQuery.number(vat_t)});
			//indirect=(toTal-vat_t)/1.05*0.06;
			indirect=(toTal-vat_t)*(toRate/100);
			indirect_t = Math.round(indirect);
			indirect_re = Math.floor10(indirect_t, 3);
			jQuery("#indirect_03").attr({"value": jQuery.number(indirect_t)});
			jQuery("#indirect_04").attr({"value": jQuery.number(indirect_re)});
			direct_t=toTal-vat_t-indirect_t;
			direct_re=toTal-vat_t-indirect_re;
			jQuery("#direct_03").attr({"value": jQuery.number(direct_t)});
			jQuery("#direct_04").attr({"value": jQuery.number(direct_re)});
		}else{
			jQuery("#vat_03").attr({"value": "-"});
			jQuery("#vat_04").attr({"value": "-"});
			//indirect=toTal/1.05*0.06;
            indirect=toTal*(toRate/100);
			indirect_t = Math.round(indirect);
			indirect_re = Math.floor10(indirect_t, 3);
			jQuery("#indirect_03").attr({"value": jQuery.number(indirect_t)});
			jQuery("#indirect_04").attr({"value": jQuery.number(indirect_re)});
			direct_t=toTal-indirect_t;
			direct_re=toTal-indirect_re;
			jQuery("#direct_03").attr({"value": jQuery.number(direct_t)});
			jQuery("#direct_04").attr({"value": jQuery.number(direct_re)});
		}

	}
	function overhead03() {
        var toRate = jQuery("#stx_03_rate").text(); //12;
		if(toRate== ""){
			alert("서버오류3"); 
			return false;     
        }
		if(jQuery("#stx_03").val() == ""){
				alert("총연구비를 입력하세요."); 
				jQuery("#stx_03").focus();
			return false;     
         }
		var toTal=jQuery("#stx_03").val().replace(/,/g,'');
		var tax=jQuery('input[name="tax_03"]:checked').val();
		if(tax == "on"){
			vat= toTal / 11
			vat_t = Math.round(vat);
			jQuery("#vat_05").attr({"value": jQuery.number(vat_t)});
			jQuery("#vat_06").attr({"value": jQuery.number(vat_t)});
			indirect=(toTal-vat_t)*(toRate/100);
			indirect_t = Math.round(indirect);
			indirect_re = Math.floor10(indirect_t, 3);
			jQuery("#indirect_05").attr({"value": jQuery.number(indirect_t)});
			jQuery("#indirect_06").attr({"value": jQuery.number(indirect_re)});
			direct_t=toTal-vat_t-indirect_t;
			direct_re=toTal-vat_t-indirect_re;
			jQuery("#direct_05").attr({"value": jQuery.number(direct_t)});
			jQuery("#direct_06").attr({"value": jQuery.number(direct_re)});
		}else{
			jQuery("#vat_05").attr({"value": "-"});
			jQuery("#vat_06").attr({"value": "-"});
			indirect=toTal*(toRate/100);
			indirect_t = Math.round(indirect);
			indirect_re = Math.floor10(indirect_t, 3);
			jQuery("#indirect_05").attr({"value": jQuery.number(indirect_t)});
			jQuery("#indirect_06").attr({"value": jQuery.number(indirect_re)});
			direct_t=toTal-indirect_t;
			direct_re=toTal-indirect_re;
			jQuery("#direct_05").attr({"value": jQuery.number(direct_t)});
			jQuery("#direct_06").attr({"value": jQuery.number(direct_re)});
		}

	}


		//jQuery(".stx").keyup(function(){
			//jQuery(this).attr({"value": jQuery.number(jQuery(this).val())});
          

	
		//jQuery(".result").click(function(){
			//console.log(jQuery(this).parents().get(2).find("input"));
			//jQuery(this).parents().get(1).siblings(".won").css("background", "yellow");	
			//if(jQuery('.stx').val() == ""){
			//	alert("총연구비를 입력하세요."); 
			//	jQuery(".stx").focus();
			//return false;     
         //}
			//여기에 복사
		//});
		//});
var realcost1;
var realcost2;
var realcost3;
function jsSetComa(str_result){
	var reg = /(^[+-]?\d+)(\d{3})/
	str_result += ''
	while (reg.test(str_result)){
		str_result = str_result.replace(reg, '$1' + ',' + '$2')
		}
 	return str_result;
}
function coma1(){
	var string
	string = fm1.acost.value
	realcost1 = string.replace(/[^0-9]/gi,"")
	fm1.acost.value = jsSetComa(realcost1)
}
function coma2(){
	var string
	string = fm2.acost.value
	realcost2 = string.replace(/[^0-9]/gi,"")
	fm2.acost.value = jsSetComa(realcost2)
}
function coma3(){
	var string
	string = fm3.acost.value
	realcost3 = string.replace(/[^0-9]/gi,"")
	fm3.acost.value = jsSetComa(realcost3)
}