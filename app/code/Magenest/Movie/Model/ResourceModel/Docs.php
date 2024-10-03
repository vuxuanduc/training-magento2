<?php
namespace Magenest\Movie\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Docs extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_docs', 'docs_id');
    }
}
