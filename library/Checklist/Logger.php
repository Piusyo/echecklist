<?php //-*- coding: utf-8 -*-
?>
<?php

/**
 * using the widgets and partials fill out the row
 */

/**
 * This handles logging
 */


$userid = null;
$langtag = null;
$user = null;

class Checklist_Logger {

  public function logit($msg) {
    $log = new Checklist_Modules_KLogger("./log.txt", Checklist_Modules_KLogger::DEBUG);
    $log->LogInfo($msg); 
  }
}
