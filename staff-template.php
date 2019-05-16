<?php 
/*
 Template Name: Staff Template

*/
?>

<?php get_header(); ?>


<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <div class="row">
            <div class="col">
                <h2> <?php the_title(); ?> </h2>
                    <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>






<?php get_footer(); ?>