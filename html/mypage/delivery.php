<?php
/*
 * Copyright(c) 2000-2007 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 */

// {{{ requires
require_once("../require.php");
require_once(CLASS_EX_PATH . "page_extends/mypage/LC_Page_Mypage_Delivery_Ex.php");

// }}}
// {{{ generate page

$objPage = new LC_Page_Mypage_Delivery_Ex();
register_shutdown_function(array($objPage, "destroy"));
$objPage->init();
$objPage->process();
?>
