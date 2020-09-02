<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$tparams = $this->item->params;
?>
<div class="contact<?php echo $this->pageclass_sfx; ?>">
<?php 
	if ($tparams->get('show_page_heading')) :
?>
		<h1><?php echo $this->escape($tparams->get('page_heading')); ?></h1>
<?php 
	endif;
	if ($this->contact->name && $tparams->get('show_name')) :
?>
		<h1><?php if ($this->item->published == 0) : ?>
			<span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span><?php endif; ?><?php echo $this->contact->name; ?></h1>
<?php 
	endif;
	$show_contact_category = $tparams->get('show_contact_category');



	echo $this->item->event->afterDisplayTitle;

	if ($tparams->get('show_tags', 1) && !empty($this->item->tags->itemTags)) :
		$this->item->tagLayout = new JLayoutFile('joomla.content.tags');
		echo $this->item->tagLayout->render($this->item->tags->itemTags);
	endif;
	echo $this->item->event->beforeDisplayContent;
	$presentation_style = $tparams->get('presentation_style');
	$accordionStarted = false;
	$tabSetStarted = false;

	if ($tparams->get('show_email_form') && ($this->contact->email_to || $this->contact->user_id)) :
		echo $this->loadTemplate('form');
	endif;

	echo $this->item->event->afterDisplayContent;
?>
</div>
