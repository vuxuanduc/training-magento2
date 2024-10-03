<?php
namespace Magenest\Banner\Model\ResourceModel\Banner;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magenest\Banner\Model\Banner as Model;
use Magenest\Banner\Model\ResourceModel\Banner as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
