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
    // Legends
    'path_legend' => 'Pfade',

    // Fields
    'cs_paths' => ['Referenzpfade', 'Hier können Sie die Pfade auswählen, auf die die Anzeige beschränkt werden soll.'],
];
$GLOBALS['TL_LANG']['tl_module'] = array_merge_recursive($GLOBALS['TL_LANG']['tl_module'], $translations);
