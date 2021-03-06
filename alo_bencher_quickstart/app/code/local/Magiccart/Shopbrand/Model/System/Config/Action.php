<?php
/**
 * Magiccart 
 * @category    Magiccart 
 * @copyright   Copyright (c) 2014 Magiccart (http://www.magiccart.net/) 
 * @license     http://www.magiccart.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2014-03-13 23:15:05
 * @@Modify Date: 2015-07-19 18:47:54
 * @@Function:
 */

class Magiccart_Shopbrand_Model_System_Config_Action
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'cart', 'label'=>Mage::helper('adminhtml')->__('Add to Cart')),
            array('value'=>'compare', 'label'=>Mage::helper('adminhtml')->__('Add to Compare')),
            array('value'=>'wishlist', 'label'=>Mage::helper('adminhtml')->__('Ad to Wishlist')),
            array('value'=>'review', 'label'=>Mage::helper('adminhtml')->__('Review')),
        );
    }

}
