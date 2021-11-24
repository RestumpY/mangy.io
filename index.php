<?php
require('controller.php');
//query('SELECT * from user');
if($_GET['page']=='') $_GET['page']='index';
if($_GET['page']=='index') signIn(); else $_GET['page']();