<footer>
    <h2>Footer</h2>
    <p>
        &copy;
        <?php echo date('Y'); //use PHP to keep the year current.?>
        TechCarrers by Manpower
    </p>
    <?php if (function_exists('output_hello_world')) { ?>
        <aside>
            <?php output_hello_world(); ?>
        </aside>
    <?php } ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>