<?php

$menulink1 = new App\Patterns\Composite\MenuLink('google', 'http://google.com');
$menulink2 = new App\Patterns\Composite\MenuLink('facebook', 'http://facebook.com');
$menulink3 = new App\Patterns\Composite\MenuLink('level 2', 'http://google.com');
$menuitem1 = new App\Patterns\Composite\MenuItem('Level 2 - Item 1');

$megaMenu = new App\Patterns\Composite\MenuCollection;
$subMenu1 = new App\Patterns\Composite\MenuCollection;
$subMenu2 = new App\Patterns\Composite\MenuCollection;
$subMenu3 = new App\Patterns\Composite\MenuCollection;

$megaMenu->add($subMenu1);
$megaMenu->add($subMenu2);
$megaMenu->add($subMenu3);

$subMenu1->add($menulink1);
$subMenu1->add($menulink2);
$subMenu2->add($menulink3);
$subMenu2->add($subMenu3);

$subMenu3->add($menuitem1);

print '<!-- printing entire mega menu -->' . PHP_EOL; $megaMenu->output();
