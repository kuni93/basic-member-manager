<?php
  error_reporting(E_ALL ^ E_DEPRECATED);
  function create_connection()
  {
    $link = mysql_connect("localhost", "4a3g0007", "4a3g0007")
      or die("Database connect failed. <br>" . mysql_error());

    mysql_query("SET NAMES utf8");

    return $link;
  }

  function execute_sql($database, $sql, $link)
  {
    $db_selected = mysql_select_db($database, $link)
      or die("Database access failed. <br>" . mysql_error($link));

    $result = mysql_query($sql, $link);

    return $result;
  }
?>