<?php

namespace Magenest\SubTab\Model\Config\Backend;

use Magento\Framework\App\Config\Value;
use Magento\Framework\App\ResourceConnection;

class CountMovie extends Value
{
    protected $resourceConnection;

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\App\Config\ScopeConfigInterface $config,
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        ResourceConnection $resourceConnection,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->resourceConnection = $resourceConnection;
        parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $data);
    }

    public function afterLoad()
    {
        $connection = $this->resourceConnection->getConnection();
        $tableName = $this->resourceConnection->getTableName('magenest_movie');
        if ($connection->isTableExists($tableName)) {
            $recordCount = $connection->fetchOne("SELECT COUNT(*) FROM {$tableName}");
            $this->setValue($recordCount);
        } else {
            $this->setValue(0);
        }
        return parent::afterLoad();
    }
}
