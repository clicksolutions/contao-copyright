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
    'aw_cs_copyright_text' => 'Copyright (Text)',
    'aw_cs_copyright_author' => 'Copyright (Author)',
];
$GLOBALS['TL_LANG']['MSC'] = array_merge($GLOBALS['TL_LANG']['MSC'], $translations);
