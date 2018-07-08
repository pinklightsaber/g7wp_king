<?php get_header() ?>

	<div id="fh5co-core-feature">
		<div class="container">
			<div class="row">
				<div class="features">
					<div class="col-half animate-box" data-animate-effect="fadeInLeft">
						<div class="table-c">
							<div class="desc">
								<span>Try Our Awesome Stuff</span>
								<h3>Anyone can make there own Website</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
								<p><a href="#" class="btn btn-lg btn-primary">Learn More</a></p>
							</div>
						</div>
					</div>
					<div class="col-half-image-holder animate-box" data-animate-effect="fadeInRight">
						<img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/samsungs6.png" alt="samsung">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>Retina Ready</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>Fully Responsive</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
						<h3>Web Starter</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Want Some Cool Stuff</span>
					<h2>Our Project</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
		</div>
		<div class="project-content">
			<div class="col-half">
			<?php
				$project_a = array(
					'post_type'		 => 'project',
					'posts_per_page' => 1
					
				);
				$get_project_a = new WP_Query( $project_a );
				while ( $get_project_a->have_posts() ) {
					$get_project_a->the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				?>


				<div class="project animate-box" style="background-image:url(<?= $thumb_url[0] ?>);">
					<!-- thumb url es un arreglo y 0 es la posicion de la img -->
					<?php get_template_part('_includes/home', 'project_desc') ?>
				</div>
				
				<?php } wp_reset_postdata();?>
			</div>

			<div class="col-half">
				<?php
					$project_b = array(
						'post_type'		 => 'project',
						'posts_per_page' => 2,
						'offset'		 => 1
					);
					$get_project_b = new WP_Query( $project_b );
					while ( $get_project_b->have_posts() ) {
						$get_project_b->the_post();
							$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					?>
				<div class="project-grid animate-box" style="background-image:url(<?= $thumb_url[0] ?>)">
					<?php get_template_part('_includes/home', 'project_desc') ?>
				</div>

					<?php } wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="testimony">
								<div class="inner text-center">
									<img src="<?php bloginfo('template_url') ?>/assets/images/person3.jpg" alt="testimony">
								</div>
								<blockquote>
									<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
									<p class="author"><cite>&mdash; John Doe</cite></p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Lets Get Started</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-md-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Get In Touch</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php get_footer() ?>