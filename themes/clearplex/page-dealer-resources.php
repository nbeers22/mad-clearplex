<?php
	/*
	Template Name: Dealer Resources
	*/
	get_header(); 
	get_template_part('template-parts/top-bg');
?>

<section class="dealer-intro">
	<div class="row">
		<div class="large-12 colmns text-center">
			<h1 class="blue-heading"><?php the_field('dealer_intro_title'); ?></h1>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center end">
			<?php the_field('dealer_intro_body'); ?>
		</div>
	</div>
</section>

<section class="dealer-videos" style="background-image: url(<?php the_field('dealer_video_bg'); ?>);">
	<div class="row">
		<div class="large-12 columns text-center">
			<h2 class="white-heading"><?php the_field('dealer_video_title'); ?></h2>
			<p class="white-p video-head-body"><?php the_field('dealer_video_body'); ?></p>
		</div>
		<div class="medium-10 medium-offset-1 columns end">
			<div class="row medium-up-3">
				
			<!-- query video post format -->
			<?php
			$video_query = new WP_Query( array(
				'posts_per_page' => 6,
		    'tax_query'      => array(
	        array(                
	          'taxonomy' => 'post_format',
	          'field' => 'slug',
	          'terms' => array('post-format-video')
	        )
		    )
			));
			if ($video_query->have_posts()) : while ($video_query->have_posts()) : $video_query->the_post();
			?>

			<div class="column column-block">
				<?php the_post_thumbnail(); ?>
				<h5 class="video-title white-heading"><?php the_title(); ?></h5>
				<p class="video-body white-p"><?php echo get_the_content(); ?></p>
			</div>			

			<?php endwhile;endif;wp_reset_postdata(); ?>

			</div>
		</div>
	</div>
</section>

<section class="sales-opp">
	<div class="row">
		<div class="large-7 medium-6 columns">
			<h2 class="blue-heading"><?php the_field('dealer_opportunity_title'); ?></h2>
			<?php the_field('dealer_opportunity_body'); ?>
			<a href="<?php echo site_url();the_field('dealer_opportunity_button_link'); ?>" class="btn"><?php the_field('dealer_opportunity_button_text') ?></a>
		</div>
		<div class="large-5 medium-6 columns text-center">
			<img src="<?php the_field('dealer_opportunity_img'); ?>" alt="<?php the_field('dealer_opportunity_title'); ?>">
		</div>
	</div>
</section>

<section class="download-docs">
	<div class="row">
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 columns text-center">
			<h2 class="blue-heading"><?php the_field('dealer_documents_title'); ?></h2>
			<p class="gray-p doc-subhead"><?php the_field('dealer_documents_body'); ?></p>
		</div>
		<div class="medium-10 medium-offset-1 columns end">

			<!-- query link post format -->
			<?php
			$link_query = new WP_Query( array(
				'posts_per_page' => 3,
		    'tax_query'      => array(
	        array(                
	          'taxonomy' => 'post_format',
	          'field' => 'slug',
	          'terms' => array('post-format-link')
	        )
		    )
			));
			if ($link_query->have_posts()) : while ($link_query->have_posts()) : $link_query->the_post();
			?>

				<div class="row doc-row">
					<ul class="doc-list">
						<li class="one-fifth"><?php the_post_thumbnail(); ?></li>
						<li class="three-fifths"><h5 class="doc-title"><?php the_title(); ?></h5>
							<p class="doc-body"><?php echo get_the_content(); ?></p></li>
						<li class="one-fifth"><a href="<?php the_field('download_button_link'); ?>" class="button"><?php the_field('download_button_text'); ?> <i class="fa fa-download" aria-hidden="true"></i></a></li>
					</ul>
					<!-- <div class="medium-2 columns">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="medium-8 columns">
						<div class="doc-meta">
							<h5 class="doc-title"><?php the_title(); ?></h5>
							<p class="doc-body"><?php echo get_the_content(); ?></p>
						</div>
					</div>
					<div class="medium-2 columns">
						<a href="<?php the_field('download_button_link'); ?>" class="button"><?php the_field('download_button_text'); ?> <i class="fa fa-download" aria-hidden="true"></i></a>
					</div> -->
				</div>

			<?php endwhile;endif;wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section class="product-faqs">
	<div class="row">
		<div class="large-12 columns text-center">
			<h2 class="blue-heading"><?php the_field('dealer_faq_title'); ?></h2>
			<p class="faq-body gray-p"><?php the_field('dealer_faq_body'); ?></p>
		</div>
		<div class="medium-5 medium-offset-1 columns">

		<!-- Query custom post type faq -->
		<?php

			$args = array(
				'post_type'      => 'faq',
				'posts_per_page' => 5,
			);
			$count = 1;
			$the_query = new WP_Query($args);

			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$count_faqs = wp_count_posts('faq')->publish;
			?>

				<h5 class="question">Q. <?php the_title(); ?></h5>
				<div class="answer">A. <?php echo get_the_content(); ?></div>
				<?php if ($count == floor($count_faqs / 2)) { ?>
					</div><div class="medium-5 columns end">	
				<?php } ?>
			
				<?php if ($count == $count_faqs) { ?>
					</div>
				<?php } ?>
			
		<?php $count++; }} wp_reset_postdata(); ?> 

	</div>
</section>

<?php get_template_part('template-parts/testimonials-section'); ?>

<?php get_footer(); ?>