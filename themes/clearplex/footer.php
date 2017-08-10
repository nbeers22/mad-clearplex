<?php
	$options = get_option('mic_theme_options');
?>

		</section>

		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<div class="row">
					<div class="large-4 columns">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-logo.png" alt="ClearPlex by Madico">
						<address>
							<p>PO BOX 216, Draper, UT 84020</p>
							<p>(801) 571-8243</p>
						</address>
						<p class="terms"><a href="#!">Terms and Conditions</a> | <a href="#!">Privacy Policy</a></p>
						<p>&copy; <?php echo Date('Y'); ?> ClearPlex by Madico. All rights reserved.</p>
					</div>
					<div class="large-4 large-offset-2 columns">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>
					</div>
					<div class="large-2 columns">
						<ul class="social-links">
						<?php if ($options['facebook_link']) { ?>
							<li><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['facebook_link']; ?>">Facebook</a></li>
						<? }if($options['twitter_link']){ ?>
							<li><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['twitter_link']; ?>">Twitter</a></li>
						<? }if($options['gplus_link']){ ?>
							<li><i class="fa fa-google-plus" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['gplus_link']; ?>">Google+</a></li>
						<? }if($options['linkedin_link']){ ?>
							<li><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['linkedin_link']; ?>">LinkedIn</a></li>
						<? }if($options['instagram_link']){ ?>
							<li><i class="fa fa-instagram" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['instagram_link']; ?>">Instagram</a></li>
						<? }if($options['youtube_link']){ ?>
							<li><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;&nbsp;<a href="<?php echo $options['youtube_link']; ?>">YouTube</a></li>
						<? } ?>
						</ul>
					</div>
				</div>
			</footer>
		</div>

<?php wp_footer(); ?>

</body>
</html>
