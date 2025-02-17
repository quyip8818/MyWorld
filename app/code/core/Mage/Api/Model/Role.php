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
 * @package     Mage_Api
<<<<<<< HEAD
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
=======
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
>>>>>>> origin/master
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Role item model
 *
 * @method Mage_Api_Model_Resource_Role _getResource()
 * @method Mage_Api_Model_Resource_Role getResource()
 * @method int getParentId()
 * @method Mage_Api_Model_Role setParentId(int $value)
 * @method int getTreeLevel()
 * @method Mage_Api_Model_Role setTreeLevel(int $value)
 * @method int getSortOrder()
 * @method Mage_Api_Model_Role setSortOrder(int $value)
 * @method string getRoleType()
 * @method Mage_Api_Model_Role setRoleType(string $value)
 * @method int getUserId()
 * @method Mage_Api_Model_Role setUserId(int $value)
 * @method string getRoleName()
 * @method Mage_Api_Model_Role setRoleName(string $value)
 *
 * @category    Mage
 * @package     Mage_Api
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Api_Model_Role extends Mage_Core_Model_Abstract
{
    /**
     * Initialize resource
     */
    protected function _construct()
    {
        $this->_init('api/role');
    }
}
