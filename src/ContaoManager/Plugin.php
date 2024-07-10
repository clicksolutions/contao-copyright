<?php

/**
 * Contao bundle contao-copyright.
 *
 * @copyright click solutions GmbH 2024 <https://www.click-solutions.de>
 * @author    René Fehrmann <rf@click-solutions.de>
 * @license   Commercial
 */

declare(strict_types=1);

namespace ClickSolutions\ContaoCopyrightBundle\ContaoManager;

use ClickSolutions\ContaoCopyrightBundle\ClickSolutionsContaoCopyrightBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ClickSolutionsContaoCopyrightBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
