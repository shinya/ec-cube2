<?php
/**
 *
 * Copyright(c) 2000-2007 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 *
 * モバイルサイト/会員規約
 */

// {{{ requires
require_once("../require.php");
require_once(CLASS_EX_PATH . "page_extends/entry/LC_Page_Entry_Kiyaku_Ex.php");

// }}}
// {{{ generate page

$objPage = new LC_Page_Entry_Kiyaku_Ex();
$objPage->mobileInit();
$objPage->mobileProcess();
$objPage->process();
?>
