<?php

class Ig_ShippingTracking_Helper_Data extends Ig_ShippingTracking_Helper_Main
{
	protected $_trackingInfo = array();

	public function moduleEnabled($store = null)
    {
       return (bool)Mage::getStoreConfig('shippingtracking/general/enabled', $store);
    }

	public function getShippingTrackingUrl()
	{
		return Mage::getUrl('shippingtracking');
	}

	public function rajaongkirEnable($store = null)
	{
		return (bool)Mage::getStoreConfig('shippingtracking/rajaongkir_api/enabled', $store);
	}
}
	 