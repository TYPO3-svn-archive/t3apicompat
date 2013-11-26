<?php
/**
 * Copyright notice
 *
 * (c) 2013 Agentur am Wasser | Maeder & Partner AG
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 * **************************************************************
 *
 * @author     Agentur am Wasser | Maeder & Partner AG <development@agenturamwasser.ch>
 * @copyright  Copyright (c) 2013 Agentur am Wasser | Maeder & Partner AG {@link http://www.agenturamwasser.ch}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @category   TYPO3
 * @package    t3apicompat
 * @version    $Id$
 */


/**
 * TYPO3 api compatibility utility
 *
 * @author     Agentur am Wasser | Maeder & Partner AG <development@agenturamwasser.ch>
 * @package    TYPO3
 * @subpackage t3apicompat
 */
class Tx_T3apicompat_T3api
{
    /**
     * @param string $versionNumber
     * @return integer
     * @see t3lib_utility_VersionNumber::convertVersionNumberToInteger()
     * @see \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger()
     */
    public static function versionNumberUtilityConvertVersionNumberToInteger($versionNumber)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_utility_VersionNumber::convertVersionNumberToInteger($versionNumber);
        } else {
            return \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger($versionNumber);
        }
    }

    /**
     * @param string
     * @param string
     * @param string
     * @return void
     * @see t3lib_extMgm::addStaticFile()
     * @see \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile();
     */
    public static function extensionManagementUtilityAddStaticFile($extKey, $path, $title)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_extMgm::addStaticFile($extKey, $path, $title);
        } else {
            return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, $path, $title);
        }
    }

    /**
     * @param string $table
     * @return void
     * @see t3lib_extMgm::allowTableOnStandardPages()
     * @see \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages()
     */
    public static function extensionManagementUtilityAllowTableOnStandardPages($table)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_extMgm::allowTableOnStandardPages($table);
        } else {
            return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($table);
        }
    }

    /**
     * @param string $content
     * @return void
     * @see t3lib_extMgm::addPageTSConfig()
     * @see \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig()
     */
    public static function extensionManagementUtilityAddPageTSConfig($content)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_extMgm::addPageTSConfig($content);
        } else {
            return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($content);
        }
    }

    /**
     * @param string $table
     * @param array $columnArray
     * @param boolean $addTofeInterface
     * @return void
     * @see t3lib_extMgm::addTCAcolumns()
     * @see \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns()
     */
    public static function extensionManagementUtilityAddTCAcolumns($table, $columnArray, $addTofeInterface = 0)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_extMgm::addTCAcolumns($table, $columnArray, $addTofeInterface);
        } else {
            return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $columnArray, $addTofeInterface);
        }
    }

    /**
     * @param string $piKeyToMatch
     * @param string $value
     * @param string $CTypeToMatch
     * @return void
     * @see t3lib_extMgm::addPiFlexFormValue()
     * @see \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue()
     */
    public static function extensionManagementUtilityAddPiFlexFormValue($piKeyToMatch, $value, $CTypeToMatch = 'list')
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_extMgm::addPiFlexFormValue($piKeyToMatch, $value, $CTypeToMatch);
        } else {
            return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($piKeyToMatch, $value, $CTypeToMatch);
        }
    }

    /**
     * @param string $key
     * @param string $script
     * @return string
     * @see t3lib_extMgm::extPath()
     * @see \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath()
     */
    public static function extensionManagementUtilityExtPath($key, $script = '')
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_extMgm::extPath($key, $script);
        } else {
            return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($key, $script);
        }
    }

    /**
     * @param string $key
     * @return string
     * @see t3lib_extMgm::extRelPath()
     * @see \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath()
     */
    public static function extensionManagementUtilityExtRelPath($key)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_extMgm::extRelPath($key);
        } else {
            return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($key);
        }
    }

    /**
     * @param string $key
     * @param boolean $exitOnError
     * @return boolean
     * @see t3lib_extMgm::isLoaded()
     * @see \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded()
     */
    public static function extensionManagementUtilityIsLoaded($key, $exitOnError = 0)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_extMgm::isLoaded($key, $exitOnError);
        } else {
            return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded($key, ($exitOnError ? true : false));
        }
    }

    /**
     * @param string $className
     * @return object
     * @see t3lib_div::loadTCA()
     * @see \TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA()
     */
    public static function generalUtilityMakeInstance($className)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_div::makeInstance($className);
        } else {
            return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance($className);
        }
    }

    /**
     * Note: omits call to loadTCA() for TYPO3 versions above 6.1
     *
     * @param string $table
     * @return void
     * @see t3lib_div::loadTCA()
     * @see \TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA()
     */
    public static function generalUtilityLoadTCA($table)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_div::loadTCA($table);
        } elseif (Tx_T3apicompat_Utility::getVersionAsInteger() < Tx_T3apicompat_Utility::VERSION_6_1) {
            return \TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA($table);
        }
        return;
    }

    /**
     * @param string $table
     * @param string $type
     * @param string $iconFile
     * @return void
     * @see t3lib_spritemanager::addTcaTypeIcon()
     * @see \TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon()
     */
    public static function spriteManagerAddTcaTypeIcon($table, $type, $iconFile)
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_spritemanager::addTcaTypeIcon($table, $type, $iconFile);
        } else {
            return \TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon($table, $type, $iconFile);
        }
    }

    /**
     * @param array $icons
     * @param string $extKey
     * @return void
     * @see t3lib_spritemanager::addSingleIcons()
     * @see \TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons()
     */
    public static function spriteManagerAddSingleIcons(array $icons, $extKey = '')
    {
        if (Tx_T3apicompat_Utility::isBelow_6_0()) {
            return t3lib_spritemanager::addSingleIcons($icons, $extKey);
        } else {
            return \TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons($icons, $extKey);
        }
    }
}
