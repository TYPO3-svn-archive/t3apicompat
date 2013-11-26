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
class Tx_T3apicompat_Utility
{
    const VERSION_4_5 = 4005000;
    const VERSION_4_6 = 4006000;
    const VERSION_4_7 = 4007000;
    const VERSION_6_0 = 6000000;
    const VERSION_6_1 = 6001000;
    const VERSION_6_2 = 6002000;
    //const VERSION_6_3 = 6003000;
    //const VERSION_7_0 = 7000000;

    /**
     * @var integer
     */
    protected static $_version = null;

    /**
     * Internally creates an interger version from {@link TYPO3_version}
     *
     * @return void
     */
    protected static function _determineVersion()
    {
        if (version_compare(TYPO3_version, '6.0', '<')) {
            self::$_version = t3lib_utility_VersionNumber::convertVersionNumberToInteger(TYPO3_version);
        } else {
            self::$_version = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version);
        }
    }

    /**
     * @param string $versionNumber
     * @return integer
     * @see t3lib_utility_VersionNumber::convertVersionNumberToInteger()
     * @see \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger()
     */
    protected static function _convertVersionNumberToInteger($versionNumber)
    {
        if (self::getVersionAsInteger() < self::VERSION_6_0) {
            return t3lib_utility_VersionNumber::convertVersionNumberToInteger($versionNumber);
        } else {
            return \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger($versionNumber);
        }
    }

    /**
     * Returns the TYPO3 version as integer
     *
     * @return integer
     */
    public static function getVersionAsInteger()
    {
        if (self::$_version === null) {
            self::_determineVersion();
        }
        return self::$_version;
    }

    /**
     * Returns true when the current TYPO3_version is 6.0.0 or greater
     *
     * @return boolean
     */
    public static function isEqualOrAbove_6_0()
    {
        return (self::isBelow_6_0() == false);
    }

    /**
     * Returns true when the current TYPO3_version is 6.2.0 or greater
     *
     * @return boolean
     */
    public static function isEqualOrAbove_6_2()
    {
        return (self::isBelow_6_2() == false);
    }

    /**
     * Returns true when the current TYPO3_version is below 6.0.0
     *
     * @return boolean
     */
    public static function isBelow_6_0()
    {
        return (self::getVersionAsInteger() < self::VERSION_6_0);
    }

    /**
     * Returns true when the current TYPO3_version is below 6.2.0
     *
     * @return boolean
     */
    public static function isBelow_6_2()
    {
        return (self::getVersionAsInteger() < self::VERSION_6_2);
    }

    /**
     * Returns true when the current TYPO3_version is greater than
     * $versionNumber
     *
     * @param string $versionNumber
     * @return boolean
     */
    public static function isGreaterThan($versionNumber)
    {
        return (self::getVersionAsInteger() > self::_convertVersionNumberToInteger($versionNumber));
    }

    /**
     * Returns true when the current TYPO3_version is smaller than
     * $versionNumber
     *
     * @param string $versionNumber
     * @return boolean
     */
    public static function isLessThan($versionNumber)
    {
        return (self::getVersionAsInteger() < self::_convertVersionNumberToInteger($versionNumber));
    }

    /**
     * Returns true, when the branch part of the current TYPO3_version equals
     * the branch part $versionNumber
     *
     * @param string $versionNumber
     * @return boolean
     */
    public static function equalsBranch($versionNumber)
    {
        $versionNumber = self::_convertVersionNumberToInteger($versionNumber);
        $versionNumber -= ($versionNumber % 1000);
        return (self::getVersionAsInteger() == $versionNumber);
    }
}
