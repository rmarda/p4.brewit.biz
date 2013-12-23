<?php if($user): ?>
    <?php $userClass = 'user_logged_in'?>
<?php else:?>
    <?php $userClass = 'user_not_logged_in'?>
<?php endif; ?>


<section class='page_number_info'>
</section>
<section id='feature_area' class=<?=$userClass?> >
</section>
<section class='page_number_info'>
</section>
