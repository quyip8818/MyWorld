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
 * @package     Mage_ConfigurableSwatches
<<<<<<< HEAD
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
=======
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
>>>>>>> origin/master
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Mage_ConfigurableSwatches_Block_Catalog_Media_Js_List
    extends Mage_ConfigurableSwatches_Block_Catalog_Media_Js_Abstract
{
    /**
     * Get target product IDs from product collection
     * which was set on block
     *
     * @return array
     */
    public function getProducts() {
        return $this->getProductCollection();
    }

    /**
     * Default to small image type
     *
     * @return string
     */
    public function getImageType() {
        $type = parent::getImageType();

        if (empty($type)) {
            $type = Mage_ConfigurableSwatches_Helper_Productimg::MEDIA_IMAGE_TYPE_SMALL;
        }

        return $type;
    }

    /**
     * instruct small_image image type to be loaded
     *
     * @return array
     */
    protected function _getImageSizes() {
        return array('small_image');
    }
}
