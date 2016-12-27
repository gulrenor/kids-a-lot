// JavaScript Document
$(document).ready(function() {
    $("#ani-underline").hover(function(){
	    $(this).animate({
		    borderBottomWidth: "1px"
	    }, 500);
    });
});