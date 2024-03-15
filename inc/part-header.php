<div class="header-top p-3 py-md-4">
    <div class="row align-items-center">
        <div class="col-md-4 mb-3 mb-md-0">
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-8 col-md-4">
            <form action="<?php echo get_site_url(); ?>/products" class="d-flex border rounded overflow-hidden" method="get">
                <input style="font-size: 12px;" type="text" name="s" placeholder="Cari.." class="form-control h-auto rounded-0 border-0">
                <button type="submit" class="border-0 btn btn-light h-auto rounded-0 border-0">
                    <svg class="bi" fill="currentColor" width="14" height="14"><use href="#search"></use></svg>
                </button>
            </form>
        </div>
        <div class="col-4 col-md-4">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="btn btn-dark bg-theme border-0 me-2"><?php echo do_shortcode('[profile]'); ?></div>
                <div class="btn btn-dark bg-theme border-0"><?php echo do_shortcode('[cart]'); ?></div>
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