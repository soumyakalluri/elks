#!/usr/bin/env php
<?php @ob_end_clean(); if(ini_get('output_buffering')) ob_start();

  //$session_id = session_id($_COOKIE['PHPSESSID']); 
  session_start(); // session is started 

  $name = "";
  if( isset( $_SESSION['USERNAME'] )) { 
    $name = $_SESSION['USERNAME']; 
  }

  header("Cache-Control: no-cache");
  header("Content-type: text/html");




  echo "<html><head><title>PHP Sessions </title></head><body><h1 align=center>PHP Sessions Page 2</h1><hr/>\n";

  echo "<p><b>Name:</b> " . $name . " HIIII " . " </p>";
  echo "<p><b>Session id:</b> " . session_id() . " HIIII2 " . " </p>";

  if( $name == "") {
    echo "<p><b>Name:</b> You do not have a name set </p>";
  } 
  else { 
    echo "<p><b>Name:</b>" . $name . "</p>";
  }
  
  echo "<br/><br/>";
  echo "<a href=\"/cgi-bin/php-sessions-1.php\">Session Page 1</a><br/>";
  echo "<a href=\"../hw2/php-cgiform.html\">PHP CGI Form</a><br />";
  echo "<form style=\"margin-top:30px\" action=\"/cgi-bin/php-destroy-session.php\" method=\"get\">";
  echo "<button type=\"submit\">Destroy Session</button>";
  echo "</form>";

  echo "</body>";
  echo "</html>";

