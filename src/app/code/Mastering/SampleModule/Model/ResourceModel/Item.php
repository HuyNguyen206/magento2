<?php

namespace Mastering\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{

    #[\Override] protected function _construct()
    {
        $this->_init('mastering_sample_item', 'id');
    }
}
