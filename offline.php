<?php defined( '_JEXEC' ) or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// load sheets and scripts
$doc->addStyleSheet($tpath.'/css/offline.css'); 

// load css
//JHtml::_('stylesheet', 'normalize.css', array('version' => 'auto', 'relative' => true));
//JHtml::_('stylesheet', 'offline.css', array('version' => 'auto', 'relative' => true));

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
  <!-- Bootstrap (CDN - INICIO) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <!-- Bootstrap (CDN - FIM) -->
	
</head>

<body>
    <div id="frame" class="card">
    <?php if ($app->getCfg('offline_image')) : ?>
      <img id="logo" src="<?php echo $app->getCfg('offline_image'); ?>" alt="<?php echo $app->getCfg('sitename'); ?>" />
    <?php else: ?>
    <h1 class="h4 font-weight-bold">
      <?php echo htmlspecialchars($app->getCfg('sitename')); ?>
    </h1>
    <?php endif; ?>

    <?php if ($app->getCfg('display_offline_message', 1) == 1 && str_replace(' ', '', $app->getCfg('offline_message')) != ''): ?>
		<p class="text-center"><?php echo $app->getCfg('offline_message'); ?></p>
    <?php elseif ($app->getCfg('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != ''): ?>
		<p class="text-center"><?php echo JText::_('JOFFLINE_MESSAGE'); ?></p>
    <?php endif; ?>
    <jdoc:include type="message" />
    <form action="<?php echo JRoute::_('index.php', true); ?>" method="post" name="login" id="form-login">
      <fieldset class="input">
        <p id="form-login-username">
          <input type="text" name="username" id="username" class="inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" size="18" placeholder="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" />
        </p>
        <p id="form-login-password">
          <input type="password" name="password" id="password" class="inputbox" alt="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" size="18" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" />
        </p>
        <p id="custom-control custom-checkbox">
          <input class="custom-control-input" type="checkbox" name="remember" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME'); ?>" id="remember" />
          <label class="custom-control-label" for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME'); ?></label>
        </p>
        <p id="form-login-submit">
          <input type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" value="<?php echo JText::_('JLOGIN'); ?>" />
        </p>
      </fieldset>
      <input type="hidden" name="option" value="com_users" />
      <input type="hidden" name="task" value="user.login" />
      <input type="hidden" name="return" value="<?php echo base64_encode(JURI::base()); ?>" />
      <?php echo JHTML::_( 'form.token' ); ?>
    </form>

  </div>
  <footer>
    <p class="text-center align-middle"><a id="developer-link" href="https://startproj.com/">Desenvolvido por <img src="<?php echo $tpath; ?>/images/dev-brand-inv.png" class="d-inline"></a></p>
  </footer>

</body>

</html>
