<?php

/**
 * @file plugins/blocks/developedBy/DevelopedByBlockPlugin.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DevelopedByBlockPlugin
 * @ingroup plugins_blocks_developedBy
 *
 * @brief Class for "developed by" block plugin
 */



import('lib.pkp.classes.plugins.BlockPlugin');

class DevelopedBymeBlockPlugin extends BlockPlugin {

	/**
	 * Install default settings on system install.
	 * @return string
	 */
	function getInstallSitePluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Install default settings on journal creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('DevelopedByme');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('esta é a edição do plugin que copiei e colei como base');
	}
}


