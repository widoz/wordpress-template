<?php # -*- coding: utf-8 -*-
// phpcs:disable

namespace WordPressTemplate\Tests\Unit;

use ProjectTestsHelper\Phpunit\TestCase;
use WordPressTemplate\Controller;
use WordPressTemplate\Template;
use WordPressTemplate\ViewData;

class TemplateTest extends TestCase
{
    public function testInstance()
    {
        $testee = new Template(\Mockery::mock(Controller::class));

        self::assertInstanceOf(Template::class, $testee);
    }

    public function testRender()
    {
        $controller = \Mockery::mock(Controller::class);
        $viewData = \Mockery::mock(ViewData::class);

        $controller
            ->shouldReceive('render')
            ->once()
            ->with($viewData);

        $testee = new Template($controller);

        $testee->render($viewData);

        self::assertTrue(true);
    }
}
