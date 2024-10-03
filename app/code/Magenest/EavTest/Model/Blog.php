<?php
namespace Magenest\EavTest\Model;

use Magento\Framework\Model\AbstractModel;

class Blog extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Magenest\EavTest\Model\ResourceModel\Blog');
    }
}
