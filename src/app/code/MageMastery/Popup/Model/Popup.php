<?php

namespace MageMastery\Popup\Model;

use MageMastery\Popup\Api\Data\PopupInterface;
use Magento\Framework\Model\AbstractModel;

class Popup extends AbstractModel implements PopupInterface
{
    const POPUP_ID = 'popup_id';
    const NAME = 'name';
    const CONTENT = 'content';
    const IS_ACTIVE = 'is_active';
    const IS_TIMEOUT = 'is_timeout';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME = 'update_time';

    public function _construct()
    {
        $this->_eventPrefix = 'magemastery_popup';
        $this->_eventObject = 'popup';
        $this->_idFieldName = 'popup_id';
        $this->_init();
    }

    public function getPopupId(): int
    {
        return (int)$this->getData(self::POPUP_ID);
    }

    public function setPopupId(int $popupId)
    {
        $this->setData(self::POPUP_ID, $popupId);
    }

    public function getName(): string
    {
        return $this->getData(self::NAME);
    }

    public function setName(string $name)
    {
        $this->setData(self::NAME, $name);
    }

    public function getContent(): string
    {
        return  $this->getData(self::CONTENT);
    }

    public function setContent(string $content)
    {
        $this->setData(self::CONTENT, $content);
    }

    public function getCreationTime(): string
    {
        return $this->getData(self::CREATION_TIME);
    }

    public function setCreationTime(string $creationTime)
    {
        $this->setData(self::CREATION_TIME, $creationTime);
    }

    public function getUpdateTime(): string
    {
        return $this->getData(self::UPDATE_TIME);
    }

    public function setUpdateTime(string $updateTime)
    {
        $this->setData(self::UPDATE_TIME, $updateTime);
    }

    public function getIsActive(): bool
    {
        return $this->getData(self::IS_ACTIVE);
    }

    public function setIsActive(bool $isActive)
    {
        $this->setData(self::IS_ACTIVE, $isActive);
    }

    public function getIsTimeout(): bool
    {
        return $this->getData(self::IS_TIMEOUT);
    }

    public function setIsTimeout(bool $isActive)
    {
        $this->setData(self::IS_TIMEOUT, $isActive);
    }
}
