<?php

if ($showBlogs= get_theme_mod( 'cta_blocks_show_hide')){

?>

<div class="banner-blocks" id="primary">
    <div class="container">
        <h2><?php echo esc_html( get_theme_mod( 'services_heading' ) ); ?></h2>
        <div class="banner-blocks-holder">
            <?php   
            for($i= 1; $i < 4 ; $i++){
                $image[] = get_theme_mod( 'cta_block_'.$i.'_image', 'size=home_services_service_section');
                
                $titles[] = get_theme_mod( 'title_for_cta_block_'.$i.'');
                $content[] = get_theme_mod( 'content_for_cta_block_'.$i.'');
                $linkBtn[] = get_theme_mod( 'cta_block_'.$i.'_link_label');
                $linkUrl[] = get_theme_mod( 'cta_block_'.$i.'_link');
                $results = array_map( null, $image, $titles, $content, $linkBtn, $linkUrl );
            }
            foreach ($results as $result){
                $imageID = attachment_url_to_postid($result[0]);
            ?>
            <div class="block-holder">
            <?php
                echo wp_get_attachment_image( $imageID, 'home_services_service_section' );
                ?>
                <div class="block-content">
                    <h3 class="title"><?php echo esc_html($result[1]); ?></h3>
                    <p><?php echo esc_textarea($result[2]);?></p>
                    
                    <a target= "_blank" href="<?php if(isset($result[4])) echo esc_html($result[4]);?>" class="btn">
                        <?php if(isset($result[3])) echo esc_html($result[3]);?>
                    </a>
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } ?>