<?php


/**
 * Contao bundle contao-copyright.
 *
 * @copyright click solutions GmbH 2024 <https://www.click-solutions.de>
 * @author    René Fehrmann <rf@click-solutions.de>
 * @license   Commercial
 */

declare(strict_types=1);

// Fields
$GLOBALS['TL_DCA']['tl_files']['fields']['meta']['eval']['metaFields']['cs_copyright_text'] = 'maxlength="255"';
$GLOBALS['TL_DCA']['tl_files']['fields']['meta']['eval']['metaFields']['cs_copyright_author'] = 'maxlength="255"';
