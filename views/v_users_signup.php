<section id="feature_area">
    <article id = 'registration_article'>
            <h3>Registration</h3><br />
            <form id="registration_form" action ="/users/p_signup" method="POST">
                <div id="registration_wrapping" class="clearfix">
                    <section id="registration_aligned">
                        <input type="text" name="first_name" id="registration_first_name" placeholder="First Name" autocomplete="off" tabindex="1" class="registration_txtinput">
                        <input type="text" name="last_name" id="registration_last_name" placeholder="Last Name" autocomplete="off" tabindex="1" class="registration_txtinput">
                        <input type="email" name="email" id="registration_email" placeholder="E-mail Address" autocomplete="off" tabindex="1" class="registration_txtinput">
                        <input type="password" name="password" id="registration_password" placeholder="Password" autocomplete="off" tabindex="1" class="registration_txtinput">
                    </section>
                    <section id="registration_aside" class="clearfix">
                    </section>
                    <section>
                        <input type='hidden' name='timezone'>
                        <script>
                            $('input[name=timezone]').val(jstz.determine().name());
                        </script>
                    </section>
                </div>
                <section>
                    <?php if(isset($error) && $error == 'errorEmptyField'): ?>
                        <p class="showerror">All fields are required.
                        <br>
                    <?php endif; ?>
                    <?php if(isset($error) && $error == 'errorDupEmail'): ?>
                        <p class = "showerror">An account with this email already exists.
                        <br>
                    <?php endif; ?>
                    <br>
                </section>
                <section id="registration_signup_btn">
                    <input type="submit" value="Sign up" id="registration_submit" >
                    <br style="clear:both;">
                </section>
            </form>
        </article>
</section>
