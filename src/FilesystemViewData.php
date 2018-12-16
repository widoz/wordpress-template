<?php # -*- coding: utf-8 -*-

/*
 * This file is part of the wordpress-template package.
 *
 * (c) Guido Scialfa <dev@guidoscialfa.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace WordPressTemplate;

interface FilesystemViewData extends ViewData
{
    /**
     * Retrieve the template file path
     *
     * @return string
     */
    public function templatePath(): string;
}
