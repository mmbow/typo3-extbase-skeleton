<?php
if(!defined('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
    $_EXTKEY,
    'typo3_extbase_skeleton',
    array(
        'Static' => ''
    ),
    array()
);