<?php

class Deph_Peel_Helper_Data extends Mage_Payment_Helper_Data
{
    public function baseurl()
    {
    	return Mage::getBaseUrl();
    }

    public function getSmallImage()
    {
    	if(!$tmp = Mage::getStoreConfig('peel/settings/smallImage')){
		$tmp = 'default/pageear_s.jpg';
    	}
    	return Mage::getBaseUrl('media')."pageear/".$tmp;
    }
    
    public function getBigImage()
    {
    	if(!$tmp = Mage::getStoreConfig('peel/settings/bigImage')){
		$tmp = 'default/pageear_b.jpg';
    	}
    	return Mage::getBaseUrl('media')."pageear/".$tmp;
    }
}
