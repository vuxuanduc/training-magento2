<?php
namespace Magenest\EavTest\Model\ResourceModel\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magenest\EavTest\Model\Blog as Model;
use Magenest\EavTest\Model\ResourceModel\Blog as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }

}
