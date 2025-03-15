<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php bloginfo("name"); ?>
    </title>
</head>
<body> 
    <?php 
    while(have_posts()){
        the_post();

        echo '<h2>';
        the_title();
        echo '</h2>';
    }
    ?> 
</body>
</html>