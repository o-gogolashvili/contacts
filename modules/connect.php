<?php

  mysql_connect($config['host'] , $config['db_user'] , $config['db_pass']);
  mysql_select_db($config['db_name']);
  
?>