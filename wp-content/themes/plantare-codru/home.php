<?php /* Template name: Home */ ?>
<?php get_header(); ?>

<div id="home" class="hero">
    <?php add_revslider('plantare-codru-hero','homepage'); ?>
</div>

<div id="activitiesAnchor" class="container-fluid sectionPadding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">Activități</h2>
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
                <h2 class="section-title">Artiști</h2>
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

<div id="partnersAnchor" class="container-fluid sectionPadding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">Au contribuit la Oxigen Planting Festival</h2>
            </div>
            <?php
            if( have_rows('partners_repeater') ):
                while( have_rows('partners_repeater') ) : the_row();
                    $partner_image = get_sub_field("partner_image");
                    ?>

                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 image-container">
                        <img src="<?php echo $partner_image ?>">
                    </div>


                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<div id="locationAnchor" class="container-fluid sectionPadding">
    <div class="contactSectionLeftSide container">
        <h2>Hartă</h2>
        <img src="/wp-content/themes/plantare-codru/images/hartaoxigen6.png"></img>
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
