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
 * @package     Mage_Adminhtml
<<<<<<< HEAD
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
=======
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
>>>>>>> origin/master
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml Tax Class Edit
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author      Magento Core Team <core@magentocommerce.com>
 */

class Mage_Adminhtml_Block_Tax_Class_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId    = 'id';
        $this->_controller  = 'tax_class';

        parent::__construct();

        $this->_updateButton('save', 'label', Mage::helper('tax')->__('Save Class'));
        $this->_updateButton('delete', 'label', Mage::helper('tax')->__('Delete Class'));
    }

    public function getHeaderText()
    {
        if (Mage::registry('tax_class')->getId()) {
            return Mage::helper('tax')->__("Edit Class '%s'", $this->escapeHtml(Mage::registry('tax_class')->getClassName()));
        }
        else {
            return Mage::helper('tax')->__('New Class');
        }
    }

    public function setClassType($classType)
    {
        $this->getChild('form')->setClassType($classType);
        return $this;
    }
}
