$(document).ready(function() {
    var modeStr = "movie/now_playing";
    window.currentSearch = 'Movies Playing Now in Theaters ';
    fetchDataFromExternal(modeStr);
});

//bind back to the top
$('a[href=#top]').click(function(){
    $('html, body').animate({scrollTop:0}, 'slow');
    return false;
});