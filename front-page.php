<?php get_header(); ?>



<div class="row">  
<?php if( have_posts() ): ?>
<div class="col">
        <div class="card-deck">
        <?php while( have_posts() ): the_post() ?>


        <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if( is_active_sidebar('sidebar-1')): ?>
    <div class="col-3">
        <div class="card bg-light p-3">
            <ul>
                <?php dynamic_sidebar('sidebar-1'); ?>
            </ul>
        </div>
    </div>

    <?php endif ?>
</div>

<?php get_footer(); ?>  