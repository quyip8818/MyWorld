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
 * @package     Mage_GiftMessage
<<<<<<< HEAD
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
=======
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
>>>>>>> origin/master
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Gift message adminhtml sales order create items
 *
 * @category   Mage
 * @package    Mage_GiftMessage
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Mage_GiftMessage_Block_Adminhtml_Sales_Order_Create_Items extends Mage_Adminhtml_Block_Template
{
    /**
     * Get order item
     *
     * @return Mage_Sales_Model_Quote_Item
     */
    public function getItem()
    {
        return $this->getParentBlock()->getItem();
    }

    /**
     * Indicates that block can display gift messages form
     *
     * @return boolean
     */
    public function canDisplayGiftMessage()
    {
        $item = $this->getItem();
        if (!$item) {
            return false;
        }
        return $this->helper('giftmessage/message')->getIsMessagesAvailable(
            'item', $item, $item->getStoreId()
        );
    }

   /**
     * Return form html
     *
     * @return string
     */
    public function getFormHtml()
    {
        return $this->getLayout()->createBlock('adminhtml/sales_order_create_giftmessage_form')
            ->setEntity($this->getItem())
            ->setEntityType('item')
            ->toHtml();
    }

    /**
     * Retrieve gift message for item
     *
     * @return string
     */
    public function getMessageText()
    {
        if ($this->getItem()->getGiftMessageId()) {
            $model = $this->helper('giftmessage/message')->getGiftMessage($this->getItem()->getGiftMessageId());
            return $this->escapeHtml($model->getMessage());
        }
        return '';
    }
}
