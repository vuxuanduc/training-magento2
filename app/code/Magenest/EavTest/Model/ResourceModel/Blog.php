<?php
namespace Magenest\EavTest\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Blog extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_blog', 'blog_id');
    }
}
