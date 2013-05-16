<?php

########################################################################
# Extension Manager/Repository config file for ext "causal_accounts".
#
# Auto generated 27-09-2012 11:31
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Central Account Management by Causal Sàrl',
	'description' => 'This extension allows TYPO3 administrator accounts to be managed centrally.',
	'category' => 'services',
	'author' => 'Xavier Perseguers',
	'author_company' => 'Causal Sàrl',
	'author_email' => 'xavier@causal.ch',
	'shy' => '',
	'dependencies' => 'openid',
	'conflicts' => '',
	'suggests' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.3.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-6.2.99',
			'openid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:9:"ChangeLog";s:4:"d78d";s:31:"class.tx_causalaccounts_eid.php";s:4:"dff2";s:47:"class.tx_causalaccounts_synchronizationtask.php";s:4:"9334";s:26:"class.ux_tx_openid_sv1.php";s:4:"c382";s:16:"ext_autoload.php";s:4:"238c";s:21:"ext_conf_template.txt";s:4:"e480";s:12:"ext_icon.gif";s:4:"57bc";s:17:"ext_localconf.php";s:4:"49eb";s:14:"doc/manual.sxw";s:4:"9806";}',
);

?>