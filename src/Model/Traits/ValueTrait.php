<?php

namespace Dinh0012\CodeGenerator\Model\Traits;

/**
 * Trait PHPValueTrait
 * @package Dinh0012\CodeGenerator\Model\Traits
 */
trait ValueTrait
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    protected function renderValue()
    {
        return $this->renderTyped($this->value);
    }

    /**
     * @param mixed $value
     * @return string|null
     */
    protected function renderTyped($value)
    {
        $type = gettype($value);

        switch ($type) {
            case 'boolean':
                $value = $value ? 'true' : 'false';

                break;
            case 'int':
                // do nothing

                break;
            case 'string':
                $value = sprintf('\'%s\'', addslashes($value));

                break;
            case 'array':
                $parts = [];
                foreach ($value as $item) {
                    $parts[] = $this->renderTyped($item);
                }
                $value = '[' . "\n\t\t\t";
                $value .= implode(",\n\t\t", $parts);
                $value .= ",\n\t" . ']';

                break;
            default:
                $value = null; // TODO: how to render null explicitly?
        }

        return $value;
    }
}
