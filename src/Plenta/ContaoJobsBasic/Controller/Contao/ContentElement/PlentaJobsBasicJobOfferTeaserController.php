<?php

declare(strict_types=1);

/**
 * Plenta Jobs Basic Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, Plenta.io
 * @author        Plenta.io <https://plenta.io>
 * @link          https://github.com/plenta/
 */

namespace Plenta\ContaoJobsBasic\Controller\Contao\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\StringUtil;
use Contao\Template;
use Plenta\ContaoJobsBasic\Contao\Model\PlentaJobsBasicOfferModel;
use Plenta\ContaoJobsBasic\Helper\MetaFieldsHelper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @ContentElement(category="plentaJobsBasic")
 */
class PlentaJobsBasicJobOfferTeaserController extends AbstractContentElementController
{
    protected MetaFieldsHelper $metaFieldsHelper;
    protected $metaFields;

    public function __construct(
        MetaFieldsHelper $metaFieldsHelper
    ) {
        $this->metaFieldsHelper = $metaFieldsHelper;
    }

    public function getMetaFields(ContentModel $model, PlentaJobsBasicOfferModel $jobOffer): array
    {
        if (null !== $this->metaFields) {
            return $this->metaFields;
        }

        $this->metaFields = $this->metaFieldsHelper->getMetaFields($jobOffer, $model->size);

        return $this->metaFields;
    }

    public function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {
        $jobOffer = PlentaJobsBasicOfferModel::findByIdOrAlias($model->plentaJobsBasicJobOffer);
        $template->jobOffer = $jobOffer;
        $parts = StringUtil::deserialize($model->plentaJobsBasicJobOfferTeaserParts);
        if (!\is_array($parts)) {
            $parts = [];
        }
        $template->parts = $parts;
        $template->jobOfferMeta = $this->getMetaFields($model, $jobOffer);
        $template->link = $jobOffer->getFrontendUrl($request->getLocale());

        return $template->getResponse();
    }
}
