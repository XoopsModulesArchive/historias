<?php

$modversion['name'] = _IMP_MODULE_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _IMP_MODULE_DESC;
$modversion['credits'] = 'Dr. Clone<br>http://205.214.95.10/~drclone/';
$modversion['author'] = 'Dr. Clone';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/logo.png';
$modversion['dirname'] = 'historias';
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
// Tables created by sql file (without prefix!)
$modversion['tables'][0] = 'historias';
//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';
// Menu
$modversion['hasMain'] = 1;
// Templates
$modversion['templates'][1]['file'] = 'historias_index.html';
$modversion['templates'][1]['description'] = '';
