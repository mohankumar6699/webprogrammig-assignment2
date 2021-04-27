<?php get_header();?>

<section class="page-wrap">
<div class="container">



<h1><?php the_title();?></h1>


			<?php if(has_post_thumbnail()):?>
				<div class="gallery">
					<a href="<?php the_post_thumbnail_url('blog-large');?>">
						<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
					</a>
				</div>
			<?php endif;?>





	<div class="row">


				<div class="col-lg-6">


							<?php get_template_part('includes/section','movies');?>
							<?php wp_link_pages();?>

				</div>


				<div class="col-lg-6">


					


					<ul>
						<li>

							Director: <?php the_field('director');?>

						</li>




						<li>

							Year: <?php the_field('year');?>

						</li>



					</ul>



				</div>



	</div>





</div>
</section>


<?php get_footer();?>
