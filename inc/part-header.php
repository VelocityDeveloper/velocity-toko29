<div class="header-top p-3 py-md-4">
    <div class="row align-items-center">
        <div class="col-md-4 mb-3 mb-md-0">
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-8 col-md-4">
            <form action="<?php echo esc_url(get_post_type_archive_link('store_product') ?: home_url('/')); ?>" class="d-flex border rounded overflow-hidden bg-white" method="get" role="search">
                <input style="font-size: 12px;" type="text" name="s" placeholder="Cari.." aria-label="Cari produk" class="form-control h-auto rounded-0 border-0" value="<?php echo esc_attr(get_search_query()); ?>">
                <input type="hidden" name="post_type" value="store_product">
                <button type="submit" class="border-0 btn btn-light h-auto rounded-0 border-0" aria-label="Cari">
                    <?php echo velocity_toko29_ikon('cari', 14); ?>
                </button>
            </form>
        </div>
        <div class="col-4 col-md-4">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="btn btn-dark bg-theme border-0 me-2 tombol-header"><?php echo velocity_toko29_profil(22); ?></div>
                <div class="btn btn-dark bg-theme border-0 tombol-header"><?php echo do_shortcode('[wp_store_cart size="22"]'); ?></div>
            </div>
        </div>
    </div>
</div>

<div>

    <nav id="main-nav" class="navbar navbar-expand-md d-block bg-theme navbar-light p-0" aria-labelledby="main-nav-label">
            
        <h2 id="main-nav-label" class="screen-reader-text">
            <?php esc_html_e('Main Navigation', 'justg'); ?>
        </h2>

        <button class="navbar-toggler text-white text-start w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
            <span class="navbar-toggler-icon"></span>
            <small>Menu</small>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNavOffcanvas">

            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <!-- The WordPress Menu goes here -->
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'offcanvas-body',
                    'container_id'    => '',
                    'menu_class'      => 'navbar-nav justify-content-start flex-grow-1 pe-3',
                    'fallback_cb'     => '',
                    'menu_id'         => 'main-menu',
                    'depth'           => 4,
                    'walker'          => new justg_WP_Bootstrap_Navwalker(),
                )
            );
            ?>
        </div><!-- .offcanvas -->
    </nav>

</div>