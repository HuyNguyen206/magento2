<?php

namespace Mastering\SampleModule\Api\Data;

interface ItemInterface
{

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getDescription(): string;

}
