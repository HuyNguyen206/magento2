<?php

namespace Mastering\SampleModule\Controller\Adminhtml\Item;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Mastering\SampleModule\Model\ItemFactory;

class Save extends Action
{

    public function __construct(Context $context, private ItemFactory $itemFactory)
    {
        parent::__construct($context);
    }

    #[\Override] public function execute()
    {
        $this->itemFactory->create()->setData($this->getRequest()->getPostValue()['general'])->save();
        return $this->resultRedirectFactory->create()->setPath('mastering/index/index');
    }
}
