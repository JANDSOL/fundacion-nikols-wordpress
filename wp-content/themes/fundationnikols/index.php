<?php get_header() ?>
  <?php if(have_posts()){ ?>
    <?php while(have_posts()){ the_post(); ?>
      <?php the_content(); ?>
    <?php } ?>
  <?php }; ?>
  <div>
    <h1>
      Test to Child Theme!
    </h1>
  </div>
<?php get_footer() ?>