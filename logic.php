<?php defined( '_JEXEC' ) or die;

//class
class ScriptAtEnd
{
  public $scripts;

  public function addScript($script) { $this -> scripts .= '<script src="'.$script.'" type="text/javascript"></script>'; }
  
  public function render() { echo $this -> scripts; }
}   

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;
$scriptsAtEnd = new ScriptAtEnd();

// generator tag
$this->setGenerator(null);

// functions



function CreateOpenGraphFacebook()
{
  $app = JFactory::getApplication();
  $doc = JFactory::getDocument();
  $menu = $app->getMenu();
  $active = $app->getMenu()->getActive();
  $params = $app->getParams();
  
  
  $doc->addCustomTag('<!-- opengraph-facebook -->');
  $doc->addCustomTag('<meta property="og:title" content="'. $doc->getTitle() .'"/>');
  $doc->addCustomTag('<meta property="og:type" content="website"/>');
  $doc->addCustomTag('<meta property="og:description" content="'. $params -> get('menu-meta_description') .'"/>');
  
  if(isset($active -> img))
  {
    if ($active -> img == " " || empty($active -> img)){
      $doc->addCustomTag('<meta property="og:image" content="'. $doc->base.'templates/'.$doc->template.'/images/default-image.jpg'.'"/>');
    }
    else{
      $doc->addCustomTag('<meta property="og:image" content="'. $active -> img .'"/>');
    }
  }
  $doc->addCustomTag('<meta property="og:url" content="'.$doc->base.$doc->link.'"/>');
  $doc->addCustomTag('<meta property="og:site_name" content="Website Name"/>');
  $doc->addCustomTag('<meta property="og:fb:admins" content="website-facebook-link"/>');

  $doc->addCustomTag('<!-- ./opengraph-facebook -->');
}


// unset
unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery.min.js']);
unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery-migrate.min.js']);
unset($doc->_scripts[$this->baseurl .'/media/system/js/caption.js']);
if (isset($doc->_script['text/javascript']))
{
  $doc->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\'\,\s*function\(\)\s*\{\s*new\s*JCaption\(\'img.caption\'\);\s*}\s*\);\s*%', '', $doc->_script['text/javascript']);
  $doc->_script['text/javascript'] = preg_replace("%\s*jQuery\(document\)\.ready\(function\(\)\{\s*jQuery\('\.hasTooltip'\)\.tooltip\(\{\"html\":\s*true,\"container\":\s*\"body\"\}\);\s*\}\);\s*%", '', $doc->_script['text/javascript']);
  if (empty($doc->_script['text/javascript']))
  {
    unset($doc->_script['text/javascript']);
  }
}

/* jQuery 3.4.1 */
$doc->addScript('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js');

/* Bootstrap 4.3.1 */
$doc->addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css');
$scriptsAtEnd -> addScript('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js');
//$doc->addScript('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.js');

/* popper.js (for tooltip) */
/* $doc->addScript('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js'); */

/* Font Awesome 5.11.2 */
$doc->addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
//$doc->addScript('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js');



/* lazyload.js (https://github.com/verlok/lazyload) 
 * 
 * Used to load images/videos/iframes only when element at on screen
 */
$scriptsAtEnd -> addScript('https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/12.0.3/lazyload.min.js');

//print_r($doc->_scripts);

/* Template Scripts
 * 
 */
$scriptsAtEnd -> addScript("{$tpath}/js/script.js");
$scriptsAtEnd -> addScript("{$tpath}/js/images.js");

/* Template Stylesheet (Converted on Less/Scss) */
$doc->addStyleSheet("{$tpath}/css/template.css");


CreateOpenGraphFacebook();