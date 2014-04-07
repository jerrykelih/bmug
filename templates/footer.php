<footer class="content-info container" role="contentinfo">
  

  <!-- footer -->
     <div id="row">

         <!-- 1/3 -->
         <div class="col-xs-4">
             <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
         </div>
         <!-- /End 1/3 -->
         <!-- 2/3 -->
         <div class="col-xs-4">
             <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
         </div>
         <!-- /End 2/3 -->
         <!-- 3/3 -->
         <div class="col-xs-4">
             <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
         </div>
         <!-- /End 3/3 -->

     </div>
     <!-- /End Footer -->

     <div class="row">
       	<div class="col-xs-12 text-center">
         <?php dynamic_sidebar('sidebar-footer'); ?>
         <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
       	</div>
     </div>


</footer>

<?php wp_footer(); ?>
