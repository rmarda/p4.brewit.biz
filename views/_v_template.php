<!DOCTYPE html>
<html>
<head>
    <title><?php if(isset($title)) echo $title; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- template css-->
    <link href="/css/style_template.css" rel="stylesheet" />

    <!-- google font-->
    <link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">

    <!-- jstz time zone-->
    <script src="/js/jstz.min.js" type="text/javascript"></script>

    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <!-- Controller Specific JS/CSS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>

<body>
    <div id="wrapper">
        <section>
            <div id='top'>
                <a href="#top" title="Scroll back to the top">Back to the top</a>
            </div>
        </section>
        <header>
            <img id="logo" src="/uploads/images/movie_monkey.jpg" alt="movie_monkey_logo" width="125" height="125" />
            <h1 id='page_title'>Movie Monkey</h1>

            <!-- Hide User name, logout option and posts nav if no user is logged in-->
            <?php if(!$user): ?>
                <div class='login_dropdown'>
                    <ul>
                        <li>
                            Login
                            <ul>
                                <li><a href='/users/login'>Login</a></li>
                                <li><a href='/users/signup'>Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php else:?>
            <div class='login_dropdown'>
                <ul>
                    <li>
                        <h3>Hello <?php echo $user->first_name; ?></h3>
                        <ul>
                            <li><a href='/users/logout'>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php endif; ?></p>
        </header>
        <nav class ="menu">
            <ul>
                <li> <a href="/index"> Home </a> </li>
                <li> <a href="/movies/search"> Search Movie </a> </li>
                <li> <a href="/movies/nowPlaying"> Now Playing </a> </li>
                <li> <a href="/movies/upcoming"> Upcoming </a> </li>
                <li> <a href="/movies/watchList"> Watch List </a> </li>
            </ul>
        </nav>
        <!-- Hide User name, logout option and posts nav if no user is logged in-->
<!--        --><?php //if(!$user):?>
<!--            <script>-->
<!--                document.getElementById('userPref').style.display="none";-->
<!--                document.getElementById('mainmenu').style.display="none";-->
<!--            </script>-->
<!--        --><?php //endif;?>

        <?php if(isset($content)) echo $content; ?>
        <footer>
            <p>Movie API from <a href="https://www.themoviedb.org/"> MovieDB.</a> Logo taken from <a href="http://www.logoinstant.com/"> LogoInstant</a></p>
        </footer>
    </div>
    <?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>