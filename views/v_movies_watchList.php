
<section id="feature_area">
    <?php if(isset($movies)): ?>
        <?php foreach($movies as $movie): ?>
            <article class='clearfix movieArticleStyle box shadow_effect'>
                <img src = <?=$movie['poster']?> class='clearfix movieImageStyle' />
                <div class="clearfix movieInfoStyle">
                    <p class="movie_name"><?=$movie['title']?></p>
                    <p>Release Date: <?=$movie['release_date']?><br>
                       Average Rating: <?=$movie['rating']?> <br>
                       Total Votes: <?=$movie['total_votes']?></p>
                </div>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <article id="watchList_not_logged">
            <p>
                Please Register/Log In to add movies to watch list.
            </p>
        </article>
    <?php endif; ?>
</section>