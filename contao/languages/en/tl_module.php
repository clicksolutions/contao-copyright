<?php

/**
 * Contao bundle contao-copyright.
 *
 * @copyright click solutions GmbH 2024 <https://www.click-solutions.de>
 * @author    René Fehrmann <rf@click-solutions.de>
 * @license   Commercial
 */

declare(strict_types=1);

$translations = [
//Legends
    'path_legend' => 'Paths',

    // Fields
    'cs_paths' => ['Reference paths', 'Here you can select the paths to which the display should be limited.'],
];
$GLOBALS['TL_LANG']['tl_module'] = array_merge_recursive($GLOBALS['TL_LANG']['tl_module'], $translations);
