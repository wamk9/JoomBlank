<nav class="navbar sticky-top align-items-start navbar-dark navbar-expand-xl navbar-dark bg-theme">
  <?php 
    /* A tag <span> esta ali apenas para deixar o toggler na direita */ 
    echo "<span></span>";
  ?>
  
  <a class="navbar-brand" href="/">
    <img src="<?php echo "/templates/{$this->template}/images/default/brand.png";?>" class="d-inline-block align-top" alt="">
    <?php echo JFactory::getConfig()->get('sitename'); ?>
   </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  <div class="collapse navbar-collapse" id="navbarText" style="height: 100%;">
  	<ul class="nav navbar-nav flex-row justify-content-lg-right justify-content-center flex-nowrap d-flex">
        <!-- use to right menu -->
    </ul>
      
    <ul class="navbar-nav w-100 justify-content-center">
      <!-- use to center menu -->
    </ul>
  
    <ul class="nav navbar-nav flex-row justify-content-lg-left justify-content-center flex-nowrap d-flex">
        <!-- use to left menu -->
        <jdoc:include type="modules" name="navbar" style="none" />
    </ul>
  </div>
</nav>