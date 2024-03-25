<?php /* Template name: Regulament */ ?>
<?php get_header(); ?>

<div class="container pagePadding termsContainer">
    <h1 class="text-center mb-5"><?php echo get_the_title(); ?></h1>
    <div>
        <?php echo get_the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>