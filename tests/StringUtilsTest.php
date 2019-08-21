<?php

namespace LAG\Component\StringUtils;

use PHPUnit\Framework\TestCase;

class StringUtilsTest extends TestCase
{
    public function testStartWith(): void
    {
        $this->assertTrue(StringUtils::startsWith('Panda', 'P'));
        $this->assertTrue(StringUtils::startsWith('Panda', 'Pa'));
        $this->assertTrue(StringUtils::startsWith('Panda', 'Pan'));
        $this->assertTrue(StringUtils::startsWith('Panda', 'Pand'));
        $this->assertTrue(StringUtils::startsWith('Panda', 'Panda'));

        $this->assertFalse(StringUtils::startsWith('Panda', 'panda'));
        $this->assertFalse(StringUtils::startsWith('Panda', 'pan'));
        $this->assertFalse(StringUtils::startsWith('panda', 'P'));
        $this->assertFalse(StringUtils::startsWith('panda', 'coriandre'));
    }

    public function testEndsWith(): void
    {
        $this->assertTrue(StringUtils::endsWith('Panda', 'a'));
        $this->assertTrue(StringUtils::endsWith('Panda', 'da'));
        $this->assertTrue(StringUtils::endsWith('Panda', 'nda'));
        $this->assertTrue(StringUtils::endsWith('Panda', 'anda'));
        $this->assertTrue(StringUtils::endsWith('Panda', 'Panda'));

        $this->assertFalse(StringUtils::endsWith('Panda', 'panda'));
        $this->assertFalse(StringUtils::endsWith('Panda', 'pan'));
        $this->assertFalse(StringUtils::endsWith('panda', 'A'));
        $this->assertFalse(StringUtils::endsWith('panda', 'coriandre'));
    }

    public function testCamelize(): void
    {
        $this->assertEquals('MyLittlePanda', StringUtils::camelize('my little panda'));
        $this->assertEquals('MyLittlePanda', StringUtils::camelize('My Little Panda'));

        $this->assertEquals('toratoratora', StringUtils::camelize('tora tora tora', true));
    }

    public function testUnderscore(): void
    {
        $this->assertEquals('salsifi-potatoes', StringUtils::underscore('Salsifi-Potatoes'));
        $this->assertEquals('salsifi_potatoes', StringUtils::underscore('SalsifiPotatoes'));
        $this->assertEquals('cms.article.publication_status', StringUtils::underscore('cms.article.publicationStatus'));
    }
}
