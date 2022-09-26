<?
	$side[$side_menu]="side_active";
?>

<aside id="sideMenu">
	<div class="sideMenu_inner">
		<ul class="snb">
			<li class="<?=$side[1]?>"><a href="/sub02/sub01.php">교내연구지원</a></li>
			<li class="<?=$side[2]?>"><a href="/sub02/sub02.php">교외연구지원</a></li>
			<li class="<?=$side[3]?>"><a href="/sub02/sub03.php">사업간접비계산</a></li>
			<li class="<?=$side[4]?>"><a href="/sub02/sub04.php">사업공고</a></li>
			<li class="<?=$side[5]?>"><a href="/sub02/sub05.php">입찰공고</a></li>			
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
			<li class="<?=$side[1]?>"><a href="/sub02/sub01.php">교내연구지원</a></li>
			<li class="<?=$side[2]?>"><a href="/sub02/sub02.php">교외연구지원</a></li>
			<li class="<?=$side[3]?>"><a href="/sub02/sub03.php">사업간접비계산</a></li>
			<li class="<?=$side[4]?>"><a href="/sub02/sub04.php">사업공고</a></li>
			<li class="<?=$side[5]?>"><a href="/sub02/sub05.php">입찰공고</a></li>				
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