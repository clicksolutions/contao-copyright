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
    // Frontend modules
    'ERR' => [
        'noFiles' => 'No files found.'
    ]
];
$GLOBALS['TL_LANG'] = array_merge_recursive($GLOBALS['TL_LANG'], $translations);
