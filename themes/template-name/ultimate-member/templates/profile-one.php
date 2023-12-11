<?php /* Template: Profile One */ ?>

<?php
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?><head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <script src="/wp-content/themes/understrap-child-1.2.0/profile-assets/js/google-map.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVSU4zMSVFDBeFTc9ZNsUyHdzxAsLKU8U&callback=Function.prototype"></script>
</head>
	
<style>
.acf-map {
	width: 100%;
	height: 350px;
	position: relative;
	overflow: hidden;
}
</style>
			<?php
			$user_id = um_profile_id();
			$user_info = get_userdata($user_id);
			?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?>

			<main class="site-main" id="main">
				
			
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<?php $profile_photo = get_field ('pf_profile_photo', 'user_'.$user_id); ?>
						<img alt="<?php echo esc_url ($profile_photo['alt']); ?>" src="<?php echo esc_url ($profile_photo['url']); ?>" /> 
					</div>
					<div class="col-md-8">
						<div class="row">
							<h2>Contact Details</h2>
							<div class="col-md-6">
								<h3>
									<?php the_field ('pf_first_name', 'user_'.$user_id); ?>
								</h3>
								<h3>
									<?php the_field ('pf_email', 'user_'.$user_id); ?>
								</h3>
								<h3>
									<?php the_field ('pf_address', 'user_'.$user_id); ?>
								</h3>
							</div>
							<div class="col-md-6">
								<h3>
									<?php the_field ('pf_last_name', 'user_'.$user_id); ?>
								</h3>
								<h3>
									<?php the_field ('pf_phone_number', 'user_'.$user_id); ?>
								</h3>
								<h3>
									<?php the_field ('pf_user_url', 'user_'.$user_id); ?>
								</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>
							<?php the_field ('pf_bio', 'user_'.$user_id); ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<h2>Languages</h2>
								<ul>
									<?php if(have_rows('pf_language_list','user_'.$user_id)):?>
										<?php while(have_rows('pf_language_list', 'user_'.$user_id)): the_row(); ?>
										<li class="list-item"> <?php the_sub_field ('language', 'user_'.$user_id); ?></li>
									<?php endwhile;?>
								<?php endif;?>
								</ul>
							</div>
							<div class="col-md-4">
								<h2>Services</h2>
								<ul>
									<?php if(have_rows('pf_service_list','user_'.$user_id)):?>
										<?php while(have_rows('pf_service_list', 'user_'.$user_id)): the_row(); ?>
										<li class="list-item"> <?php the_sub_field ('service', 'user_'.$user_id); ?></li>
									<?php endwhile;?>
								<?php endif;?>
								</ul>
							</div>
							<div class="col-md-4">
								<h2>Amenities</h2>
								<ul>
									<?php if(have_rows('pf_amenity_list','user_'.$user_id)):?>
										<?php while(have_rows('pf_amenity_list', 'user_'.$user_id)): the_row(); ?>
										<li class="list-item"> <?php the_sub_field ('amenity', 'user_'.$user_id); ?></li>
									<?php endwhile;?>
								<?php endif;?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h2>Location</h2>
						<address>
							 <?php $map_location = get_field ('pf_location', 'user_'.$user_id); ?>
							<div class="acf-map" data-zoom="16">
								<div class="marker" data-lat="<?php echo esc_attr($map_location['lat']); ?>" data-lng="<?php echo esc_attr($map_location['lng']); ?>"></div>
							</div>
						</address>
					</div>
				</div>
			</div>
			  
			</main>

			<?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
