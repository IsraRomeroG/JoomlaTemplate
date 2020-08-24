<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$blockPosition = $displayData['params']->get('info_block_position', 0);

?>
	<dl class="article-info muted">
<?php
	if ($displayData['position'] === 'above' && ($blockPosition == 0 || $blockPosition == 2)
				|| $displayData['position'] === 'below' && ($blockPosition == 1)) :
?>
		<dt class="article-info-term">
<?php
		if ($displayData['params']->get('info_block_show_title', 1)) :
?>
			<?php echo JText::_('COM_CONTENT_ARTICLE_INFO'); ?>
<?php
		endif;
?>

		</dt>
<?php
		if ($displayData['params']->get('show_author') && !empty($displayData['item']->author )) :
			echo $this->sublayout('author', $displayData);
		endif;
		if ($displayData['params']->get('show_parent_category') && !empty($displayData['item']->parent_slug)) :
			echo $this->sublayout('parent_category', $displayData);
		endif;
		if ($displayData['params']->get('show_category')) :
			echo $this->sublayout('category', $displayData);
		endif;
		if ($displayData['params']->get('show_associations')) :
			echo $this->sublayout('associations', $displayData);
		endif;
		if ($displayData['params']->get('show_publish_date')) :
			echo $this->sublayout('publish_date', $displayData);
		endif;
	endif;
	if ($displayData['position'] === 'above' && ($blockPosition == 0)
				|| $displayData['position'] === 'below' && ($blockPosition == 1
				|| $blockPosition == 2)) :
		if ($displayData['params']->get('show_create_date')) :
			echo $this->sublayout('create_date', $displayData);
		endif;
		if ($displayData['params']->get('show_modify_date')) : 
			echo $this->sublayout('modify_date', $displayData);
		endif;
		if ($displayData['params']->get('show_hits')) :
			echo $this->sublayout('hits', $displayData);
		endif;
	endif;
?>

	</dl>
