<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $body_classes; ?>"<?php print drupal_attributes($attr)?>>

  <div class="header">
    <div class="header-inner container-12">

      <?php if ($site_logo): ?>
        <div id="logo" class="logo"><?php print $site_logo ?></div>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <div id="site-slogan" class="site-slogan"><?php print $site_slogan ?></div>
      <?php endif; ?>

      <?php if ($header): ?>
        <?php print $header; ?>
      <?php endif; ?>
    </div>
  </div>

  <div id="page" class="container-12">
    <div class="page-inner">

      <?php if ($left ): ?>
        <div id="left" class="grid-4 region">
          <?php print $left; ?>
        </div>
      <?php endif ?>

      <div id="main" class="alpha omega grid-8">
        
        <?php print $messages; ?>
        <?php print $help; ?>
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>

        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print $tabs; ?>
          </div>
        <?php endif; ?>

        <?php if ($content_top): ?>
          <div id="content-top" class="region"><?php print $content_top ?></div>
        <?php endif; ?>
        <div id="content" class=""><?php print $content ?></div>
        <?php if ($content_bottom): ?>
          <div id="content-bottom" class="region"><?php print $content_bottom ?></div>
        <?php endif; ?>
      </div>
 
    </div>
  </div>

  <div id="footer">
    <div class="container-12 clear-block">
      <?php print $footer ?>
    </div>
    <p class="footer-message"><?php print $footer_message ?></p>
  </div>
  <?php print $closure ?>
  </body>
</html>