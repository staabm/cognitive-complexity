<?php

declare(strict_types=1);

namespace TomasVotruba\CognitiveComplexity\Tests\Rules\ClassDependencyTreeRule\Source;

class ComplexService
{
    public function someFunction($var)
    {
        try {
            if (true) { // +1
                for ($i = 0; $i < 10; $i++) { // +2 (nesting=1)
                    while (true) { // +3 (nesting=2)
                    }
                }
            }
        } catch (\Exception | \Exception $exception) { // +1
            if (true) { // +2 (nesting=1)
            }
        }
    }
}
