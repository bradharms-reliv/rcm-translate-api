<?php
return [
    /**
     * Configuration
     */
    'Reliv\\RcmTranslateApi' => [
    ],

    /**
     * Controllers
     */
    'controllers' => [
        'invokables' => [
            'Reliv\RcmTranslateApi\Controller\ApiController' =>
                'Reliv\RcmTranslateApi\Controller\ApiController',
        ],
    ],

    /**
     * Routes
     */
    'router' => [
        'routes' => [
            'Reliv\RcmTranslateApi\Api' => [
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => [
                    'route' => '/api/rcm-translate-api',
                    'defaults' => [
                        'controller' => 'Reliv\RcmTranslateApi\Controller\ApiController',
                    ],
                ],
            ],
        ],
    ],
];
