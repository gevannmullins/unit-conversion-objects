<?php
namespace RhinoAfrica\UnitConversionObjects\Converters;

use RhinoAfrica\UnitConversionObjects\Units\Meter;
use RhinoAfrica\UnitConversionObjects\Units\UnitInterface;

/**
 * Conversion Strategy Class for Lenth conversion units, extending AbstractConverter
 */
class LengthConverter extends AbstractConverter
{
    protected function convertValue(float $value): float
    {
        // Conversion logic for length units
        // For simplicity, let's assume 1 meter = 0.001 kilometer
        return $value * 0.001;
    }
}
