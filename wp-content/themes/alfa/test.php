<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <h3 class="tagline">my wordpress blog</h3>
            <h1 class="title">Bangladesh</h1>
        </div>
    </div>
    <div class="post">
        <div class="container">
            <div class="row">
            <div class="row">
                    <div class="post-left">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
                    <div class="post-right">
                        <p>
                            <strong><?php the_author(); ?></strong>
                            <?php echo get_the_date(); ?>
                        </p>
                        <ul class="list-unstyled">
                            <li>dhaka</li>
                        </ul>
                    </div>
                </div>
                
            </div>

        </div>

    </div>
    
</body>
</html>