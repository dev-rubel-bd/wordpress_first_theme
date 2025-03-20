<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>> 
    <?php get_header(); ?>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tagline">
                        <?php bloginfo("description"); ?>
                    </h3>
                    <h1>
                        <?php bloginfo("name"); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="posts">
        <?php
        while(have_posts()):
            the_post();
        ?>
        <div class="post" <?php post_class(); ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <strong><?php the_author(); ?></strong>
                            <?php echo get_the_date(); ?>
                        </p>
                        <ul class="list-unstyled">
                            <li>dhaka</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail("large", array("class"=>"img-fluid"));
                        }
                        ?>
                        <p>
                            <?php
                            if(is_single()){
                                the_content();
                            }
                            else{
                                the_excerpt();
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endwhile;
        ?>
    </div>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
