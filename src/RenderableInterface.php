<?php

namespace Dinh0012\CodeGenerator;

/**
 * Interface RenderableInterface
 * @package Dinh0012\CodeGenerator
 */
interface RenderableInterface
{
    /**
     * @param int $indent
     * @param string $delimiter
     * @return string
     */
    public function render($indent = 0, $delimiter = PHP_EOL);
}
