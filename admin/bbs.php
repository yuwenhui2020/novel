<?php

require substr(dirname(__FILE__), 0, -6)."/init.inc.php";

global $tpl;

$mbbs = new MbbsAction($tpl);
$mbbs->action();

//执行diaplay，生成编译文件，并且引入
$tpl->display("admin_bbs.tpl");

?>