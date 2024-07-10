<?php

/**
 * Contao bundle contao-copyright.
 *
 * @copyright click solutions GmbH 2024 <https://www.click-solutions.de>
 * @author    René Fehrmann <rf@click-solutions.de>
 * @license   Commercial
 */

declare(strict_types=1);

namespace ClickSolutions\ContaoCopyrightBundle\Controller\FrontendModule;

use Contao\BackendTemplate;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\FilesModel;
use Contao\ModuleModel;
use Contao\StringUtil;
use Contao\System;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CsCopyrightList extends AbstractFrontendModuleController
{
    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        // Backend output
        $scopeMatcher = System::getContainer()->get('contao.routing.scope_matcher');
        if ($scopeMatcher && $scopeMatcher->isBackendRequest($request)) {
            $template = new BackendTemplate('be_wildcard');
            $template->wildcard = '### ' . strtoupper($GLOBALS['TL_LANG']['FMD']['cs_copyright_list'][0]) . ' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $template->getResponse();
        }

        // Cache handling
        $entityCacheTags = System::getContainer()->get('contao.cache.entity_tags');
        $entityCacheTags?->tagWith(FilesModel::class);

        // Get all files
        $files = FilesModel::findAll();
        if (!$files) {
            $template->error = 'noFiles';

            return $template->getResponse();
        }

        // Prepare template data
        $preparedFiles = [];
        foreach ($files as $file) {

            $meta = StringUtil::deserialize($file->meta);
            if (!$meta || !$meta[$GLOBALS['TL_LANGUAGE']]) {
                continue;
            }

            $meta = $meta[$GLOBALS['TL_LANGUAGE']];
            if (!isset($meta['cs_copyright_text']) && !isset($meta['cs_copyright_author'])) {
                continue;
            }

            $preparedFile = [
                'id' => $file->id,
                'uuid' => $file->uuid,
                'name' => $file->name,
                'path' => $file->path,
                'meta' => $meta,
            ];

            $preparedFiles[] = $preparedFile;
        }

        // Set template vars
        $template->files = $preparedFiles;

        return $template->getResponse();
    }
}
