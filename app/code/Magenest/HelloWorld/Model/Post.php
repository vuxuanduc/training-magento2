<?php
namespace Magenest\HelloWorld\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Magenest\HelloWorld\Model\ResourceModel\Post');
    }
}
