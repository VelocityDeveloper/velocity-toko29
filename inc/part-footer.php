<footer class="site-footer text-bg-dark" id="colophon">
    <div class="bg-theme py-1"></div>

    <div class="footer-sidebar px-4 pt-4">
        <div class="row">
            <?php
            for( $x = 1; $x <= 4; $x++ ):
                if (is_active_sidebar('footer-widget-'.$x)) {
                    echo '<div class="col-md-3">';
                        dynamic_sidebar('footer-widget-'.$x);
                    echo '</div>';
                }
            endfor;
            ?>
        </div>
    </div>

    <div class="site-info text-center p-4">
        <small>
            © <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved.
            <br>
            Design by <a class="opacity-50" href="https://velocitydeveloper.com" target="_blank" rel="noopener noreferrer"> Velocity Developer </a>
        </small>
    </div>
    <!-- .site-info -->

</footer>