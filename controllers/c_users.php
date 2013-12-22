<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "This is the index page";
    }

    public function signup($error = NULL) {
        # Setup view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title   = "Sign Up";

        # Pass data to the view
        $this->template->content->error = $error;

        # Create an array of 1 or many client files to be included in the head
        $client_files_head = Array( '/css/style_users.css' );

        # Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);

        # Render template
        echo $this->template;
    }

    public function p_signup() {

        $_POST = DB::instance(DB_NAME)->sanitize($_POST);
        foreach( $_POST as $key => $value )
        {
            if( empty( $value ) )
            {
                //this should be an error.
                Router::redirect("/users/signup/errorEmptyField");
            }
        }

        //lookup database if an account with this email already exists. If yes, report error.

        $email = $_POST['email'];
        $q = 'SELECT first_name FROM users WHERE email = "'.$email.'" ';
        $username = DB::instance(DB_NAME)->select_field($q);
        if($username) {
            // show error that an account with this email exists.
            Router::redirect("/users/signup/errorDupEmail");
        }

        $_POST['created'] = Time::now();
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        DB::instance(DB_NAME)->insert_row('users', $_POST);

        // Now that the user has registered successfully, log them in as well
        $this->loginHelper($_POST);
    }

    public function login() {
        echo "This is the login page";
    }

    public function logout() {
        echo "This is the logout page";
    }

    public function profile($user_name = NULL) {

        $this->template->content = View::instance('v_users_profile');
        $this->template->content->user_name = $user_name;

        echo $this->template;

    }

} # end of the class