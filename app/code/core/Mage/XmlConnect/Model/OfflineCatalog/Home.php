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
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_XmlConnect
<<<<<<< HEAD
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
=======
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
>>>>>>> origin/master
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Xmlconnect offline catalog home model
 *
 * @category    Mage
 * @package     Mage_XmlConnect
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_XmlConnect_Model_OfflineCatalog_Home extends Mage_XmlConnect_Model_OfflineCatalog_Abstract
{
    /**
     * Home url
     */
    const HOME_URL = 'xmlconnect/index/index/';

    /**
     * Return home block
     *
     * @param Mage_XmlConnect_Helper_OfflineCatalog $exportHelper
     * @return Mage_Core_Block_Abstract
     */
    public function getLayoutBlock($exportHelper)
    {
        return $exportHelper->getBlock('xmlconnect.home');
    }

    /**
     * Return home url
     *
     * @return string
     */
    protected function _getActionUrl()
    {
        return Mage::getBaseUrl() . self::HOME_URL;
    }
}
