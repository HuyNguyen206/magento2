<?php

namespace Mastering\SampleModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class Logger implements ObserverInterface
{

    public function __construct(private LoggerInterface $logger)
    {
    }

    #[\Override] public function execute(Observer $observer)
    {
        $object = $observer->getEvent()->getObject();
        $this->logger->debug($object->getName() . '-' .$object->getDescription() );
    }
}
