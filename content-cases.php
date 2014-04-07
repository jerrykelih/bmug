<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <!-- NAME -->
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
      <i class="fa-globe"></i>
      <!-- THUMB -->
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

      <!-- WEBSITE LINK -->
      <?php echo $case_website = types_render_field("website-case", array("output"=>"html","target"=>"blank")); ?> 

      <!-- DESCRIPTION -->
      <?php the_content(); ?>
      <?php echo $event_website = types_render_field("event-case", array("output"=>"html", "title" => "This case was presentent on this event")); ?>

      
       
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
