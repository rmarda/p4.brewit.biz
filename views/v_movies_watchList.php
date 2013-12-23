
<section id="feature_area">
    <?php if(isset($movies)): ?>
        <?php if(sizeof($movies) < 1): ?>
            <article id="watchList_empty">
                <p>
                    Your watch list is empty.
                </p>
            </article>
        <?php else: ?>
            <?php foreach($movies as $movie): ?>
                <article class='clearfix movieArticleStyle box shadow_effect'>
                    <img src = <?=$movie['poster']?> class='clearfix movieImageStyle' />
                    <div class="clearfix movieInfoStyle">
                        <p class="movie_name"><?=$movie['title']?></p>
                        <p>Release Date: <?=$movie['release_date']?><br>
                           Average Rating: <?=$movie['rating']?> <br>
                           Total Votes: <?=$movie['total_votes']?></p>
                    </div>
                    <div class="movieDataHidden">
                        ::::<?=$movie['title']?>::::
                    </div>
                    <input type="button" class = "removeFromWatchList" value="Remove From WatchList" /><br>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php else: ?>
        <article id="watchList_empty">
            <p>
                Please Register/Log In to add movies to watch list.
            </p>
        </article>
    <?php endif; ?>
</section>