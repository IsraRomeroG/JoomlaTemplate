<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
		<dd class="category-name">
			<?php 
			$title = $this->escape($displayData['item']->category_title);
			if ($displayData['params']->get('link_category') && $displayData['item']->catslug) :
				$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($displayData['item']->catslug)) . '" itemprop="genre">' . $title . '</a>';
				echo JText::sprintf('COM_CONTENT_CATEGORY', $url);
			else :
				echo JText::sprintf('COM_CONTENT_CATEGORY', '<span itemprop="genre">' . $title . '</span>');
			endif;
			?>

		</dd>