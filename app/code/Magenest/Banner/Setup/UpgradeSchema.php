<?php
namespace Magenest\Banner\Setup;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface {
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $tableName = $setup->getTable('magenest_banner');
            $connection = $setup->getConnection();
            if($connection->tableColumnExists($tableName, "status")){
                $connection->dropColumn($tableName, "status");
            }
        }

        $setup->endSetup();
    }
}
