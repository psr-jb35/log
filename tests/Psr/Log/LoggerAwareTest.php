<?php

namespace Psr\Log;

use PHPUnit\Framework\TestCase;

class LoggerAwareTest extends TestCase implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    public function testSetLogger()
    {
        $nullLogger = new NullLogeur();
        $this->setLogger($nullLogger);
        $this->assertTrue(true);
    }
}
