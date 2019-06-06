<?php
    /* Template Name: Contact Template */
    if($_POST){
        $errors = array();
        if(wp_verify_nonce($_POST['_wpnonce'], 'wp_enquiery_form')){
            if(!$_POST['contactName']){
                array_push($errors, 'Your name is required');
            }
            if(!$_POST['contactEmail']){
                array_push($errors, 'Your email is required');
            }
            if(!$_POST['contactMessage']){
                array_push($errors, 'A message is required');
            }
            if(empty($errors)){
                $args = array(
                    'post_content' => $_POST['contactMessage'],
                    'post_title' => $_POST['contactName'],
                    'post_type' => 'contact',
                    'meta_input' => array(
                        'email'=> $_POST['contactEmail']
                    )
                );
                wp_insert_post($args);
            }
        } else {
            array_push($errors, 'Something went wrong with submitting the form');
        }
        // var_dump($_POST);
        // var_dump($_POST['contactName']);
        //
        //
        //
        // die('the form has been submitted');
    }
?>

<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ): the_post() ?>
                <div class="row">
                    <div class="col">
                        <div class="wp_content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <?php if($_POST && !empty($errors)): ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-danger">
                                <ul>
                                    <?php foreach($errors as $singleError): ?>
                                        <li><?php echo $singleError; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if($_POST && empty($errors)): ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-sucsess">
                                <p>Well Done, you sent the form</p>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row">
                        <div class="col">
                            <form action="<?php echo get_permalink();?>" method="post">
                            <?php error_reporting(E_ALL ^ E_NOTICE); ?>
                                <?php wp_nonce_field('wp_enquiery_form'); ?>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="contactName" class="form-control" value="<?php echo $_POST['contactName'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="contactEmail" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <textarea class="form-control" name="contactMessage" rows="8" cols="80"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="" value="Send message" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>


            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>