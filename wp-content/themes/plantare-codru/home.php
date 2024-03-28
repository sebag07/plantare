<?php /* Template name: Home */ ?>
<?php get_header(); ?>

<div id="home" class="hero">
    <?php add_revslider('plantare-codru-hero','homepage'); ?>
</div>

<div id="activitiesAnchor" class="container-fluid sectionPadding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Activități</h2>
            </div>
            <?php
            if( have_rows('activities_repeater') ):
                while( have_rows('activities_repeater') ) : the_row();
                    $activity_image = get_sub_field("activity_image");
                    ?>

                    <div class="col-lg-4 image-container">
                        <img src="<?php echo $activity_image ?>">
                    </div>


                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<div id="artistsAnchor" class="container-fluid sectionPadding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Artiști</h2>
            </div>
            <?php
            if( have_rows('artists_repeater') ):
                while( have_rows('artists_repeater') ) : the_row();
                    $artist_image = get_sub_field("artist_image");
                ?>

                <div class="col-lg-6 image-container">
                    <img src="<?php echo $artist_image ?>">
                </div>


                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<div id="mapAnchor" class="container-fluid contactFormSection sectionPadding">
    <div class="contactSectionLeftSide container">
        <h2>Locație</h2>
        <img src="/wp-content/themes/plantare-codru/images/orar-locatie.png"></img>
        <div class="google-map">
            <iframe src="https://snazzymaps.com/embed/591317" width="100%" height="100%" style="border:none;"></iframe>
        </div>
    </div>
</div>


<?php get_footer(); ?>
