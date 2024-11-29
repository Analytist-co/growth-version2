<?php


return [
    'routes' => [
        'main' => [
            'mautic_powerbi_index' => [
                'path'       => '/growth-report',
                'controller' => 'Mautic\PowerBiBundle\Controller\DefaultController::indexAction',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'priority' => 101,
            'items'    => [
                'mautic.powerbi.menu.index' => [
                    'route'     => 'mautic_powerbi_index',
                    'iconClass' => 'ri-information-2-line',
                ],
            ],
        ],
    ],
];
