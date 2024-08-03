<?php

namespace Mastering\SampleModule\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_ENABLED = 'mastering/general/enabled';
    const XML_PATH_CRON_EXPRESSION = 'mastering/general/cron_expression';

    public function __construct(private ScopeConfigInterface $config)
    {
    }

    public function isEnabled()
    {
        $this->config->getValue(self::XML_PATH_ENABLED);
    }
}
