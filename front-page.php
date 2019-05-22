<?php get_header(); ?>

<h3> <?php echo get_theme_mod('sidebar_position'); ?> </h3>

    <?php $featuredPostID = get_theme_mod('featured_post_setting');
        if($featuredPostID):
    ?>
    <?php
    $args = array(
        'p' => $featuredPostID
    );
    $featuredPost = new WP_Query($args);
    ?>

<?php if($featuredPost->have_posts()): ?>
         <?php while( $featuredPost->have_posts() ): $featuredPost->the_post(); ?>
         <div class="row">
        <div class="col-12">
            <h4>Featured Post</h4>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <h4><?php the_title(); ?></h4>
                <div class="">
                <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">Check out the featured post </a>
            </div>
        </div>
    </div>

         <?php endwhile; ?>
     <?php endif; ?>
<?php endif; ?>



<?php
    $side = get_theme_mod('sidebar_position');

    if($side === 'left'){
        $sidebarOrder = 'order-0';
        $contentorder = 'order-1';
    } else {
        $sidebarOrder = 'order-1';
        $contentorder = 'order-0';
    }
    ?>

<div class="row mb-5 d-flex">  
<?php if( have_posts() ): ?>
<div class="col <?php echo $contentorder ;?>">
        <div class="card-deck">
        <?php while( have_posts() ): the_post() ?>


        <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if( is_active_sidebar('sidebar-1')): ?>
    <div class="col-3 <?php echo $sidebarOrder; ?>">
        <div class="card bg-light p-3">
            <ul>
                <?php dynamic_sidebar('sidebar-1'); ?>
            </ul>
        </div>
    </div>
    </div>

    <?php endif ?>

    <?php
            $args = array(
                'post_type' => 'event',
                'post_per_page' => 2,
                'orderby' => 'date'
            );
            $allEvents = new WP_Query($args);
         ?>
         <?php if( $allEvents->have_posts() ): ?>
             <div class="row mb-5">
                 <div class="col-12">
                         <?php while( $allEvents->have_posts() ): $allEvents->the_post(); ?>
                             <div class="card">
                               <div class="card-header" id="heading">
                                 <h2 class="mb-0">
                                       <?php the_title(); ?>
                                 </h2>
                                 <div class="card-body">
                                     <?php the_content(); ?>
                                 </div>
                               </div>
                             </div>

                         <?php endwhile; ?>
                     </div>
                 </div>
         <?php endif; ?>


     <?php
         $args = array(
             'post_type' => 'staff',
             'posts_per_page' => -1,
             'order' => 'ASC',
             'orderby' => 'title'
         );
         $allStaff = new WP_Query($args);
      ?>

      <?php if( $allStaff->have_posts() ): ?>
          <div class="row mb-5">
              <div class="col-12">
                  <h2>All out Staff</h2>
              </div>
              <?php while( $allStaff->have_posts() ): $allStaff->the_post(); ?>
                  <div class="col-3">
                      <div class="card">
                          <div class="card-body">
                              <?php if(has_post_thumbnail()): ?>
                                  <?php the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt' =>'thumbnail image for the post']); ?>
                              <?php endif; ?>
                             <h3 class="card-title"><?php the_title(); ?></h3>
                             <a class="btn btn-warning btn-block" href="<?php the_permalink(); ?>">View Staff Memeber</a>
                          </div>
                      </div>
                  </div>
              <?php endwhile; ?>
          </div>
      <?php endif; ?>

<?php get_footer(); ?>  