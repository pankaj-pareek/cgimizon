<?php
/*
 * @category    Cgimizon
 * @package     Cgimizon_Books
 *
 */
 
namespace Cgimizon\Books\Model\Product\Type;
 
class Book extends \Magento\Catalog\Model\Product\Type\AbstractType
{
    const TYPE_ID = 'book';
 
    /**
     * {@inheritdoc}
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {

    }
}
