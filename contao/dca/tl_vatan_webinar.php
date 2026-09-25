<?php

declare(strict_types=1);

/*
 * This file is part of Vatan Bundle.
 *
 * (c) Hamid Peywasti
 *
 * @license MIT
 */

/*
 * Table tl_vatan_webinar
 */

use Contao\DataContainer;
use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_vatan_webinar'] =
[
    // Config
    'config' => [
        'dataContainer' => DC_Table::class,
        'closed' => true,
        'notCopyable' => true,
        'sql' => [
            'keys' => [
                'id' => 'primary',
            ],
        ],
    ],

    // List
    'list' => [
        'sorting' => [
            'mode' => DataContainer::MODE_SORTABLE,
            'fields' => ['tstamp'],
            'flag' => DataContainer::SORT_DESC,
            'panelLayout' => 'filter;sort,search,limit',
        ],
        'label' => [
            'fields' => ['tstamp', 'name', 'phone', 'webniar'],
            'showColumns' => true,
        ],
    ],

    // Palettes
    'palettes' => [
        'default' => '{name_legend},name,phone;{webinar_legend},webniar;{datetime_legend},date,referer;',
    ],

    // Fields
    'fields' => [
        'id' => [
            'sql' => [
                'type' => 'integer',
                'autoincrement' => true,
                'notnull' => true,
            ],
        ],
        'tstamp' => [
            'filter' => true,
            'sorting' => true,
            'flag' => DataContainer::SORT_DAY_DESC,
            'sql' => [
                'type' => 'integer',
                'notnull' => true,
                'default' => 0,
            ],
        ],
        'name' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'string',
                'length' => 255,
                'notnull' => true,
            ],
        ],
        'phone' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'string',
                'length' => 255,
                'notnull' => true,
            ],
        ],
        'webniar' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'string',
                'length' => 255,
                'notnull' => true,
            ],
        ],
        'date' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => [
                'type' => 'string',
                'length' => 255,
                'notnull' => true,
            ],
        ],
        'referer' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => [
                'type' => 'string',
                'length' => 255,
                'notnull' => true,
            ],
        ],
    ],
];
