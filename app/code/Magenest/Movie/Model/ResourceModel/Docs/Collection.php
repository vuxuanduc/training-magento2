<?php
namespace Magenest\Movie\Model\ResourceModel\Docs;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magenest\Movie\Model\Docs as Model;
use Magenest\Movie\Model\ResourceModel\Docs as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
