<?php

/**
 * Contao bundle contao-copyright.
 *
 * @copyright click solutions GmbH 2024 <https://www.click-solutions.de>
 * @author    René Fehrmann <rf@click-solutions.de>
 * @license   Commercial
 */

declare(strict_types=1);

// Palettes
$GLOBALS['TL_DCA']['tl_module']['palettes']['cs_copyright_list'] = '{title_legend},name,type;{path_legend},cs_paths';

// Fields
$GLOBALS['TL_DCA']['tl_module']['fields']['cs_paths'] = [
    'exclude' => true,
    'inputType' => 'fileTree',
    'eval' => ['multiple' => true, 'files' => false, 'fieldType' => 'checkbox', 'tl_class' => 'w50'],
    'sql' => "blob NULL",
];
