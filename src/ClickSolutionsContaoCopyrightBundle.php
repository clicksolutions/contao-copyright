<?php

/**
 * Contao bundle contao-copyright.
 *
 * @copyright click solutions GmbH 2024 <https://www.click-solutions.de>
 * @author    René Fehrmann <rf@click-solutions.de>
 * @license   Commercial
 */

declare(strict_types=1);

namespace ClickSolutions\ContaoCopyrightBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ClickSolutionsContaoCopyrightBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
