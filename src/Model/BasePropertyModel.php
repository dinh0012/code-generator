<?php

namespace Dinh0012\CodeGenerator\Model;

use Dinh0012\CodeGenerator\RenderableModel;

/**
 * Class BaseProperty
 * @package Dinh0012\CodeGenerator\Model
 */
abstract class BasePropertyModel extends RenderableModel
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
