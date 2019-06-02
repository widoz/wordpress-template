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
 * Interface ViewData
 * @package WordPressTemplate
 */
interface ViewModel
{
    /**
     * Retrieve the Model to Inject to the Template Engine
     *
     * @return mixed
     */
    public function model();

    /**
     * Retrieve the Path Where the Template File is Located
     *
     * @return string
     */
    public function templatePath(): string;
}
