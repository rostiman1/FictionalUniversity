<?php 
get_header();
pageBanner(array(
  'title' => 'ALL Events',
  'subtitle' => 'See what is going on in our world.'
));
?>
    <div class="container container--narrow page-section">
      <?php
      while(have_posts()){
        the_post(); 
        get_template_part('template-parts/content-event');
      }
      echo paginate_links(); 
      ?>
      <hr class="section-break">
      <p>Looking for a past event? <a href ="<?php echo site_url('/past-events'); ?>">Check it out here</a>.</p>
<?php get_footer();
?>