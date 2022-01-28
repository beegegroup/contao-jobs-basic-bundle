<?php

declare(strict_types=1);

/**
 * Plenta Jobs Basic Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, Plenta.io
 * @author        Plenta.io <https://plenta.io>
 * @link          https://github.com/plenta/
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'plentaJobsShowTypes';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'plentaJobsShowLocations';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'plentaJobsShowButton';

$GLOBALS['TL_DCA']['tl_module']['palettes']['plenta_jobs_basic_offer_list'] =
    '{title_legend},name,type;{config_legend},plentaJobsBasicHeadlineTag;{redirect_legend},jumpTo;{expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['palettes']['plenta_jobs_basic_offer_reader'] =
    '{title_legend},name,type;{config_legend},plentaJobsBasicHeadlineTag;{expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['palettes']['plenta_jobs_basic_filter'] =
    '{title_legend},name,type;{config_legend},plentaJobsMethod,plentaJobsShowButton,plentaJobsShowTypes,plentaJobsShowLocations;{redirect_legend},jumpTo;{expert_legend:hide},cssID'
;

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['plentaJobsShowButton'] = 'plentaJobsSubmit';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['plentaJobsShowTypes'] = 'plentaJobsTypesHeadline,plentaJobsShowAllTypes,plentaJobsShowQuantity';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['plentaJobsShowLocations'] = 'plentaJobsLocationsHeadline,plentaJobsShowAllLocations,plentaJobsShowLocationQuantity';

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsBasicHeadlineTag'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'select',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div'],
    'eval' => ['maxlength' => 8, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(8) NOT NULL default 'h2'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsMethod'] = [
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['POST', 'GET'],
    'eval' => ['tl_class' => 'w50'],
    'sql' => "varchar(12) NOT NULL default 'GET'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsShowButton'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsSubmit'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsShowTypes'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsTypesHeadline'] = [
    'exclude' => true,
    'inputType' => 'inputUnit',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
    'eval' => ['maxlength' => 200, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h3\";}'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsShowAllTypes'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsShowQuantity'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsShowLocations'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'clr'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsLocationsHeadline'] = [
    'exclude' => true,
    'inputType' => 'inputUnit',
    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
    'eval' => ['maxlength' => 200, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h3\";}'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsShowAllLocations'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['plentaJobsShowLocationQuantity'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];
