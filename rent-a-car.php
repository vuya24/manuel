<?php 

/*
Template Name: Rent-a-car
*/



get_header(); 

?>

        
        <main>
            <section class="hero-index" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/hero-mirror.jpg');">
                
            </section>
        </main>
        <div style="height:600px;"></div>
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile;
        endif;
    ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
