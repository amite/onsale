<?php
/**
 * On Sale plugin for Craft CMS
 *
 * On Sale Variable
 *
 * @author    Amit Erandole
 * @copyright Copyright (c) 2016 Amit Erandole
 * @link      github.com/amite
 * @package   OnSale
 * @since     0.01
 */

namespace Craft;

class OnSaleVariable
{
    /**
     *   From any Twig template, call it like this:
     *
     *   {{ craft.onSale.salesForProduct(product) }}
     */
    public function getSalesForProduct($product)
    {
      $sales = craft()->commerce_sales->getSalesForProduct($product);
      return $sales;
    }

}