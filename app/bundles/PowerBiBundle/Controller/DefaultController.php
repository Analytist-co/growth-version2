<?php

namespace Mautic\PowerBiBundle\Controller;

use Mautic\CoreBundle\Controller\AbstractFormController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DefaultController.
 */
class DefaultController extends AbstractFormController
{
    /**
     * Generates the default view.
     *
     * @return JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->delegateView([
            'viewParameters'  => [],
            'contentTemplate' => '@MauticPowerBi/Default/index.html.twig',
            'passthroughVars' => [],
        ]);
    }

    /**
     * Health Check Path.
     *
     * @return JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function healthCheckAction()
    {
        return new JsonResponse(['success' => true]);
    }

    /**
     * Redirects to the Growth Reports.
     */
    public function redirectToReportAction()
    {
        return $this->redirect($this->generateUrl('mautic_powerbi_index'));
    }
}
