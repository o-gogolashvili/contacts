<?php

    if (mysql_connect($config['host'] , $config['db_user'] , $config['db_pass'])) {
    if (mysql_select_db($config['db_name'])) {
        // nothing here ;)
    	} else {
        print "Couldn't select database";
        exit();
    	}
    } else {
    print "Couldn't connect to database";
    exit();
    }
?>