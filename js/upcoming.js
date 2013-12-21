$(document).ready(function() {
    var modeStr = 'movie/upcoming';
    window.currentSearch = 'Upcoming Movies ';
    fetchDataFromExternal(modeStr);
});

//bind back to the top
$('a[href=#top]').click(function(){
    $('html, body').animate({scrollTop:0}, 'slow');
    return false;
});