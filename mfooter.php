<?php /* Este footer idêntico ao footer.php mas este so e usado na página principal parpermitir o infinitescroll */ ?>
	<hr />

            <footer>
                <p class="pull-left">
                  &copy; <?php bloginfo('name') ?> <?=date('Y')?>
                </p>
		<p class="pull-right muted">
                  <?php bloginfo('description') ?>
                </p>
            </footer>

        </div><!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.8.2.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-4285789-5'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	<script>
                $("article img").addClass("my-img");
		$("p.wp-caption-text").addClass("well well-small my-caption");
        </script>

	<?php require('lib/continuous_scroll.php'); ?>
    </body>
</html>
<!--<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
