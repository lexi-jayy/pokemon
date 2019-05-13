<?php get_header(); ?>
<h1>this is from index.php </h1>



<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
    <div class = "">
        <h2> <?php the_title(); ?> </h2>
        <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
    <div class="content">
        <?php the_content(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary"> View Post </a>
        <hr>
    </div>
    <?php endwhile; ?>
<?php else: ?>
<p> there are no posts on this page </p>
<?php endif; ?>




<?php get_footer(); ?>

