<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
  <?php
    if ( ! is_active_sidebar( 'sidebar-2' ) ) {
      return;
    }
  ?>
  <div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
  </div>
</div>
