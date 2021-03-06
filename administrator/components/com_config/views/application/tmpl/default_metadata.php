<?php
/**
 * @version		$Id: default_metadata.php 22338 2011-11-04 17:24:53Z github_bot $
 * @package		Joomla.Administrator
 * @subpackage	com_config
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;
?>
<div class="width-100">
<fieldset class="adminform long">
	<legend><?php echo JText::_('COM_CONFIG_METADATA_SETTINGS'); ?></legend>
		<ul class="adminformlist">
			<?php
			foreach ($this->form->getFieldset('metadata') as $field):
			?>
					<li><?php echo $field->label; ?>
					<?php echo $field->input; ?></li>
			<?php
			endforeach;
			?>
			</ul>
</fieldset>
</div>
