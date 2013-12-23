p4.brewit.biz
=============

project 4

1. 1-2 paragraph description of your application
==================================================
This web application fetches and displays movie information from a 3rd party website, "The MovieDB" (See references below). Additionally, it allows users to login and add/remove movies to their watch list.

2. A bulleted list of features your application includes
==========================================================
This web application enables users to:
a. Searh Movie: Users can lookup movie names using a keyword search.
b. List Currently Playing Movies: Lists movies currently playing in theaters. 
c. List Upcoming Movies: Lists movies that are releasing soon.
d. Add Movies To WatchList: Users when logged in can add/remove movies to/from their watch list. 
Please note, this application currently allows adding multiple entries of the same movie to the watch list. This was an conscious decision. 


3. What aspects of your application are being managed by JavaScript
====================================================================
a. JavaScript: This application uses JQuery JavaScript Library to make AJAX calls to the moviedb.org website for fetching and displaying results.
b. PHP: The application  uses PHP framework for user login/logout and watch list management on a per user basis.

4. Any additional information the graders may need to know about using your app (provide test admin credentials)
=================================================================================================================

a. Limitations/Disclaimers: The moviedb.org enforces the following search limit on their website: 
30 requests every 10 seconds per IP. Maximum 20 simultaneous connections. 
More information can be found here: http://docs.themoviedb.apiary.io/

Test credentials:
user name: albert@gmail.com
password: albert

5. References
==============
a. Third-party movie website: 
   The MovieDB: http://www.themoviedb.org/