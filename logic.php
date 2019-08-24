<?php defined( '_JEXEC' ) or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// unset
// unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery.min.js']);
// unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery-noconflict.js']);
// unset($doc->_scripts[$this->baseurl .'/media/jui/js/jquery-migrate.min.js']);
// unset($doc->_scripts[$this->baseurl .'/media/system/js/caption.js']);
// if (isset($doc->_script['text/javascript']))
// {
//     $doc->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\'\,\s*function\(\)\s*\{\s*new\s*JCaption\(\'img.caption\'\);\s*}\s*\);\s*%', '', $doc->_script['text/javascript']);
//     $doc->_script['text/javascript'] = preg_replace("%\s*jQuery\(document\)\.ready\(function\(\)\{\s*jQuery\('\.hasTooltip'\)\.tooltip\(\{\"html\":\s*true,\"container\":\s*\"body\"\}\);\s*\}\);\s*%", '', $doc->_script['text/javascript']);
//     if (empty($doc->_script['text/javascript']))
//     {
//         unset($doc->_script['text/javascript']);
//     }
// }

// css
// $doc->addStyleSheet($tpath.'/css/custom.css');
$doc->addStyleSheet($tpath.'/build/style.css');

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
  $doc->addCustomTag('<meta property="og:site_name" content="Luccas Caminski Advocacia"/>');
  $doc->addCustomTag('<meta property="og:fb:admins" content="Luccas-Caminski-Advogado-Capão-da-Canoa-795181010865752"/>');

  $doc->addCustomTag('<!-- ./opengraph-facebook -->');
}

CreateOpenGraphFacebook();