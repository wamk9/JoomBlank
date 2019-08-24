<nav class="navbar fixed-top align-items-start navbar-dark navbar-expand-lg navbar-dark bg-luccas">

  <button class="navbar-toggler to-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a style="height: 100%" class="navbar-brand text-center" href="/">
    <img id="brand" src="<?php echo "/templates/{$this->template}/images/brand.png"; ?>">
  </a>
  <div class="collapse navbar-collapse justify-content-center " id="navbarText" style="height: 100%;">
  	<ul class="navbar-nav w-100 justify-content-center">
      <jdoc:include type="modules" name="navbar" style="none" />
    </ul>
  
    <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap d-flex">
        <!-- use to left text -->
    </ul>
  </div>
</nav>