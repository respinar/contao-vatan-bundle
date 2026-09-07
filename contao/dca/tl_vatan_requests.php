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
 * Table tl_requests
 */

use Contao\DataContainer;
use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_vatan_requests'] =
[
    // Config
    'config' => [
        'dataContainer' => DC_Table::class,
        'closed' => true,
        // 'notEditable'                 => true,
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
            'fields' => ['tstamp', 'name', 'phone', 'date', 'time'],
            'showColumns' => true,
        ],
    ],

    // Palettes
    'palettes' => [
        'default' => '{name_legend},name,phone;{datetime_legend},date,time,referer,priority;{message_legend},subject,order,message;{cultivation_legend},cultivation,irrigation,cultivatedarea,unit;',
    ],

    // Fields
    'fields' => [
        'id' => [
            'sql' => 'int(10) unsigned NOT NULL auto_increment',
        ],
        'tstamp' => [
            'filter' => true,
            'sorting' => true,
            'flag' => DataContainer::SORT_DAY_DESC,
            'sql' => 'int(10) unsigned NOT NULL default 0',
        ],
        'name' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
            'sql' => 'varchar(255) NOT NULL',
        ],
        'phone' => [
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
            'sql' => 'varchar(255) NOT NULL',
        ],
        'message' => [
            'inputType' => 'textarea',
            'eval' => ['tl_class' => 'clr'],
            'sql' => 'text NOT NULL',
        ],
        'date' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(50) NOT NULL',
        ],
        'time' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(5) DEFAULT NULL',
        ],
        'referer' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(255) NOT NULL',
        ],
        'cultivation' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(255) DEFAULT NULL',
        ],
        'subject' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(255) DEFAULT NULL',
        ],
        'order' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(255) DEFAULT NULL',
        ],
        'cultivatedarea' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(255) DEFAULT NULL',
        ],
        'unit' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(255) DEFAULT NULL',
        ],
        'irrigation' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'int(10) default NULL',
        ],
        'priority' => [
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
            'sql' => 'varchar(255) DEFAULT NULL',
        ],
    ],
];
