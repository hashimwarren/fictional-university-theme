<?php

get_header();

while(have_posts()){
    the_post(); ?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>DON'T FORGET TO REPLACE ME LATER</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">

<?php
  $theParent = wp_get_post_parent_id(get_the_ID());
  if ($theParent) { ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent) ?> "><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent) ?></a> <span class="metabox__main"><?php the_title() ?></span></p>
    </div>
  <?php
 }

?>
  <?php
  $testArray = get_pages(array(
    'child_of' => get_the_ID() //if it's not a child page, "0" or "false"
  ));

  if($theParent or $testArray) { //if it's a child or parent page, display following html
    ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent) ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">

        <?php
        if($theParent){
          $findChildrenOf = $theParent;
        } else {
          $findChildrenOf = get_the_ID();
        }
        wp_list_pages(array(
          'title_li' => NULL,
          'child_of' => $findChildrenOf,
          'sort_menu' => 'menu_order'

        ));

        ?>
      </ul>
    </div>
      <?php } ?>

    <div class="generic-content">

    <?php
/*
    $listChildEvents = toolset_get_related_posts(
      get_the_ID(), // get id
      'page-events', //relationship slug
      'parent', // query by role name
      100, //limit returned results
      0, // offset
      array(), // additional arguments
      'post_id', // return type
      'child', // role name to return
      null, // null means no ordering
      ASC, // order by
      true, // should we count rows?
      $hanif // variable name for found rows
    );
    echo $hanif;
    echo $listChildEvents;
*/

    $listSingleChildEvent = toolset_get_related_post(
      get_the_ID(),
      'page-events',
      'child'
    );

    echo get_post_meta($listSingleChildEvent, 'post_author', true);
    ?>
      <?php the_content(); ?>
    </div>

  </div>

<?php }

get_footer();

?>