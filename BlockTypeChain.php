<?php

namespace Kibatic\CmsBundle;

use Kibatic\CmsBundle\Form\BlockTypeInterface;

class BlockTypeChain
{
    /**
     * @var BlockTypeInterface[]
     */
    private $blockTypes = [];


    public function addBlockType(BlockTypeInterface $blockType)
    {
        $this->blockTypes[$blockType::getBlockTypeName()] = $blockType;
    }

    public function getBlockType($typeName)
    {
        return $this->blockTypes[$typeName];
    }

    public function getBlockTypes()
    {
        return $this->blockTypes;
    }

    public function getBlockTypeNames()
    {
        $names = [];

        foreach ($this->blockTypes as $blockType) {
            $names[] = $blockType::getBlockTypeName();
        }

        return $names;
    }
}
