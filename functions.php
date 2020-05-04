<?php
/* 
PHP functions/ logic we can run before our template output.
*/
add_action('wp_enqueue_scripts',function(){
    //Theme Scripts
    wp_enqueue_scripts(
        //name of scripts
        'example-theme-scripts',
        //public path to script
        get_theme_file_uri(
            '/assets/js/scripts.js'
        ),
        //dependancy scripts(byname, in array)
        array(),
        //Should a version number be appended?
        strftime(get_theme_file_uri(
            '/assets/js/scripts.js'
        )),
        //Output in head.
        TRUE
    );

    //Theme Styles
    wp_enqueue_style(
        'example-theme-scripts',
        get_theme_file_uri(
            '/assets/css/main.css'
        )
    );
});

//Add nevigation menus to WordPress.
register_nav_menus(
    array(
        'main_menu' => 'Main Menu'
    )
);
?>