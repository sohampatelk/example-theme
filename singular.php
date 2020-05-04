<?php get_header(); //output header.php ?>
<?php if (have_posts()) { ?>
    <?php while (have_posts()) {
        the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); //output HTML formated content?>
        </article>
        <nav>
            <a href="<?php echo site_url();?>">
                Go Back
            </a>
        </nav>
    <?php } ?>
<?php } ?>
<?php get_footer(); //output footer.php ?>