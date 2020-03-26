    </main>
    <footer>
    </footer>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/dist/js/menu-toggle.js" type="text/javascript"></script>
	<script>
	jQuery(document).ready(function(){
		var logout='<?php echo wp_logout_url();?>';
		logout=logout.replace('&amp;','&');
		jQuery('.logout_item a').attr('href',logout);
	});
	</script>
	<?php wp_footer(); ?>
</body>

</html>