//slidetoggle_test.js
$(document).ready(function() {
	$(".icmCollapser:gt(0)").hide(); //shows only the first item, hides everything else
	$(".icmClicker").children('a').hover().css('cursor', 'pointer');
	$(".icmClicker").click(function() {
		//$("a", this).css('color', '#f00');
		$(this).siblings().children(".icmCollapser").hide();
		$(".icmClicker", this).children('a').css('font-weight', 'bold');
		$(".icmClicker", this).children('a').siblings().removeAttr('style');
		
		// This next line will make the div animate vertically
		//$(".icmCollapser", this).slideToggle("slow")
		
		//$(".icmCollapser", this).animate({'width': 'toggle'});
		$(".icmCollapser", this).show();

		});
});