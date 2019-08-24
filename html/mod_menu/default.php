<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>
<?php // The menu class is deprecated. Use nav instead. ?>
<ul class="navbar-nav d-flex <?php echo $class_sfx;?>"<?php
   $tag = '';

   if ($params->get('tag_id') != null)
   {
      $tag = $params->get('tag_id') . '';
      echo ' id="' . $tag . '"';
   }
?>>
    
<?php
foreach ($list as $i => &$item)
{
  $class = 'nav-item ml-3 mr-3 ';
  if ($item->id == $active_id)
  {
    $class .= ' current';
  }

  if (in_array($item->id, $path))
  {
    $class .= ' active';
  }
  elseif ($item->type == 'alias')
  {
    $aliasToId = $item->params->get('aliasoptions');

    if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
    {
      $class .= ' active';
    }
    elseif (in_array($aliasToId, $path))
    {
      $class .= ' alias-parent-active';
    }
  }

  if ($item->type == 'separator')
  {
    $class .= ' divider';
  }

  if ($item->deeper)
  {
    $class .= ' ';
  }

  if ($item->parent)
  {
    $class .= ' dropdown';
  }

  if (!empty($class))
  {
    $class = ' class="align-self-center ' . trim($class) . '"';
  }

  	
  // If has one dropdown in navbar, itens render here!!!!!  	
  if ($item->level != 1)
  {
    // Is the first item on dropdown

    // Render the menu item.
    switch ($item->type) :
    case 'separator':
    case 'url':
    case 'component':
    case 'heading':
    require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
    break;

    default:
    require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
    break;
    endswitch;

    // Is the last item on dropdown
    if ($item->shallower)
    {
      // The next item is shallower.
      echo str_repeat('</div></li>', $item->level_diff);
    }
  }
  // if doesnt have dropdown, items render here.
  else
  {
	echo '<li' . $class . '>';

    // Render the menu item.
    switch ($item->type) :
    case 'separator':
    case 'url':
    case 'component':
    case 'heading':
    require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
    break;

    default:
    require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
    break;
    endswitch;

    if ($item->parent)
      echo '<div class="dropdown-menu bg-dark">';
	else
      echo '</li>';
  }
}
?></ul>

