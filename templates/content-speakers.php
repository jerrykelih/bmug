<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <!-- NAME -->
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">

      <!-- THUMB -->
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?> 

      <!-- FEEDBACK -->
      <h3>Feedback</h3>  
      <blockquote>
        <?php echo $speakers_feedback = types_render_field("feedback-speaker", array("output"=>"html")); ?>
      </blockquote>
      <?php echo $event_website = types_render_field("event-speaker", array("output"=>"html", "title" => "This speaker was presentent on this event")); ?>

      <!-- BIO -->
      <h3>Bio</h3>
      <?php the_content(); ?>

      <!-- CONTACT -->
      <h3>Contact</h3>  
      <?php echo $speaker_website = types_render_field("website-speaker", array("output"=>"html","title" => "Website","target"=>"blank")); ?>
      <?php echo $speaker_linkedin = types_render_field("linkedin-speaker", array("output"=>"html","title" => "LinkedIn","target"=>"blank")); ?>
      <?php echo $speaker_facebook = types_render_field("facebook-speaker", array("output"=>"html","title" => "Facebook","target"=>"blank")); ?>
      <?php echo $speaker_twitter = types_render_field("twitter-speaker", array("output"=>"html","title" => "Twitter","target"=>"blank")); ?>
      <?php echo $speaker_googleplus = types_render_field("googleplus-speaker", array("output"=>"html","title" => "Google Plus","target"=>"blank")); ?>

    </div>
  
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
