<?php

class Ig_ShippingTracking_Block_Shipping_Tracking_Popup extends Mage_Shipping_Block_Tracking_Popup
{
    public function getTrackingInfo()
    {
        $_results = parent::getTrackingInfo();

        //$order = Mage::getModel('sales/order')->load(Mage::registry('current_shipping_info')->getOrderId());

        if (Mage::helper('shippingtracking')->moduleEnabled()) {
            foreach($_results as $shipid => $_result) {
                foreach($_result as $key => $track) {
                    if (!is_object($track)) {
                        continue;
                    }
                }
            }
        }

        return $_results;
    }

    protected function _getDecryptedConfig($key)
    {
        if (empty($key)) {
            return false;
        }
        return Mage::helper('core')->decrypt(
            Mage::getStoreConfig('shippingtracking/'.$key));
    }

    protected function getRajaongkirUrl() 
    {
        return Mage::getStoreConfig('shippingtracking/rajaongkir_api/access_url');
    }
}
