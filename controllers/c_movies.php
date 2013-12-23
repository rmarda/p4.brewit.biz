<?php
class movies_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function search() {

        $this->template->content = View::instance("v_movies_search");

        $this->template->title = "Search Movie";

        # Create an array of 1 or many client files to be included in the head
        $client_files_head = Array( '/css/style_movies.css' );
        $client_files_body = Array( '/js/fetchDataFromExternal.js',
                                    '/js/search.js' );

        # Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

        echo $this->template;
    }

    public function nowPlaying() {

        $this->template->content = View::instance("v_movies_nowPlaying");

        $this->template->title = "Movies Playing Now";

        # Create an array of 1 or many client files to be included in the head
        $client_files_head = Array( '/css/style_movies.css' );
        $client_files_body = Array( '/js/fetchDataFromExternal.js',
                                    '/js/now.js' );

        # Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

        echo $this->template;
    }

    public function upcoming() {

        $this->template->content = View::instance("v_movies_upcoming");

        $this->template->title = "Upcoming Movies";

        # Create an array of 1 or many client files to be included in the head
        $client_files_head = Array( '/css/style_movies.css' );
        $client_files_body = Array( '/js/fetchDataFromExternal.js',
                                    '/js/upcoming.js' );

        # Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

        echo $this->template;
    }

    public function watchList() {

        $this->template->content = View::instance("v_movies_watchList");

        $this->template->title = "Your Watch List";

        # Create an array of 1 or many client files to be included in the head
        $client_files_head = Array( '/css/style_movies.css' );
        $client_files_body = Array( '/js/watchlist.js' );


        # Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

        if($this->user->user_id) {
            $q = "SELECT * FROM movies
            WHERE user_id = ".$this->user->user_id;
            $result = DB::instance(DB_NAME)->select_rows($q);
            $this->template->content->movies = $result;
        }

        echo $this->template;
    }

    public function p_watchList() {

        if(!$this->user->user_id) {
            echo "not_logged";
        }
        else {
            $q = "SELECT * FROM movies
            WHERE user_id = ".$this->user->user_id;
            $result = DB::instance(DB_NAME)->select_rows($q);
            echo $result;
        }
    }

    public function p_addToWatchList() {

        # Associate this post with the logged in user
        $_POST['user_id'] = $this->user->user_id;

        # Insert post into the database. Insert also sanitizes data.
        DB::instance(DB_NAME)->insert('movies', $_POST);

    }

    public function p_removeFromWatchList() {
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);
        $movie = $_POST['title'];
        $where_condition = 'WHERE user_id = '.$this->user->user_id.' AND title ="'.$movie.'"';
        DB::instance(DB_NAME)->delete('movies', $where_condition);
    }

} # end of the class