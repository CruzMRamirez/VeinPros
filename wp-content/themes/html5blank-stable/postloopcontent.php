<?php

// Standard Post Format
?>

            <div class="col-10 row justify-content-around blog-post">
                <div class="col-md-3 blog-min row justify-content-center align-items-center">
                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(array(500,500)); // Declare pixel size you need inside the array ?>
                        </a>
                    <?php endif; ?>
                </div>
                <hr class="hidden-md-up" style="background-color: white; margin-top: 20px; margin-bottom: 10px; height: 1px; width: 80%;">
                <div class="col-md-9 blog-min blog-col">
                    <h1 class="text-center"><a id="ucsf-fresno-update-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a></h1>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        