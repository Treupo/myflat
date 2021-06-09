<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "myflat".
 *
 * Auto generated 12-01-2018 19:14
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'MyFlat',
    'description' => 'Flat manager, shows bookings of holiday flats in calendars, availability check included.',
    'category' => 'plugin',
    'author' => 'Joachim Ruhs',
    'author_email' => 'postmaster@joachim-ruhs.de',
    'state' => 'stable',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' =>
        array(
            'depends' =>
                array(
                    'typo3' => '9.5.20-10.4.99',
                    'vhs' => '6.0.0-6.9.99',
                ),
            'conflicts' =>
                array(),
            'suggests' =>
                array(),
        ),
    'clearcacheonload' => false,
    'author_company' => NULL,
    'autoload' =>
        array (
            'psr-4' =>
                array (
                    'WSR\\Myflat\\' => 'Controller/',
                ),
        ),
);

