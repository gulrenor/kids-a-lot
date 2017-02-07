//slidetoggle_test.js
$(document).ready(function() {
	$(".icm-collapser:gt(0)").hide(); //shows only the first item, hides everything else
	$(".icm-clicker").children('a').hover().css('cursor', 'pointer');
	$(".icm-clicker").click(function() {
		//$("a", this).css('color', '#f00');
		$(this).siblings().children(".icm-collapser").hide();
		$(".icm-clicker", this).children('a').css('font-weight', 'bold');
		$(".icm-clicker", this).children('a').siblings().removeAttr('style');
		
		// This next line will make the div animate vertically
		//$(".icm-collapser", this).slideToggle("slow")
		
		//$(".icm-collapser", this).animate({'width': 'toggle'});
		$(".icm-collapser", this).show();

		});
    // no?
});
