<section class="content-block examples-block" role="complementary">
  <header class="section-header">
    <hgroup class="section-header-grouped">
      <h2 class="section-title">Examples</h2>
      <span>See our coding portfolio</span>
    </hgroup>
  </header>
  <div class="page-content">

    <div id="example-sort-options" class="sort-navigation">
      <ul class="option-set clearfix" data-option-key="filter">
        <li class="sort-active-li">
          <a href="#filter" data-option-value=".ex-responsive-html">Responsive HTML</a>
          <span></span>
        </li>
        <li>
          <a href="#filter" data-option-value=".ex-email-2">Responsive Email</a>
          <span></span>
        </li>
        <li>
          <a href="#filter" data-option-value=".ex-wordpress">Wordpress</a>
          <span></span>
        </li>
      </ul>
    </div>
    <div class="example-list-block">
      <ul id="example-list">
      <?php   $samples = new WP_Query(array(
			'post_type' => 'samples',
      'order_by' => 'title',
      'order' => 'ASC'
		)); if( $samples->have_posts() ) : while( $samples->have_posts() ) : $samples->the_post();
		?>
        <li class="example-widget element  ex-wordpress ">
          <div class="example-item-image"><?php the_post_thumbnail();?></div>
          <div class="example-list-overlay widget-overlay">
            <div class="widget-overlay-content">
              <div class="widget-overlay-align">
                <h3><?php the_title();?></h3>
                <span><?php the_content();?></span>
                <div class="mainpopup-icon">
                  <a data-example-id="2956" data-example-type="45" href="<?php the_permalink(); ?>" class="widget-icon example-trigger example-external" target="_blank">VIEW / HTML / CSS </a>
                </div>
              </div>
            </div>
          </div>

        </li>
      <?php endwhile; wp_reset_postdata(); endif; ?>
        
      </ul>

      <div class="single-example-block" id="single-example ">
        <div class="single-example-page ">
          <a href="#" class="single-ex-close ">Close</a>
          <div class="single-example-wrap ">

          </div>
        </div>
      </div>

    </div>



  </div>
  <div class="viewmore-wrap ">
    <a href="<?php bloginfo('template_url'); ?>/examples/" class="viewmore ">View More</a>
  </div>
</section>