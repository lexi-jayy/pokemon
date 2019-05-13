<?php if( is_singular() ): ?>
    <div class="col-12">
    <p> this is a video post </p>
    </div>
    <div class="col-12">
    <?php the_content(); ?>
    <a class="btn btn-primary btn-block" href="<?php the_permalink(); ?>">Listen to Audio</a>
    </div>
<?php else: ?>
<div class="card">
    <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    </div>
    <div class="card-footer">
    <a class="btn btn-primary btn-block" href="<?php the_permalink(); ?>">Listen to Audio</a>
    <p class="card-text"><small class="text-muted">Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></small></p>
    </div>
</div>
<?php endif; ?>