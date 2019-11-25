<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>
<html lang="<?php echo $this->language; ?>">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <?php /* Scripts using CDN links are storage on logic.php file */ ?>
  <jdoc:include type="head" />
	
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo "/templates/{$this->template}/images/favicon/apple-touch-icon.png?v=2019-1"; ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo "/templates/{$this->template}/images/favicon/favicon-32x32.png?v=2019-1"; ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo "/templates/{$this->template}/images/favicon/favicon-16x16.png?v=2019-1"; ?>">
  <link rel="manifest" href="<?php echo "/templates/{$this->template}/images/favicon/site.webmanifest?v=2019-1"; ?>">
  <link rel="mask-icon" href="<?php echo "/templates/{$this->template}/images/favicon/safari-pinned-tab.svg?v=2019-1"; ?>" color="#103760">
  <link rel="shortcut icon" href="<?php echo "/templates/{$this->template}/images/favicon/favicon.ico?v=2019-1"; ?>">
  <meta name="msapplication-TileColor" content="#103760">
  <meta name="msapplication-TileImage" content="<?php echo "/templates/{$this->template}/images/favicon/mstile-144x144.png?v=2019-1"; ?>">
  <meta name="msapplication-config" content="<?php echo "/templates/{$this->template}/images/favicon/browserconfig.xml?v=2019-1"; ?>">
  <meta name="theme-color" content="#103760">
  <!-- /Favicon -->
</head>
<body class="<?php echo $active->alias . ' ' . $pageclass; ?>">
  <?php include_once 'html/modules/mod_menu.php'; ?>
    
  <main class="">
    <?php
      switch($pageclass)
      {
        case 'home':
          include_once 'html/pages/home.php';
          break;
        default:
          include_once 'html/pages/default.php';
          break;
      }
    ?>
  </main>    
  
  <?php include_once 'html/modules/mod_footer.php'; ?>
    
  <?php $scriptsAtEnd -> render(); ?>
</body>
</html>
