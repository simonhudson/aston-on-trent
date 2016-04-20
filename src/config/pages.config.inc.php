<?php

$siteRoot = './';

$pages = (object) array(

    'login' => (object) array(
        'url' => 'login',
        'mainNavText' => 'Log in',
        'pageTitle' => 'Log in',
        'omitFromNav' => true
    ),
    'logout' => (object) array(
        'url' => 'logout',
        'mainNavText' => 'Log out',
        'pageTitle' => 'Log out',
        'omitFromNav' => true
    ),
    'home' => (object) array(
        'url' => $siteRoot,
        'mainNavText' => 'Home',
        'pageTitle' => 'Home',
        'icon' => 'home',
        'hiddenPageHeading' => true
    ),
    'ourvillage' => (object) array(
        'url' => 'ourvillage',
        'mainNavText' => 'Our village',
        'pageTitle' => 'Our village',
        'icon' => 'map-marker',
        'hasSubNav' => true
    ),
    'community' => (object) array(
        'url' => 'community',
        'mainNavText' => 'Community',
        'pageTitle' => 'Community',
        'icon' => 'users',
        'hasSubNav' => true
    ),
    'events' => (object) array(
        'url' => 'events',
        'mainNavText' => 'Events',
        'pageTitle' => 'Events',
        'icon' => 'calendar',
        'hasSubNav' => true
    ),
    'parishcouncil' => (object) array(
        'url' => 'parish-council',
        'mainNavText' => 'Parish Council',
        'pageTitle' => 'Parish Council',
        'icon' => 'comments',
        'hasSubNav' => true
    ),
    'contact' => (object) array(
        'url' => 'contact',
        'mainNavText' => 'Contact us',
        'pageTitle' => 'Contact us',
        'icon' => 'envelope-o',
    )

);


?>