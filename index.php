<?php get_header(); //output header.php ?>

<?php if (have_posts()) { ?>
    <h2>Posts</h2>
    <ul>
        <?php while (have_posts()) { ?>
            <?php the_post(); ?>
            <li>
                <h3><?php the_title(); ?></h3>
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <p>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </p>
            </li>
        <?php } ?>
    </ul>
<?php } ?>
<?php get_footer(); //output footer.php ?>