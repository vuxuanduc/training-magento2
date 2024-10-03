<?php
namespace Magenest\HelloWorld\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magenest\HelloWorld\Model\Post as Model;
use Magenest\HelloWorld\Model\ResourceModel\Post as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
