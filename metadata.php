<?php


/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'fallbackmodule',
    'title'       => array(
        'de' => 'OXID6 example module',
        'en' => 'OXID6 example module',
    ),
    'description' => array(
        'de' => '<h2>OXID6 example module</h2>',
        'en' => '<h2>OXID6 example module</h2>',
    ),
    'thumbnail'   => 'out/pictures/unitm.png',
    'version'     => '1.0.0',
    'author'      => 'unit-m',
    'url'         => 'https://www.unit-m.net',
    'email'       => 'info@unit-m.de',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Controller\ContentController::class      => \hargul\fallbackmodule\Controller\ContentController::class,
    ),
    'controllers' => array(),
    'files'       => array(),
    'templates'   => array(),
    'blocks'      => array(
        array(
            'template' => 'widget/footer/info.tpl',
            'block'    => 'footer_information_impressum',
            'file'     => '/views/blocks/infonew.tpl',
        ),
        array(
            //admin template without absolute path
            'template' => 'content_main.tpl',
            'block'    => 'admin_content_main_form_fallback_url',
            'file'     => '/views/blocks/content_main_over.tpl',
        ),
        array(
            'template' => 'page/info/content.tpl',
            'block'    => 'content_over',
            'file'     => '/views/blocks/contentover.tpl',
        ),
    ),
    'settings'    => array(),
    'events'      => array(),
);
