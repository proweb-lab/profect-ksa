
<header id="navbar" role="banner">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>
 
    </div>
      <?php print render($page['header']); ?>
  </div>
 
</header>

        
<div class="main-container container">
       <?php if (!empty($page['highlighted'])): ?>
        <div class="main-menu"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
        <div class="full-width front-slider content-wrap">
         <?php if (drupal_is_front_page()): ?>
        <?php print views_embed_view('slider', 'front_slider'); ?>
        <?php endif; ?>
        </div>
          <div class="front-text content-wrap">
         <?php if (drupal_is_front_page()): ?>
        <?php print views_embed_view('front_text', 'block'); ?>
        <?php endif; ?>
        
   </div>
<?php print render($title_prefix); ?>
        <?php if (!empty($title)): ?>
        <h1 class="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
        <?php print render($title_suffix); ?>
  <div class="row">
      

    <section<?php print $content_column_class; ?>>
      
      <a id="main-content"></a>
    
      
      
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
