<?php
/**
 *
 * Copyright(c) 2000-2007 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 *
 * モバイルサイト/商品検索
 */

// {{{ requires
require_once("../require.php");
require_once(CLASS_EX_PATH . "page_extends/products/LC_Page_Products_Search_Ex.php");

// }}}
// {{{ generate page

$objPage = new LC_Page_Products_Search_Ex();
$objPage->mobileInit();
$objPage->mobileProcess();
$objPage->process();
?>
