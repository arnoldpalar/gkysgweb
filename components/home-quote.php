<?php
while ( have_rows('quote') ) : the_row();

    if( get_row_layout() == 'parallax_quote' ):
?>
    <div class="parallax-quote parallaxBg" style="background-image: <?php the_sub_field('background'); ?>;">
        <div class="container">
            <div class="parallax-quote-in">
                <?php the_sub_field('content'); ?>
                <small><?php the_sub_field('sub_content'); ?></small>
            </div>
        </div>
    </div>
<?php
    elseif( get_row_layout() == 'another' ):

    endif;

endwhile;
?>
