<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<?php 
/* Used to create a dropdown header to navbar */
?>

<a class="nav-link dropdown-toggle" href="#" id="dropdown-<?php echo $item->id; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php echo $item->title; ?>
</a>