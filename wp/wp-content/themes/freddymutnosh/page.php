<?php
get_header();
 $content = explode("<!--more-->", $post->post_content);
?>
		<!--/.Start Banner Block-->
		<div class="frontpage-banner-outer">

			<div class="cycle-pager"></div>

		</div>
		<!--/.End Banner Block-->

		<!--/.Begin Content-->
		<div id="content">
			<div class="container-fluid">
				<div class="wrapper">
					<div class="row-fluid">
						<div class="span12 homepage-content">
              <h1><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
            </div>
            
					</div>
          <?php get_template_part('modules', 'ideas'); ?>
          <?php get_template_part('modules', 'brag'); ?>

				</div>
			</div>
		</div>

<?php get_footer(); ?>