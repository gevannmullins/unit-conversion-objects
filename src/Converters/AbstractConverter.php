<?php
namespace RhinoAfrica\UnitConversionObjects\Converters;

use RhinoAfrica\UnitConversionObjects\Interfaces\ConverterInterface;
use RhinoAfrica\UnitConversionObjects\Units\UnitInterface;

/**
 * An abstract class that implements ConverterInterface, providing a template method convert(...) for conversion and
 * delegating unit-specific conversion steps to child classes.
 */
abstract class AbstractConverter implements ConverterInterface
{
    abstract protected function convertValue(float $value): float;

    public function convert(UnitInterface $sourceUnit, string $targetUnit): UnitInterface
    {
        $value = $this->convertValue($sourceUnit->getValue());
        $targetUnitObject = new $targetUnit();
        $targetUnitObject->setValue($value);
        return $targetUnitObject;
    }
}
