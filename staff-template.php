<?php
    /*
        Template Name: Events Template
    */
?>

<?php get_header(); ?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post() ?>
        <div class="row">
            <div class="col">
                <h2><?php the_title(); ?></h2>
                <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1
            );
            $allStaff = new WP_Query($args);
            // var_dump($allEvents);
            // die();
         ?>
         <?php if( $allStaff->have_posts() ): ?>
             <div class="row">
                 <div class="col">
                     <div class="accordion" id="accordionExample">
                         <?php $staffNumber = 1; ?>
                         <?php while( $allStaff->have_posts() ): $allStaff->the_post(); ?>
                             <div class="card">
                               <div class="card-header" id="heading<?php echo $staffNumber; ?>">
                                 <h2 class="mb-0">
                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $staffNumber; ?>">
                                       <?php the_title(); ?>
                                   </button>
                                 </h2>
                               </div>
                               <div id="collapse<?php echo $staffNumber; ?>" class="collapse"  data-parent="#accordionExample">
                                 <div class="card-body">
                                     <?php the_content(); ?>
                                 </div>
                               </div>
                             </div>

                             <?php $staffNumber++; ?>
                         <?php endwhile; ?>
                     </div>
                 </div>
             </div>
         <?php endif; ?>






    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>