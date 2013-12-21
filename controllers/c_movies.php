<?php
class movies_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function search() {
        $this->template->content = View::instance("v_movies_search");

        $this->template->title = "Search Movie";

        # Create an array of 1 or many client files to be included in the head
        $client_files_head = Array( '/css/style_movies_search.css' );

        # Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);

        echo $this->template;
    }

    public function p_search() {

//        # Associate this post with the logged in user
//        $_POST['user_id'] = $this->user->user_id;
//
//        # Unix timestamp when this post was created/modified
//
//        $_POST['created']  = Time::now();
//        $_POST['modified'] = Time::now();
//
//        # Insert post into the database. Insert also sanitizes data.
//        DB::instance(DB_NAME)->insert('posts', $_POST);
//
//        # Send them back
//        Router::redirect("/posts/add/added");


    }





} # end of the class