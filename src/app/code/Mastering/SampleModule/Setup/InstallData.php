<?php

namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData
 * @package Magento\TestSetupDeclarationModule3\Setup
 */
class InstallData implements InstallDataInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $adapter = $setup->getConnection();
        $setup->startSetup();
        $adapter->insert($setup->getTable('mastering_sample_item'),
            ['name' => 'Item 1']);

        $adapter->insert($setup->getTable('mastering_sample_item'),
            ['name' => 'Item 2']);
        $setup->endSetup();
    }
}
