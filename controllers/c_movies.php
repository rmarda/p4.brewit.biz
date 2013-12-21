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
        $client_files_body = Array( '/js/fetchDataFromExternal.js',
                                    '/js/watchList.js' );

        # Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

        echo $this->template;
    }

} # end of the class