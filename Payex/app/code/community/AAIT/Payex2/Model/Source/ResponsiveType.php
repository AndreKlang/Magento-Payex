<?php

/**
 * PayEx2 Payment
 */
class AAIT_Payex2_Model_Source_ResponsiveType
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'RESPONSIVE',
                'label' => Mage::helper('payex2')->__('RESPONSIVE')
            ),
            array(
                'value' => 'USECSS',
                'label' => Mage::helper('payex2')->__('USECSS')
            )
        );
    }
}