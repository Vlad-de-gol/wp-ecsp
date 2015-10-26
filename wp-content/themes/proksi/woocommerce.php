<?php

get_header(); ?>

<?php if ( have_posts() ) : ?>

    <div id="page-content">
        <div id="breadcrumbs-container" class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php woocommerce_breadcrumb(); ?>
                </div>
            </div>
        </div>
        <section class="products-container">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-12 col-sm-12">
                        <?php woocommerce_content(); ?>
                    </div>
                </div>
            </div>
        </section>      
    </div>

<?php endif; ?>

<?php get_footer(); ?>
