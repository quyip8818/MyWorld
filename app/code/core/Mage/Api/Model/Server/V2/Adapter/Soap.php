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
 * Webservice soap adapter
 *
 * @category   Mage
 * @package    Mage_Api
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Mage_Api_Model_Server_V2_Adapter_Soap extends Mage_Api_Model_Server_Adapter_Soap
{
    /**
     * Run webservice
     *
     * @param Mage_Api_Controller_Action $controller
     * @return Mage_Api_Model_Server_Adapter_Soap
     */
    public function run()
    {
        $apiConfigCharset = Mage::getStoreConfig("api/config/charset");

        if ($this->getController()->getRequest()->getParam('wsdl') !== null) {
            $wsdlConfig = Mage::getModel('api/wsdl_config');
            $wsdlConfig->setHandler($this->getHandler())
                ->init();
            $this->getController()->getResponse()
                ->clearHeaders()
                ->setHeader('Content-Type','text/xml; charset='.$apiConfigCharset)
                ->setBody(
                      preg_replace(
                        '/<\?xml version="([^\"]+)"([^\>]+)>/i',
                        '<?xml version="$1" encoding="'.$apiConfigCharset.'"?>',
                        $wsdlConfig->getWsdlContent()
                    )
                );
        } else {
            try {
                $this->_instantiateServer();

                $content = str_replace(
                    '><',
                    ">\n<",
                    preg_replace(
                        '/<\?xml version="([^\"]+)"([^\>]+)>/i',
                        '<?xml version="$1" encoding="' . $apiConfigCharset . '"?>',
                        $this->_soap->handle()
                    )
                );
                $this->getController()->getResponse()
                    ->clearHeaders()
                    ->setHeader('Content-Type', 'text/xml; charset=' . $apiConfigCharset)
                    ->setHeader('Content-Length', strlen($content), true)
                    ->setBody($content);
            } catch( Zend_Soap_Server_Exception $e ) {
                $this->fault( $e->getCode(), $e->getMessage() );
            } catch( Exception $e ) {
                $this->fault( $e->getCode(), $e->getMessage() );
            }
        }

        return $this;
    }
}
