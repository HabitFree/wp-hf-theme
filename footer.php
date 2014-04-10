<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<?php
	echo do_shortcode( '[simpletest name="SimpleTest Unit Tests" path="/hf-accountability/php/tests.php"]' );
?>
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>