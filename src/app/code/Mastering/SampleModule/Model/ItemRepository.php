<?php

namespace Mastering\SampleModule\Model;

use Mastering\SampleModule\Api\ItemRepositoryInterface;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    public function __construct(private CollectionFactory $collectionFactory)
    {

    }

    #[\Override] public function getList(): array
    {
        return $this->collectionFactory->create()->getItems();
    }
}
