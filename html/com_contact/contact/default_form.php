<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

?>
<div>
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post">
<?php 
		foreach ($this->form->getFieldsets() as $fieldset) :
			if ($fieldset->name === 'captcha' && !$this->captchaEnabled) :
				continue;
			endif;
			$fields = $this->form->getFieldset($fieldset->name);
			if (count($fields)) :
					foreach ($fields as $field) :
						echo $field->renderField();
						echo "\n\n";
					endforeach;
			endif;
		endforeach;
?>
		<div class="control-group">
			<div class="controls">
				<button class="btn btn-primary validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
				<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
				<?php echo JHtml::_('form.token'); ?>
			</div>
		</div>
	</form>
</div>
