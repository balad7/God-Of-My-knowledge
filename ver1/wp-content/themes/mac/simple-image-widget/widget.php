<?php
/**
 * Default widget template.
 *
 * Copy this template to /simple-image-widget/widget.php in your theme or
 * child theme to make edits.
 *
 * @package   SimpleImageWidget
 * @copyright Copyright (c) 2015 Cedaro, LLC
 * @license   GPL-2.0+
 * @since     4.0.0
 */
?>

 
<div class="col s12 m3 l3">
    <div class="services_box border_draw"><?php
        echo $link_open;?>
        <div class="service_icon">
            <?php //echo wp_get_attachment_image( $image_id, $image_size );
			$images =  wp_get_attachment_image_src( $image_id );
			//print_r($images);?>
            <img src="<?php echo $images[0];?>" width="<?php echo $images[1];?>" height="<?php echo $images[2];?>" alt="<?php echo $title;?>"/>
        </div><?php
        echo $link_close;?>
        <div class="services_text"><?php
            if ( ! empty( $title ) ):?>
                <?php echo $before_title;?><h5 class="service_title"><?php echo $title;?></h5><?php echo $after_title;?><?php
            endif;
            if ( ! empty( $text ) ) :?>
                <?php echo wpautop( $text );?><?php
            endif;
            if ( ! empty( $link_text ) ) :?>
                <a href="<?php echo $link;?>" class="btn"><?php echo $link_text;?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
                    
            