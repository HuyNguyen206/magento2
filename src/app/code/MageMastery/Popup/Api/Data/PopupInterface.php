<?php

namespace MageMastery\Popup\Api\Data;

interface PopupInterface
{
    public function getPopupId(): int;
    public function setPopupId(int $popupId);

    public function getName(): string;
    public function setName(string $name);

    public function getContent(): string;
    public function setContent(string $content);

    public function getCreationTime(): string;
    public function setCreationTime(string $creationTime);

    public function getUpdateTime(): string;
    public function setUpdateTime(string $updateTime);

    public function getIsActive(): bool;
    public function setIsActive(bool $isActive);

    public function getIsTimeout(): bool;
    public function setIsTimeout(bool $isActive);
}
