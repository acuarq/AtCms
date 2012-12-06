<?php

namespace AtCms\View\Helper;

use Zend\View\Helper\AbstractHelper;
use AtCms\Mapper\Block as BlockMapper;

class Block extends AbstractHelper
{
    protected $blockMapper;

    /**
     * @param int|string $identifier
     * @return string
     */
    public function __invoke($identifier)
    {
        $block = $this->getBlockMapper()->find($identifier);
        if ($block) {
            return $block->getContent();
        }

        return '';
    }

    /**
     * @param \AtCms\Mapper\Block $blockMapper
     */
    public function setBlockMapper(BlockMapper $blockMapper)
    {
        $this->blockMapper = $blockMapper;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlockMapper()
    {
        return $this->blockMapper;
    }
}