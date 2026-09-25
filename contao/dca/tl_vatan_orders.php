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
 * Table tl_vatan_orders
 */

use Contao\DataContainer;
use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_vatan_orders'] =
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
            'fields' => ['tstamp', 'name', 'phone', 'product'],
            'showColumns' => true,
        ],
    ],

    // Palettes
    'palettes' => [
        'default' => '{name_legend},name,phone;{product_legend},product,qty,qty_npk_1,qty_npk_2,qty_npk_3,qty_npk_4;{message_legend},description;{address_legend},address;{datetime_legend},date,referer;',
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
            'eval' => ['maxlength' => 20, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'string',
                'length' => 20,
                'notnull' => true,
            ],
        ],
        'product' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'string',
                'length' => 255,
                'notnull' => true,
            ],
        ],
        'qty' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 10, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'integer',
                'notnull' => true,
            ],
        ],
        'qty_npk_1' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 10, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'integer',
                'notnull' => true,
            ],
        ],
        'qty_npk_2' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 10, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'integer',
                'notnull' => true,
            ],
        ],
        'qty_npk_3' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 10, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'integer',
                'notnull' => true,
            ],
        ],
        'qty_npk_4' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 10, 'tl_class' => 'w50'],
            'sql' => [
                'type' => 'integer',
                'notnull' => true,
            ],
        ],
        'description' => [
            'inputType' => 'textarea',
            'eval' => ['tl_class' => 'clr'],
            'sql' => [
                'type' => 'text',
                'notnull' => true,
            ],
        ],
        'address' => [
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
                'length' => 50,
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
