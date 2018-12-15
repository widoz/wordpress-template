<?php # -*- coding: utf-8 -*-
// phpcs:disable
namespace WordPressTemplate\Tests\Unit;

use Brain\Monkey;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * Class TestCase
 */
class TestCase extends PHPUnitTestCase
{
    protected static $sourcePath;

    /**
     * Constructs a test case with the given name.
     *
     * @param string $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        self::$sourcePath = dirname(__DIR__, 2);
    }

    /**
     * SetUp
     */
    protected function setUp(): void
    {
        parent::setUp();
        Monkey\setUp();
    }

    /**
     * TearDown
     */
    protected function tearDown(): void
    {
        Monkey\tearDown();
        \Mockery::close();
        parent::tearDown();
    }
}
