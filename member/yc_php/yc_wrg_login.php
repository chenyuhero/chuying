<?php
 require 'mod_header_no_cache.php';
 require('inc.php');
 require('dbf.php');

 //begin -->
  $input = file_get_contents("php://input");
  $inputAll = urldecode(substr($input,4)); //data , so 4\
  $arr_co = explode(",",$inputAll);
  
 $db = func_db_getdb($dbhost,'hsslyc',$dbuser,$dbpwd);
 $sql = "SELECT * FROM dede_member WHERE sjh = 13888888888 and pwd = 'a123456'";
 $arr = func_db_query($db,$sql);
 echo $arr;
// <-- end
?>