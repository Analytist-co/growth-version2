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
        // return new JsonResponse(['success' => true]);

        return $this->delegateView([
            'viewParameters'  => [],
            'contentTemplate' => '@MauticPowerBi/Default/index.html.twig',
            'passthroughVars' => [
                // 'activeLink'    => '#mautic_powerbi_index',
                // 'mauticContent' => 'powerbi',
                // 'route'         => $this->generateUrl('mautic_powerbi_index'),
            ],
            // 'passthroughVars' => [
            //     'mauticContent' => 'powerbi',
            //     'route'         => $this->generateUrl('mautic_powerbi_index'),
            // ],
        ]);
    }
}
