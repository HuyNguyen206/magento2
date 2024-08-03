<?php

namespace Mastering\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;
use Mastering\SampleModule\Api\Data\ItemInterface;

class Item extends AbstractModel implements ItemInterface
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Item::class);
    }

    /**
     * @return string
     */
    #[\Override] public function getName(): string
    {
        return $this->getData('name');
    }

    /**
     * @return string
     */
    #[\Override] public function getDescription(): string
    {
        return $this->getData('description');
    }
}
