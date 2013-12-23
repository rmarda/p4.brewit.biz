
//bind back to the top
$('a[href=#top]').click(function(){
    $('html, body').animate({scrollTop:0}, 'slow');
    return false;
});

// delete post
$( ".removeFromWatchList" ).click(function(e) {

    var buttonClicked = $(this);
    var divClicked = buttonClicked.siblings("div.movieDataHidden").text();
    var movieClicked = divClicked.split("::::");
    var articleClicked = buttonClicked.closest("article");
    $.ajax({
        type: 'POST',
        url: '/movies/p_removeFromWatchList',
        success: function(response) {
            articleClicked.remove();
        },
        data: {
            // Pass data to the ajax receiver
            title:movieClicked[1]
        }
    });

}); // end delete watch list


