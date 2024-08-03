<?php

namespace Mastering\SampleModule\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Mastering\SampleModule\Model\Item;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    public function __construct(
        Context $context,
        private CollectionFactory $collectionFactory,
        array $data = [],

    )
    {
        parent::__construct($context, $data);
    }

    /**
     * @return Item[]
     */
    public function getAllItems(): array
    {
        return $this->collectionFactory->create()->getItems();
    }
}
