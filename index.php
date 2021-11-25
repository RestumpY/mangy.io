<?php
require('controller.php');
//query('SELECT * from user');
if($_GET['page']=='') $_GET['page']='index';
$_GET['page']();
