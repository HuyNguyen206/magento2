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

/**
 * InstallSchema mock class
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $table = $setup->getConnection()->newTable(
            $setup->getTable('mastering_sample_item')
        )
            ->addColumn('id', Table::TYPE_INTEGER, null, ['identity' => true, 'nullable' => false, 'primary' => true])
            ->addColumn('name', Table::TYPE_TEXT, 255, ['nullable' => false])
            ->addIndex($setup->getIdxName('mastering_sample_item',['name']) , ['name'])
            ->setComment('Sample item');
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
