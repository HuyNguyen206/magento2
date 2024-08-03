<?php

namespace Mastering\SampleModule\UI;

use Magento\Framework\App\Config\ScopeCodeResolver;
use Magento\Framework\App\ObjectManager;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;
use Magento\Config\Model\Config\Reader\Source\Deployed\SettingChecker;
use Magento\Framework\App\RequestInterface;

class DataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct(
            $name,
            $primaryFieldName,
            $requestFieldName,
            $meta,
            $data
        );

        $this->collection = $collectionFactory->create();
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $result = [];
        foreach ($this->collection->getItems() as $item )
        {
            $result[$item->getId()]['general'] = $item->getData();
        }

        return $result;
    }
}

