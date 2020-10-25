<?php

include 'admin_header.php';
$op = 'Choice';
if (isset($_POST['op'])) {
    $op = trim($_POST['op']);
} elseif (isset($_GET['op'])) {
    $op = trim($_GET['op']);
}
function Choice()
{
    global $xoopsModule;

    xoops_cp_header();

    OpenTable();

    echo "<a href='index.php?op=Edit'>" . _IMP_Edit . '</a><br>';

    CloseTable();

    xoops_cp_footer();
}

function Edit()
{
    global $xoopsDB;

    xoops_cp_header();

    $result = $xoopsDB->query('SELECT historias FROM ' . $xoopsDB->prefix('historias') . ' WHERE historias_id =1');

    $myts = MyTextSanitizer::getInstance();

    [$historias] = $xoopsDB->fetchRow($result);

    OpenTable();

    echo '
<h4>' . _IMP_MODULE_NAME . "</h4>
<form action=index.php?op=Save method=post>
<table width='100%' border='0' cellpadding='4' cellspacing='1'><tr valign='top'>
<td><b>" . _IMP_MESSAGE . "</b></td><td><textarea name='historias' cols='60' rows='30'>$historias</textarea></td></tr>
<tr><td>&nbsp;</td><td>
<input type='submit' value='" . _IMP_SAVE . "'></td></tr>
</table>
</form>";

    CloseTable();

    xoops_cp_footer();
}

function Save($historias)
{
    global $xoopsDB;

    $myts = MyTextSanitizer::getInstance();

    $historias = $myts->addSlashes($historias);

    $xoopsDB->query('UPDATE ' . $xoopsDB->prefix('historias') . " SET historias='$historias' WHERE historias_id=1");

    redirect_header('index.php', 1, _IMP_MODIFSAVE);

    exit();
}

switch ($op) {
    case 'Edit':
        Edit();
        break;
    case 'Save':
        Save($_POST['historias']);
        break;
    default:
        Choice();
        break;
}
