<?php

class Mamoku_Multistockpoint_Model_Observer
{
    /**
     * Flag to stop observer executing more than once
     *
     * @var static bool
     */
    static protected $_singletonFlag = false;

    /**
     * This method will run when the product is saved from the Magento Admin
     * Use this function to update the product model, process the
     * data or anything you like
     *
     * @param Varien_Event_Observer $observer
     */
    public function saveProductTabData(Varien_Event_Observer $observer)
    {
        if (!self::$_singletonFlag) {
            self::$_singletonFlag = true;

            $product = $observer->getEvent()->getProduct();




            try {
                /**
                 * Perform any actions you want here
                 *
                 */
                $price_qty =  $this->_getRequest()->getPost('price_qty');

                $product->setPrice_qty($price_qty);
                /**
                 * Uncomment the line below to save the product
                 *
                 */
                $product->save();
            }
            catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
    }
    public function initProductTabData(Varien_Event_Observer $observer)
    {

        $product = $observer->getEvent()->getProduct();
        Mage::getSingleton("adminhtml/session")->setProductPriceqty($product->getPrice_qty());
        $product->setPrice(1); // SET YOUR PRICE HERE
        $product->setTaxClassId(0);
    }
    public function editProductTabData(Varien_Event_Observer $observer)
    {

        $product = $observer->getEvent()->getProduct();
        Mage::getSingleton("adminhtml/session")->setProductPriceqty($product->getPrice_qty());

        $product->setPrice(1); // SET YOUR PRICE HERE
        $product->setTaxClassId(0);
    }
    /**
     * Retrieve the product model
     *
     * @return Mage_Catalog_Model_Product $product
     */
    public function getProduct()
    {
        return Mage::registry('product');
    }

    /**
     * Shortcut to getRequest
     *
     */
    protected function _getRequest()
    {
        return Mage::app()->getRequest();
    }
}
