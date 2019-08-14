<?php
class Deph_Peel_Model_System_Config_Source_Direction
{
	public function toOptionArray()
	{
		return array(
				array('value' => 'rt', 'label'=>Mage::helper('peel')->__('Right Side')),
				array('value' => 'lt', 'label'=>Mage::helper('peel')->__('Left Side')),
		);
	}
}