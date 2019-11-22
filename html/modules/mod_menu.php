<div id="navbar-top" class="lazy" data-img-name="navbarTopBg" data-img-type="bg"></div>
<a class="navbar-brand text-center" href="/">
  <span id="brand" class="lazy" data-bg="url(<?php echo "/templates/{$this->template}/images/default/brand.png";?>)"></span>
</a>
<nav class="navbar sticky-top align-items-start navbar-dark navbar-expand-xl navbar-dark bg-theme">
  <?php 
    /* A tag <span> esta ali apenas para deixar o toggler na direita */ 
    echo "<span></span>";
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText" style="height: 100%;">
  	<ul class="navbar-nav w-100 justify-content-center">
      <jdoc:include type="modules" name="navbar" style="none" />
    </ul>
  
    <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap d-flex">
        <!-- use to left text -->
    </ul>
  </div>
</nav>