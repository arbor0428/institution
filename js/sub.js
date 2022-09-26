$(document).ready(function(){
	//서브 768 이하에서만 나오는 토글 탭메뉴
	var $tabButtonItem = $(".tab_list li"),
		 $tabSelect = $("#tab-select"),
		 $tabContents = $(".tab_contents"),
		 activeClass = "is_active";

	$tabButtonItem.first().addClass(activeClass);
	$tabContents.not(":first").hide();

	$tabButtonItem.find("a").on("click", function (e) {
		var target = $(this).attr("href");

		$tabButtonItem.removeClass(activeClass);
		$(this).parent().addClass(activeClass);
		$tabSelect.val(target);
		$tabContents.hide();
		$(target).show();
		e.preventDefault();
	});

	$(".tab_location").each(function () {
		// 클릭할때 펼치기
		$(this)
			.find(".active_tab")
			.click(function () {
				$(this).toggleClass("open");
				$(this).siblings(".tab_list").toggle();

				return false;
			});

		$(".tabToggle_outer .tab_list li").click(function () {
			$(".tabToggle_outer .tab_list").toggle();
		});
	});
});