<?php

namespace Mastering\SampleModule\Cron;

use Mastering\SampleModule\Model\Config;
use Mastering\SampleModule\Model\ItemFactory;

class AddItemCron
{
    public function __construct(private Config $config, private ItemFactory $itemFactory)
    {
    }

    public function execute()
    {
        if ($this->config->isEnabled()) {
            $this->itemFactory->create()->setName('Schedule item')
                ->setDescription('Automatically added by the cron job at' . time())
                ->save();
        }
    }
}
