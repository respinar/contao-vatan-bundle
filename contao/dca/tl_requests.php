<?php

/*
 * This file is part of Vatan Bundle.
 *
 * (c) Hamid Peywasti 2023 <hamid@respinar.com>
 *
 * @license MIT
 */


/**
 * Table tl_requests
 */

use Contao\DataContainer;
use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_requests'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'    => DC_Table::class,
        'closed'                      => true,
		// 'notEditable'                 => true,
		'notCopyable'                 => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'         => DataContainer::MODE_SORTABLE,
			'fields'       => array('tstamp'),
			'flag'         => DataContainer::SORT_DESC,
			'panelLayout'  => 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields'                  => array('tstamp','name','phone','date', 'time'),
			'showColumns'             => true,
			// 'label_callback'          => array('tl_log', 'colorize')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'href'       => 'act=select',
				'tl_class'      => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
            'edit',
			'delete',
			'show' => [
			    'href' => 'act=show',
				'icon' => 'show.svg',
			    'primary' => true,    
			]
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'          => '{name_legend},name,phone;{datetime_legend},date,time,referer,priority;{message_legend},subject,order,message;{cultivation_legend},cultivation,irrigation,cultivatedarea,unit;'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'          => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
            'filter'       => true,
			'sorting'      => true,
			'flag'         => DataContainer::SORT_DAY_DESC,
			'sql'          => "int(10) unsigned NOT NULL default 0"
		),
		'name' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'          => "varchar(255) NOT NULL"
		),
        'phone' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'          => "varchar(255) NOT NULL"
		),
        'message' => array
		(
			'exclude'      => true,
			'inputType'    => 'textarea',
			'eval'         => array('tl_class'=>'clr'),
			'sql'          => "text NOT NULL"
        ),
        'date' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(50) NOT NULL"
		),
        'time' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(5) DEFAULT NULL"
		),
        'referer' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(255) NOT NULL"
		),
        'cultivation' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(255) DEFAULT NULL"
		),
        'subject' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(255) DEFAULT NULL"
		),
		'order' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(255) DEFAULT NULL"
        ),
        'cultivatedarea' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(255) DEFAULT NULL"
        ),
        'unit' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(255) DEFAULT NULL"
        ),
        'irrigation' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "int(10) default NULL"
        ),
        'priority' => array
		(
			'exclude'      => true,
			'inputType'    => 'text',
			'eval'         => array('tl_class'=>'w50'),
			'sql'          => "varchar(255) DEFAULT NULL"
        )
	)
);
