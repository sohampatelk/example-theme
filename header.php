<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php //Output for our site title
        bloginfo('name');
        //show page info
        if($current_post_title=get_the_title()){
            echo ' | ' . $current_post_title;
        }
        ?>
    </title>
    <?php wp_head(); //all WP style,scripts,meta data will output here.. ?>
</head>
<body>
    <h1>
    <?php //Output for our site title
        bloginfo('name');
        //show page info
        if($current_post_title=get_the_title()){
            echo ' | ' . $current_post_title;
        }
    ?>
    </h1>
    <nav>
        <h2>Website Navigtion (Main Menu)</h2>
        <?php wp_nav_menu(array(
            'theme_location' => 'main_menu'
            )); ?>
    </nav>