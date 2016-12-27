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