<?php

namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

/**
 * Class InstallData
 * @package Magento\TestSetupDeclarationModule3\Setup
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $adapter = $setup->getConnection();
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $adapter->update(
                $setup->getTable('mastering_sample_item'),
                ['description' => 'description']);
            $adapter->quoteInto('id = ?', 1);
        }
        $setup->endSetup();
    }
}
