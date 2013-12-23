<?php if($user): ?>
    <?php $userClass = 'user_logged_in'?>
<?php else:?>
    <?php $userClass = 'user_not_logged_in'?>
<?php endif; ?>

<section id='search_section'>
    <article id='search_article'>
        <div>
            <input type="text" id='movie_input' class="search" placeholder="lookup a movie..." maxlength="30" size='40'>
            <input type="button" id='movie_search_btn' value="Search">
        </div>
    </article>
</section>
<section class='page_number_info'>
</section>
<section id='feature_area' class=<?=$userClass?> >
</section>
<section class='page_number_info'>
</section>