<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
<<<<<<< HEAD
 * to license@magento.com so we can send you a copy immediately.
=======
 * to license@magentocommerce.com so we can send you a copy immediately.
>>>>>>> origin/master
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
<<<<<<< HEAD
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Varien
 * @package     Varien_Pear
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
=======
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Varien
 * @package    Varien_Pear
 * @copyright  Copyright (c) 2010 Magento Inc. (http://www.magentocommerce.com)
>>>>>>> origin/master
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Pear Registry
 *
 * @category   Varien
 * @package    Varien_Pear
 * @author      Magento Core Team <core@magentocommerce.com>
 */

class Varien_Pear_Registry extends PEAR_Registry
{
    function _initializeDepDB()
    {
        if (!isset($this->_dependencyDB)) {
            static $initializing = false;
            if (!$initializing) {
                $initializing = true;
                if (!$this->_config) { // never used?
                    if (OS_WINDOWS) {
                        $file = 'pear.ini';
                    } else {
                        $file = '.pearrc';
                    }
                    $this->_config = &new PEAR_Config($this->statedir . DIRECTORY_SEPARATOR .
                        $file, '-'); // NO SYSTEM INI FILE
                    $this->_config->setRegistry($this);
                    $this->_config->set('php_dir', $this->install_dir);
                }
                $this->_dependencyDB = &PEAR_DependencyDB::singleton($this->_config);
                if (PEAR::isError($this->_dependencyDB)) {
                    // attempt to recover by removing the dep db
                    if (file_exists($this->_config->get('php_dir', null, 'pear.php.net') .
                        DIRECTORY_SEPARATOR . '.depdb')) {
                        @unlink($this->_config->get('php_dir', null, 'pear.php.net') .
                            DIRECTORY_SEPARATOR . '.depdb');
                    }
                    $this->_dependencyDB = &PEAR_DependencyDB::singleton($this->_config);
                    if (PEAR::isError($this->_dependencyDB)) {
                        echo $this->_dependencyDB->getMessage();
                        echo 'Unrecoverable error';
                        exit(1);
                    }
                }
                $initializing = false;
            }
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/master
