/**
 * Created with JetBrains PhpStorm.
 * User: rmarda
 * Date: 12/22/13
 * Time: 5:22 PM
 * To change this template use File | Settings | File Templates.
 *
 *
 * make ajax call to see if a user is logged in
 if yes,
 make further ajax calls to get movie data
 if(no data)
 tell nothing added to watch list yet.
 else
 display data.
 if no, tell user to log in/create account.
 */

//bind back to the top
$('a[href=#top]').click(function(){
    $('html, body').animate({scrollTop:0}, 'slow');
    return false;
});