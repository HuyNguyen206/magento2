<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mastering\SampleModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

/**
 * UpgradeSchema mock class
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.1'))
        $connection = $setup->getConnection()->addColumn(
            $setup->getTable('mastering_sample_item'),
            'description', ['type' => Table::TYPE_TEXT, 'nullable' => true, 'comment' => 'Item description']
        );

        $setup->endSetup();
    }
}
