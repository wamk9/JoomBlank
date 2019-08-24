<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>
<html lang="<?php echo $this->language; ?>">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
  <jdoc:include type="head" />
  
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- /bootstrap -->
  
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- /font-awesome -->
  
  <link rel="stylesheet" href="<?php echo "/templates/{$this->template}/css/template.css"; ?>">
    
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
    
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122601793-8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-122601793-8');
  </script>


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
        case 'sobre':
          include_once 'html/pages/sobre.php';
          break;
        case 'localizacao':
          include_once 'html/pages/localizacao.php';
          break;
        case 'contato':
          include_once 'html/pages/contato.php';
          break;
        default:
          include_once 'html/pages/default.php';
          break;
      }
       
    ?>
  </main>
  
  <?php include_once 'html/modules/mod_footer.php'; ?>
    
  <script src="<?php echo "/templates/{$this->template}/js/script.js"; ?>"></script>
</body>

</html>
