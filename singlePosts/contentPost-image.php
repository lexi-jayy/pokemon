<?php
if(get_post_meta(get_the_ID(), 'new_image', true)){
    $imageID = get_post_meta(get_the_ID(), 'new_image', true);
    echo $imageID;
    $imageURL = wp_get_attachment_image_src($imageID, 'large');
    // wp_get_attachment_url()
    echo $imageURL[0];
}
?>
<img src="<?php echo $imageURL[0] ?>" class="img-fluid" alt="">
