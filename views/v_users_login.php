<section id="feature_area">
    <article id = 'login_article'>
        <h3>Sign In</h3><br />
        <form id="login_form" action ="/users/p_login" method="post">
            <div id="login_wrapping" class="clearfix">
                <section id="login_aligned">
                    <input type="email" name="email" id="login_email" placeholder="E-mail Address" autocomplete="off" tabindex="1" class="registration_txtinput">
                    <input type="password" name="password" id="login_password" placeholder="Password" autocomplete="off" tabindex="1" class="registration_txtinput">
                </section>
                <section id="login_aside" class="clearfix">
                </section>
            </div>
            <section>
                <?php if(isset($error)): ?>
                    <p class="showerror">Wrong user name or password</p>
                    <br>
                <?php endif; ?>
            </section>
            <section id="login_btn">
                <input type="submit" value="Login" id="login_submit" >
                <br style="clear:both;">
            </section>
        </form>
    </article>
</section>