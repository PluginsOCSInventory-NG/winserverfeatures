<?php

/**
 * This function is called on installation and is used to create database schema for the plugin
 */
function extension_install_winserverfeatures()
{
    $commonObject = new ExtensionCommon;

    $commonObject -> sqlQuery("CREATE TABLE IF NOT EXISTS `winserverfeatures` (
                              `ID` INT(11) NOT NULL AUTO_INCREMENT,
                              `HARDWARE_ID` INT(11) NOT NULL,
                              `NAME` VARCHAR(255),
                              `DISPLAYNAME` VARCHAR(255),
                              `DESCRIPTION` TEXT,
                              `INSTALLED` VARCHAR(20),
                              `SUBFEATURES` VARCHAR(255),
                              PRIMARY KEY  (`ID`,`HARDWARE_ID`)
                              ) ENGINE=INNODB ;");
}

/**
 * This function is called on removal and is used to destroy database schema for the plugin
 */
function extension_delete_winserverfeatures()
{
    $commonObject = new ExtensionCommon;
    $commonObject -> sqlQuery("DROP TABLE `winserverfeatures`;");
}

/**
 * This function is called on plugin upgrade
 */
function extension_upgrade_winserverfeatures()
{

}
