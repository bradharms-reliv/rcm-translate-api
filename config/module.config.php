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
     * View
     */
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),

    /**
     * Routes
     */
    'router' => [
        'routes' => [
            'Reliv\RcmTranslateApi\Api' => [
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => [
                    'route' => '/api/rcm-translate-api[/:namespace]',
                    'defaults' => [
                        'controller' => 'Reliv\RcmTranslateApi\Controller\ApiController',
                        'namespace' => 'default',
                    ],
                ],
            ],
        ],
    ],
];
