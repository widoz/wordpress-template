<?php # -*- coding: utf-8 -*-

/*
 * This file is part of the WordPress Template package.
 *
 * (c) Guido Scialfa <dev@guidoscialfa.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace WordPressTemplate;

/**
 * Class Template
 * @package WordPressTemplate
 */
class Template
{
    /**
     * @var Controller
     */
    private $controller;

    /**
     * Template constructor.
     *
     * @param Controller $controller
     */
    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }

    /**
     * @param ViewModel $data
     */
    public function render(ViewModel $data): void
    {
        $this->controller->render($data);
    }
}
