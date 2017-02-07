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

// JavaScript Document
$(document).ready(function() {
    $("#ani-underline").hover(function(){
	    $(this).animate({
		    borderBottomWidth: "1px"
	    }, 500);
    });
});
//whatsnew.js
//controls display of the newsletters
//only shows selected, or most recent

$(document).ready(function () {
    //hide all newsletters except the newest one
    //this is the default view
    $('#newsletters div').not(':first-child').hide();
    
    //when a link in the sidebar is clicked, hide everything and then
    //toggle the clicked id's visibility
    $('a.newsletterToggle').click(function() {
        $('#newsletters').children().hide();
        $(this.hash).toggle();
    });    
});