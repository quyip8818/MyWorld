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
 * XmlConnect success message class
 *
 * @category    Mage
 * @package     Mage_XmlConnect
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_XmlConnect_Model_Simplexml_Message_Success extends Mage_XmlConnect_Model_Simplexml_Message_Abstract
{
    /**
     * Get message xml
     *
     * @return string
     */
    public function getMessage()
    {
        $this->_getXmlObject()->addCustomChild('status', $this->_getMessageStatus());
        if (!$this->_getMessageText()) {
            $this->_setMessageText(Mage::helper('xmlconnect')->__('Message text is missed.'));
        }
        $this->_getXmlObject()->addCustomChild('text', $this->_getMessageText());
        if ($this->_getChildren()) {
            $extDataXmlObj = $this->_getXmlObject()->addCustomChild('extended_data');
            foreach($this->_getChildren() as $key => $val) {
                $extDataXmlObj->addCustomChild('item', $val, array('name' => $key));
            }
        }
        return $this->_getXmlObject()->asNiceXml();
    }
}
