<?php
require_once ('simple_html_dom.php');
$html = file_get_html('http://tygiadola.com/');
$tins = $html->find(".table-responsive");
var_dump($tins);

?>