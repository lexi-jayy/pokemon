<?php


    /* 
    Template name: Three Column 
    Template Post Type: page, post
    */
?>


<?php get_header() ?>

<p> this is from three-column</p>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
    <div class = "">
        <h2> <?php the_title(); ?> </h2>
        <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
    <div class="content threeColumn">
        <?php the_content(); ?>
    </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>