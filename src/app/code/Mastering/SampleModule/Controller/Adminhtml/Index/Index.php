<?php

namespace Mastering\SampleModule\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    const ADMIN_RESOURCE = 'Mastering_SampleModule::mastering';

    #[\Override] public function execute()
    {
//        /** @var Raw $result */
//        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//        $result->setContents('Hello Admin');
//
//        return $result;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
