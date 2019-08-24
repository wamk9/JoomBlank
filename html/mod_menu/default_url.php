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
$class = $item->anchor_css ? 'class="' . $item->anchor_css . '" ' : 'class="nav-link"';
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';

if ($item->menu_image)
	{
		$item->params->get('menu_text', 1) ?
		$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" /><span class="image-title">' . $item->title . '</span> ' :
		$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
{
	$linktype = $item->title;
}

$flink = $item->flink;
$flink = JFilterOutput::ampReplace(htmlspecialchars($flink));

switch ($item->browserNav)
{
  // Case is Dropdown Children (URL)
  default:
  case 0:
    echo '<a '.$class.' href="'.$flink.'" '.$title.'>'.$linktype.'</a>';
		break;
  // Set to open in a blank page
  case 1:
    echo '<a '.$class.' href="'.$flink.'" '.$title.' target="_blank">'.$linktype.'</a>';
    break;
  // window.open (Popup) 
  case 2:
	$options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,'.$params->get('window_open');
    echo '<a '.$class.' href="'.$flink.'" '.$title.' onclick="window.open(this.href,\'targetWindow\',\''.$options.'\')">'.$linktype.'</a>';
	break;
}
