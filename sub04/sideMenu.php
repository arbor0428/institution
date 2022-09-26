<?
	$side[$side_menu]="side_active";
?>

<aside id="sideMenu">
	<div class="sideMenu_inner">
		<ul class="snb">
			<li class="<?=$side[1]?>"><a href="/sub04/sub01.php">광운창업지원센터</a></li>
			<li class="<?=$side[2]?>"><a href="/sub04/sub02.php">광운창작소</a></li>
			<li class="<?=$side[3]?>"><a href="/sub04/sub03.php">융합디자인씽킹랩</a></li>
			<li class="<?=$side[4]?>"><a href="/sub04/sub04.php">서울창업디딤터</a></li>
			<li class="<?=$side[5]?>"><a href="/sub04/sub05.php">강북청년마루</a></li>
			<li class="<?=$side[6]?>"><a href="/sub04/sub06.php">구리시청년창업지원센터</a></li>					
		</ul>
		
	</div>

	<?
		include '../contactBanner.php';
	?>

</aside>

<aside id="sideMenuM" class="cmTop_menu clearfix">
	<div class="menu_location ">
		<a href="#" class="cur_location">
			<span><?=$topTxt01?></span>
			<span class="right_line"></span>
		</a>
		<ul class="loactionMenu_con" style="display: none;">
			<li class="<?=$side[1]?>"><a href="/sub04/sub01.php">광운창업지원센터</a></li>
			<li class="<?=$side[2]?>"><a href="/sub04/sub02.php">광운창작소</a></li>
			<li class="<?=$side[3]?>"><a href="/sub04/sub03.php">융합디자인씽킹랩</a></li>
			<li class="<?=$side[4]?>"><a href="/sub04/sub04.php">서울창업디딤터</a></li>
			<li class="<?=$side[5]?>"><a href="/sub04/sub05.php">강북청년마루</a></li>
			<li class="<?=$side[6]?>"><a href="/sub04/sub06.php">구리시청년창업지원센터</a></li>					
		</ul>
	</div>
</aside>



<script>
$(".menu_location").each(function() {
	// 클릭할때 펼치기
	$(this).find(".cur_location").click(function() {
		$(this).toggleClass("open");
		$(this).siblings(".loactionMenu_con").toggle();

		return false;
	});
	
});

$(".menu_location").mouseleave(function() {
	if ( $(this).find(".loactionMenu_con").css("display") == "block" ) {
		$(this).find(".cur_location").removeClass("open");
		$(this).find(".loactionMenu_con").hide();
	}
});
</script>